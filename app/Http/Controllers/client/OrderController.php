<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function checkout(Request $request)
    {
        
        $request->request->add(['total_harga' => $request->qty * 10000, 'status' =>'unpaid']);
        // dd($request->all());
        $order = Order::create($request->all());
     
         //SAMPLE REQUEST START HERE
 
         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = config('midtrans.server_key');
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;
 
         $params = array(
             'transaction_details' => array(
                 'order_id' => $order->id,
                 'gross_amount' => $order->total_harga,
             ),
             'customer_details' => array(
                 'nama' => $request->nama,
                 'no_wa' => $request->no_wa,
             ),
         );
 
         $snapToken = \Midtrans\Snap::getSnapToken($params);
        
         return view('client.payment.checkout',compact('snapToken','order'));
    }
     
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'paid']);
            }
        }
        
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('client.payment.invoice',compact('order'));
    }

    public function index()
    {
        return view('client.payment.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    
}
