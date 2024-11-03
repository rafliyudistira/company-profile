@extends('layouts.main')

@section('title', 'Contact')

<style>
    .breadcrumbs .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* Agar teks dan breadcrumb sejajar secara vertikal */
    }

    .breadcrumbs h1 {
        margin: 0;
        /* Hilangkan margin untuk teks agar menempel ke kiri */
    }

    .breadcrumbs ol {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumbs ol li {
        margin-left: 10px;
        /* Spasi antar item breadcrumb */
    }

    .breadcrumbs ol li a {
        text-decoration: none;
        /* Sesuaikan sesuai keinginan */
    }

    .btn {
        width: 100%;
        border-radius: 5px !important;
        height: 50px;
        color: white !important;
        background-color: var(--accent-color) !important;
    }

    .btn:hover {
        background-color: #3bceff !important;
    }

    .form-control {
        font-size: 15px !important;
        height: 50px !important;
    }

    .area {
        height: 95% !important;
    }

    .maps iframe {
        width: 100% !important;
    }
</style>

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <h2><b>Contact</b></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Contact<br></li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Name">
                            </div>
                            <div class="mb-3 mt-4">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3 mt-4">
                                <input type="subject" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Subject">
                            </div>
                            <button type="submit" class="btn mt-3"><b>SEND MESSAGE</b></button>
                        </form>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                        <div class="form-group">
                            <textarea class="form-control area" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h6><b>Workshop</b></h6>
                        <p>Grand Taruma Darmawangsa Blok II.B No.42 – Karawang</p>
                        <p><b>Telp:</b> 0267 - 8407445</p>
                        <img id="hover-3" src="{{ asset('assets/img/barcode/1.png') }}" class="img-fluid" width="200"
                            height="200" alt="" data-aos="fade-up" data-aos-delay="100">
                    </div>

                </div>

            </div>

        </section>

        <section id="about-us" class="section about-us">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-12 order-1 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                        <h6 style="text-align: center"><b>Workshop</b></h6>
                        <div class="maps mt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4477.645817709608!2d115.23745009432656!3d-8.728090450213415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2415371c6ab9b%3A0x7f49b9334ab8102b!2sUID%20Bali%20Campus!5e1!3m2!1sen!2sid!4v1728983757866!5m2!1sen!2sid"
                                width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
