@extends('client.index')
@section('content')
    <main>
        <article>

            <!--
            - #HERO
          -->

            <section class="section hero" id="home" aria-label="home"
                style="background-image: url('./assets/images/hero-bg.jpg')">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">World Gaming</p>

                        <h1 class="h1 hero-title">
                            Create <span class="span">Manage</span> Matches
                        </h1>

                        <p class="hero-text">
                            Find technology or people for digital projects in public sector and Find an individual
                            specialist develope
                            researcher.
                        </p>

                        <button class="btn skewBg">Read More</button>

                    </div>

                    <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
                        <img src="./assets/images/hero-banner.png" width="700" height="700" alt="hero banner"
                            class="w-100">
                    </figure>

                </div>
            </section>

            <!--
            - #SHOP
          -->

            <section class="section shop" id="shop" aria-label="shop"
                style="background-image: url('./assets/images/shop-bg.jpg')">
                <div class="container">

                    <h2 class="h2 section-title">
                        Product <span class="span">Shop</span>
                    </h2>

                    <p class="section-text">
                        Compete with 100 players on a remote island for winner takes showdown known issue where certain skin
                        strategic
                    </p>


                    <div class="product-container">
                        @foreach ($product as $pro)
                            <div class="product-item">
                                <ul class="has-scrollgrid">
                                    <li class="scrollbar-item">
                                        <div class="shop-card" style="width: 20rem; height: 30rem;">
                                            <!-- Konten produk disini -->
                                            @empty($pro->foto)
                                                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                                                    <img src="./assets/images/shop-img-1.jpg" width="300" height="260"
                                                        loading="lazy" alt="Women Black T-Shirt" class="img-cover">
                                                </figure>
                                            @else
                                                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                                                    <img src="{{ url('admin/foto/product') }}/{{ $pro->foto }}"
                                                        width="300" height="260" loading="lazy" alt="Women Black T-Shirt"
                                                        class="img-cover">
                                                </figure>
                                            @endempty


                                            <div class="card-content">

                                                <a href="#" class="card-badge skewBg">{{ $pro->jenis }}</a>

                                                <h3 class="h3">
                                                    <a href="#" class="card-title">{{ $pro->name }}</a>
                                                </h3>

                                                <div class="card-wrapper">
                                                    <p class="card-price">${{ $pro->harga }}</p>

                                                    <button class="card-btn">
                                                        <ion-icon name="basket"></ion-icon>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>

            


            <!--
            - #BRAND
          -->

            <section class="section brand" aria-label="brand">
                <div class="container">

                    <ul class="has-scrollbar">

                        <li class="brand-item">
                            <img src="./assets/images/brand-1.png" width="90" height="90" loading="lazy"
                                alt="brand logo">
                        </li>

                        <li class="brand-item">
                            <img src="./assets/images/brand-2.png" width="90" height="90" loading="lazy"
                                alt="brand logo">
                        </li>

                        <li class="brand-item">
                            <img src="./assets/images/brand-3.png" width="90" height="90" loading="lazy"
                                alt="brand logo">
                        </li>

                        <li class="brand-item">
                            <img src="./assets/images/brand-4.png" width="90" height="90" loading="lazy"
                                alt="brand logo">
                        </li>

                        <li class="brand-item">
                            <img src="./assets/images/brand-5.png" width="90" height="90" loading="lazy"
                                alt="brand logo">
                        </li>

                        <li class="brand-item">
                            <img src="./assets/images/brand-6.png" width="90" height="90" loading="lazy"
                                alt="brand logo">
                        </li>

                    </ul>

                </div>
            </section>


            <!--
            - #BLOG
          -->

            <section class="section blog" id="blog" aria-label="blog">
                <div class="container">

                    <h2 class="h2 section-title">
                        Latest News & <span class="span">Update</span>
                    </h2>

                    <p class="section-text">
                        Compete With 100 Players On A Remote Island For Winner Takes Showdown Known Issue Where Certain Skin
                        Strategic
                    </p>

                    <ul class="blog-list">

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                                    <img src="./assets/images/blog-1.jpg" width="400" height="290" loading="lazy"
                                        alt="Shooter Action Video" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="person-outline"></ion-icon>

                                            <a href="#" class="item-text">Admin</a>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline"></ion-icon>

                                            <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                                        </li>

                                    </ul>

                                    <h3>
                                        <a href="#" class="card-title">Shooter Action Video</a>
                                    </h3>

                                    <p class="card-text">
                                        Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                                    </p>

                                    <a href="#" class="card-link">
                                        <span class="span">Read More</span>

                                        <ion-icon name="caret-forward"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                                    <img src="./assets/images/blog-2.jpg" width="400" height="290" loading="lazy"
                                        alt="The Walking Dead" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="person-outline"></ion-icon>

                                            <a href="#" class="item-text">Admin</a>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline"></ion-icon>

                                            <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                                        </li>

                                    </ul>

                                    <h3>
                                        <a href="#" class="card-title">The Walking Dead</a>
                                    </h3>

                                    <p class="card-text">
                                        Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                                    </p>

                                    <a href="#" class="card-link">
                                        <span class="span">Read More</span>

                                        <ion-icon name="caret-forward"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                                    <img src="./assets/images/blog-3.jpg" width="400" height="290" loading="lazy"
                                        alt="Defense Of The Ancients" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="person-outline"></ion-icon>

                                            <a href="#" class="item-text">Admin</a>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline"></ion-icon>

                                            <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                                        </li>

                                    </ul>

                                    <h3>
                                        <a href="#" class="card-title">Defense Of The Ancients</a>
                                    </h3>

                                    <p class="card-text">
                                        Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                                    </p>

                                    <a href="#" class="card-link">
                                        <span class="span">Read More</span>

                                        <ion-icon name="caret-forward"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
            - #NEWSLETTER
          -->

            <section class="newsletter" aria-label="newsletter">
                <div class="container">

                    <div class="newsletter-card">

                        <h2 class="h2">
                            Our <span class="span">Newsletter</span>
                        </h2>

                        <form action="" class="newsletter-form">

                            <div class="input-wrapper skewBg">
                                <input type="email" name="email_address" aria-label="email"
                                    placeholder="Enter your email..." required class="email-field">

                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <button type="submit" class="btn newsletter-btn skewBg">
                                <span class="span">Subscribe</span>

                                <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
                            </button>

                        </form>

                    </div>

                </div>
            </section>

        </article>
    </main>
@endsection
