<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIPELAS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/bulet_logo.png')}}" rel="icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span><img src="assets/img/a1.png"></span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#features">Kontak Darurat</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">List Pengaduan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Pengaduan</a></li>
                    <li class="dropdown"><a href="#"><span>Login/Daftar</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @if (Auth::user())
                            @if (auth()->user()->is_admin == 1)
                            <li><a href="{{ route('admin.home') }} ">Home </a></li>
                            @else
                            <li class="dropdown-item">{{ Auth::user()->name }} </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf

                            </form> </li>
                            @endif
                            @else
                            <li><a href="{{ route('login') }} ">Login</a></li>
                            <li><a href="{{ route('register') }} ">Daftar Akun</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1><span>SI PELAS</span></h1>
                        <h2>Sistem Pelaporan Aspirasi Masyarakat</h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Apa itu SI PELAS?</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/bulet_logo.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                        <img src="assets/img/details-2.png" class="pict mb-4"></img>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Apa Itu SI PELAS?</h3>
                        <p>SI PELAS adalah sistem informasi yang berfungsi untuk menampung laporan keluh kesah dari
                            masyarakat terkait fasilitas, kehilangan barang dan aspirasi kepada instansi yang berwenang.
                        </p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-comment-check"></i></div>
                            <h4 class="title"><a href="">Praktis</a></h4>
                            <p class="description">Dengan adanya SI PELAS ini, masyarakat tidak perlu harus pergi ke
                                instansi daerah sekitar untuk melaporkannya secara langsung. </p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-mobile-alt"></i></div>
                            <h4 class="title"><a href="">Simple</a></h4>
                            <p class="description">Lakukan pengaduan melalui website ini, lalu sertakan bukti foto
                                beserta deskripsinya.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-search-alt"></i></div>
                            <h4 class="title"><a href="">Cepat</a></h4>
                            <p class="description">Pemerintah daerah atau pihak yang berwenang akan segera melakukan
                                tindakan untuk mengatasinya.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak Darurat</h2>
                    <p>Hubungi apabila terdapat situasi darurat.</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <h3><a href="">Ambulans</a></h3>
                        </div>
                    </div>

                </div>
        </section><!-- End Features Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bx bx-message-detail"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ count($laporan) }} " data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p>Pengaduan</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p>Kontak Darurat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="63" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p>Panggilan Darurat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p>Penanganan</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>List Pengaduan</h2>
                    <p>Bukti-Bukti Foto</p>
                </div>

                <div class="row no-gutters" data-aos="fade-left">
                    @foreach ($laporan as $item)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ asset('images/'. $item->get_detail->lampiran) }} " class="gallery-lightbox">
                                <img src="{{ asset('images/'.$item->get_detail->lampiran) }} " alt="{{ $item->get_detail->lampiran }} " class="img-fluid">
                            </a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Pengaduan</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <div class="section-title" data-aos="fade-up">
                            <p>Pengaduan</p>
                        </div>
                        <form action="{{ route('pengaduan') }} " method="post" role="form" class="php-email-form"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="judul" class="form-control" id="nomor" placeholder="Judul"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal"
                                        placeholder="Tanggal Kejadian" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <select name="instansi_id" class="form-control" id="">
                                    @foreach ($instansi as $item)
                                    <option value="{{ $item->id }} "> {{ $item->nama_instansi }} -
                                        {{ $item->get_lokasi->lokasi }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="deskripsi" rows="5" placeholder="Deskripsi Kejadian"
                                    required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <select name="kategori_id" class="form-control" id="">
                                    @foreach ($kategori as $item)
                                    <option value="{{ $item->id }} "> {{ $item->nama_kategori }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <input type="file" name="uploadfile" id="img" />
                            </div>
                            @if (Auth::user())
                            <input type="hidden" name="user_id" value=" {{ Auth::user()->id }} ">
                            <input type="hidden" name="tipe" value="Pengaduan">
                            <div class="text-center"><button type="submit">Laporkan!</button></div>
                            @else
                            <div class="text-center"><a href=" {{ route('login') }} " class="btn btn-success">Login
                                    Terlebih Dahulu</a></div>
                            @endif
                        </form>
                    </div>


                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <div class="section-title" data-aos="fade-up">
                            <p>Aspirasi</p>
                        </div>
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nomor" class="form-control" id="nomor"
                                        placeholder="Nomor Pelapor" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal"
                                        placeholder="Tanggal Kejadian" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Tempat Kejadian" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Deskripsi Kejadian"
                                    required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <input type="file" name="uploadfile" id="img" style="display:none;" required="" />
                                <label for="img">Klik Untuk Upload Bukti Foto Pengaduan</label>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Aspirasi!</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-links">
                    <img src="assets/img/footer.png">
                </div>

                <div class="col-lg-8 col-md-6 footer-links">
                    <p>"Semakin Baik Pelayanannya, Semakin Bagus Kotanya"</p>
                </div>

            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>SIPELAS</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
