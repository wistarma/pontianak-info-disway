<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pontianak Info - Disway || {{ $title }}</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('template_pengunjung') }}/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('template_pengunjung') }}/assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('template_pengunjung') }}/assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('template_pengunjung') }}/assets/css/style.css">
    <!-- endinject -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .card.shadow {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }


        .container-4 {
            overflow: hidden;
            width: 500px;
            vertical-align: middle;
            white-space: nowrap;
            border-radius: 4px;
            box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
        }

        .container-4 input#search {
            width: 500px;
            height: 50px;
            background: #fff;
            border: none;
            font-size: 10pt;
            float: left;
            color: #000;
            padding-left: 15px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .container-4 input#search::-webkit-input-placeholder {
            color: #65737e;
        }

        .container-4 input#search:-moz-placeholder {
            /* Firefox 18- */
            color: #65737e;
        }

        .container-4 input#search::-moz-placeholder {
            /* Firefox 19+ */
            color: #65737e;
        }

        .container-4 input#search:-ms-input-placeholder {
            color: #65737e;
        }

        .container-4 button.icon {
            -webkit-border-top-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            -moz-border-radius-topright: 5px;
            -moz-border-radius-bottomright: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border: none;
            background: #232833;
            height: 50px;
            width: 50px;
            color: #4f5b66;
            opacity: 0;
            font-size: 10pt;
            -webkit-transition: all .55s ease;
            -moz-transition: all .55s ease;
            -ms-transition: all .55s ease;
            -o-transition: all .55s ease;
            transition: all .55s ease;
        }

        .container-4:hover button.icon,
        .container-4:active button.icon,
        .container-4:focus button.icon {
            outline: none;
            opacity: 1;
            margin-left: -50px;
        }

        .container-4:hover button.icon:hover {
            background: white;
        }


        .social-media-icons a {
            display: inline-block;
            margin-right: 10px;
            border-radius: 50%;
            /* Atur radius sesuai kebutuhan */
            width: 40px;
            /* Atur lebar ikon sesuai kebutuhan */
            height: 40px;
            /* Atur tinggi ikon sesuai kebutuhan */
            text-align: center;
            line-height: 40px;
            /* Atur jarak ikon tengah secara vertikal */
            font-size: 18px;
            /* Atur ukuran ikon sesuai kebutuhan */
            color: #fff;
            /* Atur warna ikon sesuai kebutuhan */
        }

        .fb-icon {
            background-color: #3b5998;
            /* Warna latar belakang ikon Facebook */
        }

        .instagram-icon {
            background-color: #e4405f;
            /* Warna latar belakang ikon Instagram */
        }

        .twitter-icon {
            background-color: #1da1f2;
            /* Warna latar belakang ikon Twitter */
        }

        .youtube-icon {
            background-color: #ff0000;
            /* Warna latar belakang ikon YouTube */
        }


        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            display: inline-block;
        }

        .menu li a {
            display: block;
            padding: 10px;
            text-decoration: none;
        }

        .submenu {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 0;
            list-style: none;
        }

        .submenu li {
            display: block;
        }

        .menu li:hover .submenu {
            display: block;
        }

        .submenu li a {
            padding: 10px;
        }

        .submenu li:hover a {
            background-color: #f0f0f0;
        }

        .horizontal-line {
            border-bottom: 4px solid #000;
            /* Atur lebar dan warna garis sesuai kebutuhan */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            @include('pengunjung.layout.v_nav')


            @yield('content')
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
            <footer>
                <div class="horizontal-line"></div>
                <div class="footer-top" style="background-color: white;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/logo.png') }}" width="250px;" class="footer-logo"
                                    alt="" />

                                <ul class="social-media mb-3">
                                    <div class="social-media-icons">
                                        <a href="#" class="fb-icon"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="instagram-icon"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="twitter-icon"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="youtube-icon"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="col-sm-7">
                                <h3 class="font-weight-bold mb-3" style="color:black;">NETWORK</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2">
                                            <div class="row">

                                                <div class="col-6">
                                                    <li style="color:black;">
                                                        Pontianak Info - Disway
                                                    </li>
                                                </div>
                                                <div class="col-6">
                                                    <li style="color:black;">
                                                        Pontianak Informasi
                                                    </li>
                                                </div>
                                                <div class="col-6">
                                                    <li style="color:black;">
                                                        Pontianak Radar
                                                    </li>
                                                </div>
                                                <div class="col-6">
                                                    <li style="color:black;">
                                                        Pontianak Keras
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="d-sm-flex justify-content-end align-items-center mr-2">
                            <div class="fs-14 font-weight-600" style="color:black;">
                                © {{ date('Y') }}. All rights
                                reserved.
                            </div>

                        </div>
                    </div>

                </div>

            </footer>

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <script src="{{ asset('template_pengunjung') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('template_pengunjung') }}/assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('template_pengunjung') }}/assets/js/demo.js"></script>
    <script src="{{ asset('template_pengunjung') }}/assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
