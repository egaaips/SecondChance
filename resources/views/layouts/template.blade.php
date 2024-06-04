<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondChance</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="assets\img\Logo-SecondChance.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="navbar-container">
        <nav id="navbar" class="nav-list">
            <div class="logo">
                <a href="#">
                    <img src="assets/img/Logo-SecondChance.svg" alt="Logo SecondChance">
                </a>
            </div>

            <div class="hamburger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>

            <div class="top-menu">
                <div class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#000" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
                <ul>
                    <li><a class="nav-link home" href="{{ url('/') }}">Beranda</a></li>
                    <li><a class="nav-link" href="{{ url('/#lokasi') }}">Lokasi</a></li>
                    <li><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                    <li><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
                    <li><a href="{{ url('/donasi') }}" class="btn-rounded-full bg-green">Donasi</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div>
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter your email"><input type="submit"
                                value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="footer-row">

                    <div class="footer-contact">
                        <h3>Second<span style="color: orange;">Chance</span></h3>
                        <p>
                            SecondChance menyediakan cara yang nyaman dan berdampak untuk merapikan ruang Anda sambil
                            mendukung masa depan yang lebih berkelanjutan. Dengan menghubungkan pendonor dan penerima
                            donasi.<br><br>
                            {{-- SecondChance menyediakan cara yang nyaman dan <br>
                            berdampak untuk merapikan ruang Anda sambil <br>
                            mendukung masa depan yang lebih berkelanjutan. <br>
                            Dengan menghubungkan pendonor dan penerima donasi.<br><br> --}}
                            {{-- <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br> --}}
                        </p>
                    </div>

                    <div class="footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Lokasi</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Donasi</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Our Teams</h4>
                        <ul>
                            <li><a href="#">Anggota 1</a></li>
                            <li><a href="#">Anggota 1</a></li>
                            <li><a href="#">Anggota 1</a></li>
                            <li><a href="#">Anggota 1</a></li>
                            <li><a href="#">Anggota 1</a></li>
                            <li><a href="#">Anggota 1</a></li>
                        </ul>
                    </div>

                    <div class="footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Follow us on our social networks</p>
                        <div>
                            <a href="#" class="twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M 16 4 C 9.3844276 4 4 9.3844276 4 16 C 4 22.615572 9.3844276 28 16 28 C 22.615572 28 28 22.615572 28 16 C 28 9.3844276 22.615572 4 16 4 z M 16 6 C 21.534692 6 26 10.465308 26 16 C 26 21.027386 22.311682 25.161277 17.488281 25.878906 L 17.488281 18.916016 L 20.335938 18.916016 L 20.783203 16.023438 L 17.488281 16.023438 L 17.488281 14.443359 C 17.488281 13.242359 17.882859 12.175781 19.005859 12.175781 L 20.810547 12.175781 L 20.810547 9.6523438 C 20.493547 9.6093438 19.822688 9.515625 18.554688 9.515625 C 15.906688 9.515625 14.355469 10.913609 14.355469 14.099609 L 14.355469 16.023438 L 11.632812 16.023438 L 11.632812 18.916016 L 14.355469 18.916016 L 14.355469 25.853516 C 9.6088556 25.070647 6 20.973047 6 16 C 6 10.465308 10.465308 6 16 6 z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom container">
            <div class="copyright">
                &copy; Copyright <strong><span>SecondChance</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
