<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('id','DESC')->get();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'jenis' => 'required|max:45',
            'harga' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Product::create($request->all());
            //---aoakah user ingin upload foto
            if(!empty($request->foto)){
                $fileName=$request->name.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('admin/foto/product'),$fileName);
            }
            else{
                $fileName = '';
            }
            //insert data dari request form
            DB::table('product')->insert(
                [
                    'name' => $request->name,
                    'jenis' => $request->jenis,
                    'harga' => $request->harga,
                    'keterangan' => $request->keterangan,
                    'foto' => $fileName,
                    'created_at' => now(),
              ]);
                

            
            return redirect()->route('product.index')
            ->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pro = Product::find($id);
        return view('admin.product.detail',compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pro = Product::find($id);
        return view('admin.product.edit',compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'jenis' => 'required|max:45',
            'harga' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---ambil foto lama
            $foto = DB::table('product')->select('foto')->where('id',$id)->get();
            foreach($foto as $co){
                $namaFileFotoLama = $co->foto;
            }
            //---aoakah user ingin ganti foto lama
            if(!empty($request->foto)){
                //jika ada foto lama , hapus terlebih dahulu
                if(!empty($fil->foto)) unlink('admin/foto/product'.$fil->foto);
                //foto lama ganti foto baru
                $fileName=$request->name.'.'.$request->foto->extension();
                //$fileName=$request->foto->getClientOriginalName();
                $request->foto->move(public_path('admin/foto/product'),$fileName);
            }
            //---user tidak ganti foto lama
            else{
                $fileName = $namaFileFotoLama;
            }
            DB::table('product')->where('id',$id)->update(
                [
                    'name' => $request->name,
                    'jenis' => $request->jenis,
                    'harga' => $request->harga,
                    'keterangan' => $request->keterangan,
                    'foto' => $fileName,
                    'updated_at' => now(),
              ]);
            
            return redirect('/product'.'/'.$id)
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pro = Product::find($id);
        Product::where('id',$id)->delete();
        return redirect()->route('product.index')
            ->with('success','Data Berhasil Dihapus');
    }
}
