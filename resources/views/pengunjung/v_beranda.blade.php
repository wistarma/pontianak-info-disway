@extends('pengunjung.layout.v_template')
@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-xl-8 stretch-card grid-margin">
                    <div class="position-relative">
                        <img src="{{ asset('assets/gambar1.jpeg') }}" alt="banner" class="img-fluid" />
                        <div class="banner-content">
                            <div class="badge badge-success fs-12 font-weight-bold mb-3">
                                Headline
                            </div>

                            <h1 class="mb-0">
                                Jadi Pilihan Terbaik di Kelasnya, Rasakan Manfaat Fitur R15
                            </h1>
                            <div class="fs-12">
                                <span class="mr-2">Admin ||</span>10 Menit Lalu
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 stretch-card grid-margin">
                    <div class="card bg-dark text-white">
                        <div class="card text-center">
                            <div class="card-header" style="background-color:red;">
                                <div class="d-flex justify-content-start">
                                    <img src="{{ asset('assets/logo_disway_head.png') }}" style="width:50px;">&emsp;
                                    <h3 class="text-white mt-3">CATATAN DAHLAN ISKAN</h3>
                                </div>
                            </div>
                            <div class="card-body text-black">

                                <h5 class="text-left" style="color:black;">1. Kalbar</h5>
                                <hr>

                                <h5 class="text-left" style="color:black;">2. Pontianak</h5>
                                <hr>

                                <h5 class="text-left" style="color:black;">3. Nasional</h5>
                                <hr>

                                <h5 class="text-left" style="color:black;">4. Tugu Khatulistiwa</h5>
                                <hr>

                                <h5 class="text-left" style="color:black;">5. Waterfront Pontianak</h5>
                                <hr>

                                <h5 class="text-left" style="color:black;">6. Pekan Gawai Dayak</h5>

                                <br><br>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 stretch-card grid-margin">
                    <div class="card">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="card-title">
                                <h3 class="text-center mt-2">BERITA TERKINI</h3>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                            <div class="div-w-80 mr-3 ml-2">
                                <div class="rotate-img">
                                    <img src="{{ asset('assets/anis.jpg') }}" alt="thumb" width="100px;" />
                                </div>
                            </div>
                            <h5 class="font-weight-600 mb-0 text-justify ml-2 mr-2">
                                Keliling Daerah, Anies Dicurhatkan Masyarakat Perkara Mafia
                            </h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3 ml-2">
                                <div class="rotate-img">
                                    <img src="{{ asset('assets/pos.png') }}" alt="thumb" width="100px;" />
                                </div>
                            </div>
                            <h5 class="font-weight-600 mb-0 text-justify ml-2 mr-2">
                                Syarat Pinjam Uang di Kantor Pos Rp 250 Juta, Mudah Nggak Ribet
                            </h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3 ml-2">
                                <div class="rotate-img">
                                    <img src="{{ asset('assets/coldplay.jpg') }}" alt="thumb" width="100px;" />
                                </div>
                            </div>
                            <h5 class="font-weight-600 mb-0 text-justify ml-2 mr-2">
                                Lirik Lagu The Scientist - Coldplay: I Had to Find You
                            </h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3 ml-2">
                                <div class="rotate-img">
                                    <img src="{{ asset('assets/pep.jpg') }}" alt="thumb" width="100px;" />
                                </div>
                            </div>
                            <h5 class="font-weight-600 mb-0 text-justify ml-2 mr-2">
                                Pep Guardiola Buntuti Sir Alex Ferguson, Selisih 17 Trofi!
                            </h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div id="carouselExampleCaptions" class="carousel slide">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/sawit.jpg') }}" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h1>Uni Eropa Adopsi Aturan Baru, Nasib Sawit Hingga Kakao Indonesia
                                                    Terancam!</h1>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/joni.jpg') }}" class="d-block w-100"
                                                alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h1>Jhonny G. Plate Tersangka Korupsi BTS Kominfo, Anies Baswedan :
                                                    Pertemanan Bukan Untuk Berlindung</h1>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/jembatan-sambas.jpeg') }}" class="d-block w-100"
                                                alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h1 style="color: black;">Sutarmidji Harap Jembatan Sungai Sambas Besar
                                                    Diresmikan Jokowi</h1>

                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-sm-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-title">
                                        VIDEO
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <iframe width="885" height="190"
                                                        src="https://www.youtube.com/embed/RseG3WfAK-o"
                                                        title="SKK Migas Menuju Net Zero Emmision - Energi Disway Podcast w/ Dahlan Iskan"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>

                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <h2 style="color:white;">SKK Migas Menuju Net Zero Emmision</h2>
                                                        <div class="video-icon">
                                                            <i class="mdi mdi-play"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <iframe width="885" height="190"
                                                        src="https://www.youtube.com/embed/22FIZGS8T8A"
                                                        title="Kiat Sukses OneMed Group Menjadi Pemimpin Pasar Alkes Dalam Negeri - Energi Disway Podcast #58"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <h2 style="color:white;">Kiat Sukses OneMed Group Menjadi Pemimpin
                                                            Pasar Alkes Dalam Negeri</h2>
                                                        <div class="video-icon">
                                                            <i class="mdi mdi-play"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <iframe width="885" height="190"
                                                        src="https://www.youtube.com/embed/4ndyS-pR13o"
                                                        title="Datang ke Rumah Dahlan Iskan, Erick Thohir Bikin Kejutan"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h2 style="color:white;">Datang ke Rumah Dahlan Iskan, Erick Thohir
                                                            Bikin Kejutan
                                                            Pasar Alkes Dalam Negeri</h2>
                                                        <div class="video-icon">
                                                            <i class="mdi mdi-play"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <iframe width="885" height="190"
                                                        src="https://www.youtube.com/embed/n0HJ0SjhNrc"
                                                        title="5 Tips Sehat ala Dahlan Iskan" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h2 style="color:white;">5 Tips Sehat ala Dahlan Iskan</h2>
                                                        <div class="video-icon">
                                                            <i class="mdi mdi-play"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <iframe width="885" height="190"
                                                        src="https://www.youtube.com/embed/eqsL4uNzErA"
                                                        title="Undang Pembuat Motor Listrik, Dahlan Iskan Tertarik Lagi Kembangkan EV? Energi Disway Podcast #86"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h2 style="color:white;">Undang Pembuat Motor Listrik, Dahlan Iskan
                                                            Tertarik Lagi Kembangkan EV?</h2>
                                                        <div class="video-icon">
                                                            <i class="mdi mdi-play"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <iframe width="905" height="190"
                                                        src="https://www.youtube.com/embed/IOSQLAQwRL8"
                                                        title="Dahlan Iskan ke Titik Nol IKN Nusantara - Disway Vlog"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h2 style="color:white;">Dahlan Iskan ke Titik Nol IKN Nusantara
                                                        </h2>
                                                        <div class="video-icon">
                                                            <i class="mdi mdi-play"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" data-aos="fade-up">

                <div class="col-lg-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="{{ asset('assets/kopi.jpeg') }}" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">Tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        4 Manfaat Berhenti Konsumsi Kafein, Ternyata Benar-benar Dahsyat
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">Admin ||</span>5 Jam
                                    </div>
                                    <p class="mb-0">
                                        Namun, tak bisa dipungkiri ada beberapa hal yang dapat menyebabkan seseorang harus
                                        mengurangi konsumsi kafein. ... <a href="#"> Lihat Selengkapnya</a>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="{{ asset('assets/desta.jpeg') }}" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">Entertaiment</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        Digugat Cerai, Natasha Rizky Sempat Bongkar Peran Spesial Desta: Dia Penjaga
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">Admin ||</span>9 Jam
                                    </div>
                                    <p class="mb-0">
                                        Keretakan rumah tangga keduanya mencuat, setelah Desta menggugat cerai Natasha
                                        Rizky.

                                        Hal ini benar-benar mengejutkan, pasalnya keduanya terlihat sangat harmonis ... <a
                                            href="#"> Lihat Selengkapnya</a>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="{{ asset('assets/arsenal.jpg') }}" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">Liga Inggris</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h2 class="mb-2 font-weight-600">
                                        Arsenal Injak Banyak Ranjau Usai Bertemu Liverpool di Anfield, Arteta: Kami
                                        Membiarkan Banyak Gol
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">Admin ||</span>1 Hari
                                    </div>
                                    <p class="mb-0">
                                        Pelatih Arsenal, Mikel Arteta dipastikan tak akan bisa tidur nyenyak beberapa pekan
                                        ke depan.

                                        Arsenal kembali menelan kekalahan 1-0 di markas Nottingham Forest, Sabtu, 20 Mei
                                        2023 malam ...<a href="#"> Lihat Selengkapnya</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
