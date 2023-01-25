@extends('layouts.user')
@section('konten')

<!-- ======= Foto Kegiatan Bapak ibu guru ======= -->
<!-- Konten Static -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">KUDA HITAM FC</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($data as $a)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{ asset('foto_galeri/'.$a->foto) }}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>{{ $a->judul }}</h4>
                    <p>{{ Str::limit($a->deskripsi, 20, $end='...') }}</p>
                    <a href="{{ asset('foto_galeri/'.$a->foto) }}" data-gall="portfolioGallery"
                        class="venobox preview-link" title="KUDA HITAM FC"><i class="bx bx-plus"></i></a>
                </div>
            </div>
            @endforeach   

        </div>

    </div>
</section><!-- End Portfolio Section -->

@include('konten.contact')
@endsection

