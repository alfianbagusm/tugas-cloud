@extends('layouts.user')
@section('konten')

<!-- Profil Sekolah -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Program Latihan Kuda Hitam</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <h3>
                   Jadwal Latihan Rutin
                </h3>

                <table border="1">
                    <thead>
                     <tr align="center">
                      <td width="200"><b>Hari</b></td>
                      <td width="300"><b>Jam</b></td>
                      <td width="500"><b>Tempat</b></td>
                     </tr>
                    </thead>
                    <tbody>
                     <tr align="center">
                      <td>Senin</td>
                      <td>16.00 s/d selesai</td>
                      <td>KH Ground</td>
                     </tr>
                     <tr align="center">
                      <td>Rabu</td>
                      <td>16.00 s/d selesai</td>
                      <td>KH Ground</td>
                     </tr>
                     <tr align="center">
                        <td>Jum'at</td>
                        <td>16.00 s/d selesai</td>
                        <td>Lapangan Sepak Bola Karang</td>
                       </tr>
                    </tbody>
                   </table>

        <p>
        <div class="row content">
            <div class="col-lg-12">
                <h3>
                    Jadwal Latihan Wajib
                </h3>
                <table border="1">
                    <thead>
                     <tr align="center">
                      <td width="200"><b>Hari</b></td>
                      <td width="300"><b>Jam</b></td>
                      <td width="500"><b>Tempat</b></td>
                     </tr>
                    </thead>
                    <tbody>
                     <tr align="center">
                      <td>Minggu</td>
                      <td>08.45 s/d selesai</td>
                      <td>Lapangan Gajah Futsal</td>
                     </tr>
                    </tbody>
                   </table>
        </p>
                </div>
            </div>
        </div>

    </div>
</section><!-- Profil -->

@endsection
