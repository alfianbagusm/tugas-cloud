@extends('layouts.user')
@section('konten')

<!-- Profil Sekolah -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Sejarah</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6" align-item="center">
                <p>
                    Kuda Hitam FC (2012)
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="0">
                        <img src="{{ asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
                    </div>
                </p>
                <p>
                    KUHI FC (2016)
                    <div class="col-lg-6 order-1 order-lg-2 kuhi-img" data-aos="zoom-in" data-aos-delay="0">
                        <img src="{{ asset('assets/img/kuhi-img.png')}}" class="img-fluid animated" alt="">
                    </div>
                </p>
                <p>
                    Kuda Hitam Angel's FC (2016)
                    <div class="col-lg-6 order-1 order-lg-2 angels-img" data-aos="zoom-in" data-aos-delay="0">
                        <img src="{{ asset('assets/img/angels-img.png')}}" class="img-fluid animated" alt="">
                    </div>
                </p>

            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    Assalammualaikum.Wr.Wb

                </p>
                <p>
                    Kuda Hitam merupakan club futsal di daerah Kabupaten Tuban, Jawa Timur.
Club ini berdiri sejak tahun 2012. Awal berdirinya kuda hitam karena di daerah Tuban belum ada club
futsal. Kemudian termotivasi untuk mendirikan club futsal sebagai wadah untuk menaungi perkumpulan
orang-orang Tuban yang hobi di futsal. Kuda Hitam pernah lolos divisi utama pada Liga Futsa Tuban.
Seiring berjalannya waktu, kud ahitam memutuskan untuk membuat club di bawah naungan kuda hitam 
yaitu KUHI FC dan Kuda Hitam Angel's FC yang didirikan bersamaan pada tahun 2016.
                </p>

            </div>
        </div>

    </div>
</section><!-- Profil -->

@endsection
