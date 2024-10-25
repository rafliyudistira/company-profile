@extends('layouts.main')

@section('title', 'Visi & Misi')

@section('content')
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Visi & Misi<br></h1>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Visi & Misi<br></li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- About Us Section -->
<section id="about-us" class="section about-us">

    <div class="container">

        <div class="row gy-4" style="padding: 20px;">

            <div class="col-lg-5 order-1 order-lg-2" style="padding-left:60px;" data-aos="fade-up" data-aos-delay="100">
                <img src="https://anugerahteknikasia.com/wp-content/uploads/2020/12/iconvisimisi.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-7 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Visi:</h3>
                <p align="justify">
                    Menjadi Perusahaan yang memiliki keunggulan daya saing berkelanjutan dalam bidang usaha Perdagangan Barang dan Jasa.
                </p>
                <h3>Misi:</h3>
                <p align="justify">
                    Melaksanakan kegiatan usaha dalam bidang Perdagangan Barang, Jasa Konstruksi, Mekanik dan Elektrik yang kompetitif berdasarkan 6 Komitmen Mutu:
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Quality</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Cost</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Delivery</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Safety</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Environment</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Moral</span></li>
                </ul>
            </div>

        </div>

    </div>

</section><!-- /About Us Section -->


</main>
@endsection