@extends('client.index')
@section('content')
    <!--Deliver Info Start-->

    <section class="deliver-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Hubungi kami melalui kontak dibawah</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum quam, minima ullam cum ad odit eaque
                        blanditiis distinctio quisquam ipsa dolor quas! Ea illum libero reiciendis consequatur dignissimos
                        illo,
                        quas sed adipisci sint voluptatem sunt numquam nisi modi dicta nostrum repellendus et itaque quaerat
                        consectetur. Dolor a velit tempore dolore.</p>
                </div>
            </div>
            <style>
                .centered-text {
                  text-align: center;
                  color: #007bff; /* Warna biru primary */
                  margin-top: 10px;
                }
              </style>
              
              <div class="row">
                <div class="col-lg-12 col-md-6">
                  <h3 class="centered-text">atau</h3>
                </div>
              </div>
              
            <div class="row">
                <div class="col-lg-9">
                    <div class="deliver-info-form">
                        <h6>Form information</h6>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Apartment, House</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div mb-0">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">City</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 mt-30">
                                    <select name="" id="">
                                        <option value="01">Country/Region</option>
                                        <option value="02">United States</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-30">
                                    <select name="" id="">
                                        <option value="01">States</option>
                                        <option value="02">Chicago</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-30">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Zip Code</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="email" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Email</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-primary" type="submit">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Deliver Info End-->
@endsection
