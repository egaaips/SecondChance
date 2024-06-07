@extends('layouts.template')

@section('main')
    <section class="hero-slider">
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="assets/img/hero1.png" alt="">
                    <div class="content-slider">
                        <div class="title">GIVE YOUR UNWORN<br>RENEW HOPE!</div>
                        <div class="description">
                            Give your unworn clothes a new purpose! Donate them today to
                            support sustainability and renew hope for those in need. Your
                            contribution can make a world of difference.
                        </div>
                        <div class="button">
                            <a href="{{ url('/donasi') }}" class="btn-rounded-full bg-green">DONASI SEKARANG</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/produk-katalog/16.png" alt="">
                    <div class="content-slider">
                        <div class="title">GIVE YOUR UNWORN<br>RENEW HOPE!</div>
                        <div class="description">
                            Give your unworn clothes a new purpose! Donate them today to
                            support sustainability and renew hope for those in need. Your
                            contribution can make a world of difference.
                        </div>
                        <div class="button">
                            <a href="{{ url('/donasi') }}" class="btn-rounded-full bg-green">DONASI SEKARANG</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/produk-katalog/17.png" alt="">
                    <div class="content-slider">
                        <div class="title">GIVE YOUR UNWORN<br>RENEW HOPE!</div>
                        <div class="description">
                            Give your unworn clothes a new purpose! Donate them today to
                            support sustainability and renew hope for those in need. Your
                            contribution can make a world of difference.
                        </div>
                        <div class="button">
                            <a href="{{ url('/donasi') }}" class="btn-rounded-full bg-green">DONASI SEKARANG</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/produk-katalog/18.png" alt="">
                    <div class="content-slider">
                        <div class="title">GIVE YOUR UNWORN<br>RENEW HOPE!</div>
                        <div class="description">
                            Give your unworn clothes a new purpose! Donate them today to
                            support sustainability and renew hope for those in need. Your
                            contribution can make a world of difference.
                        </div>
                        <div class="button">
                            <a href="{{ url('/donasi') }}" class="btn-rounded-full bg-green">DONASI SEKARANG</a>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-control-next" onclick="nextSlide()">&#10095;</button>
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about">
        <h2>Tentang Kami</h2>
        <div class="container-about">
            <div class="image-about">
                <img src="assets/img/mikir.png" class="img-fluid" alt="About Image">
            </div>
            <div class="about">
                <div class="content">
                    <div class="wrapper-text">

                        <h3 class="text-title">What is Second Chance?</h3>
                        <p class="lead">
                            Second Chance is a platform that allows you to share your gently used clothes, which are then
                            reprocessed and given to those in need. In this way, we can reduce textile waste and give unused
                            clothes a new lease of life.
                        </p>
                    </div>
                    <div class="wrapper-text">

                        <h3 class="text-title">How to Contribute to Second Chance?</h3>
                        <p class="lead">
                            You can contribute by donating your used clothes to our local drop points, which will then be
                            reprocessed and given to those in need. In this way, we can reduce textile waste and give unused
                            clothes a new lease of life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Fitur Section ======= -->
    <section id="fitur" class="fitur">

        <div class="fitur-container">

            <header class="section-header">
                <h2>Fitur Kami</h2>
            </header>
            <div class="fitur-row">
                <div>
                    <div class="fitur-box">
                        <div class="fitur-icon">
                            <img src="{{asset('/assets/img/icon-news.svg')}}" class="img-fluid" alt="">
                        </div>
                        <h3>Edukasi dan Informasi</h3>
                        <p>Temukan koleksi fashion berkualitas tinggi yang ramah lingkungan,
                            terbuat dari bahan-bahan daur ulang dan sustainable, untuk gaya
                            yang tidak hanya stylish tetapi juga bertanggung jawab terhadap
                            lingkungan.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="fitur-box">
                        <div class="fitur-icon">
                            <img src="{{asset('assets/img/icon-location.svg')}}" class="img-fluid" alt="">
                        </div>
                        <h3>Drop Point Lokal</h3>
                        <p> Temukan lokasi drop point di kota-kota besar untuk menyumbangkan
                            pakaian bekas dengan mudah. Dukung gerakan daur ulang dan
                            berkontribusi langsung pada keberlanjutan lingkungan di tempat
                            tinggal Anda.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="fitur-box">
                        <div class="fitur-icon">
                            <img src="{{asset('assets/img/icon-donation.svg')}}" class="img-fluid" alt="">
                        </div>
                        <h3>Program Donasi Pakaian</h3>
                        <p>Sumbangkan pakaian bekas Anda untuk diolah kembali dan memberikan
                            peluang baru bagi mereka yang membutuhkan. Bersama, kita bisa
                            mengurangi limbah tekstil dan mewujudkan praktik konsumsi yang
                            lebih bertanggung jawab.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="fitur-box">
                        <div class="fitur-icon">
                            <img src="{{asset('assets/img/icon-recycle.svg')}}" class="img-fluid" alt="">
                        </div>
                        <h3>Program Tukar Pakaian</h3>
                        <p>Bosan dengan pakaian yang ada di lemari Anda? Datanglah ke drop point kami untuk      
                            menukar pakaian anda menjadi pakaian baru. Bersama, kita bisa
                            mengurangi limbah tekstil dan mewujudkan praktik konsumsi yang
                            lebih bertanggung jawab.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Fitur Section -->

    <!-- Location Section -->
    <section id="lokasi">
        <h2>Lokasi Kami</h2>
        <div class="maps">
            <iframe src="{{ asset('maps/maps.html') }}" width="100%" height="450" frameborder="0" style="border:0;"
                allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </section>
    <!-- End Location Section -->

    <!-- CTA Section -->
    <section id="cta" class="cta-section">
        <div class="cta-content">
            <h2>Bergabung dengan Kami</h2>
            <p>Bersama kita bisa membuat perubahan. Mari bergabung dan dukung gerakan kami untuk menciptakan lingkungan
                yang
                lebih baik.</p>
            <a href="#" class="btn-cta">Pelajari Lebih Lanjut</a>
        </div>
    </section>
    <!-- CTA Section End -->

    <!-- Blog Section -->
    <section id="blog">
        <h2>Artikel Terbaru</h2>
        <div class="blog-container">
            @foreach ($recentPost as $blog)                
            <div class="card-blog">
            <a href="{{ route('blog.show', $blog->id) }}">
                <article>
                    <div class="post-box">
                        <div class="post-img">
                            <img src="{{ Storage::url($blog->image) }}" class="img-fluid" alt="gambar artikel">
                        </div>
                        <div class="post-description">
                            <span class="post-date">
                                {{ $blog->created_at->format('d F Y') }}
                            </span>
                            <h3 class="post-title">
                                {{ $blog->title }}
                            </h3>
                            <a href="{{ route('blog.show', $blog->id) }}" class="readmore stretched-link mt-auto">
                                <span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </a>
            </div>
            @endforeach
        </div> 

        <a href="{{ route('blog.blog') }}" class="btn-rounded-full read-more">ARTIKEL LAINNYA</a>
    </section>
    <!-- Blog Section End-->
@endsection
