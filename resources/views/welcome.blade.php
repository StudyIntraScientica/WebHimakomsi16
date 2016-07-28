@extends('layouts.app')

@section('title', 'Himakomsi UGM - Himpunan Mahasiswa Komputer dan Sistem Informasi Universitas Gadjah Mada')

@section('content')

<section class="height-100 slider slider--animate cover cover-3" data-paging="true" data-timing="5000">
    <ul class="slides">
      <li class="imagebg" data-overlay="5">
        <div class="background-image-holder">
          <img alt="image" src="img/1.jpg">
        </div>
        <div class="container pos-absolute pos-bottom text-center-xs">
          <div class="row">
            <div class="col-sm-6">
              <h3>Himakomsi</h3>
              <p class="lead">
                Himpunan Mahasiswa Komputer dan Sistem Informasi
              </p>

            </div>
          </div>
        </div>
      </li>
      <li class="imagebg" data-overlay="5">
        <div class="background-image-holder">
          <img alt="image" src="img/2.jpg">
        </div>
        <div class="container pos-absolute pos-bottom text-center-xs">
          <div class="row">
            <div class="col-sm-6">
              <h3>Himakomsi</h3>
              <p class="lead">
                Pengurus harian himakomsi
              </p>

            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <div class="bg--secondary" style="height:40px"></div>

  <section class="stats-1 bg--secondary" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>About Himakomsi</h3>
          <p>HIMAKOMSI (Himpunan Mahasiswa Komputer dan Sistem Informasi) merupakan sebuah wadah bagi mahasiswa Komputer dan Sistem Informasi (KOMSI) yang ingin mengembangkan pengetahuannya dibidang organisasi. Himakomsi sendiri dibentuk pada tahun 2010, setelah berpisah dengan Himakom (Himpunan Mahasiswa Ilmu Komputer).
          <br>
          <br>Kegiatan Himakomsi UGM dituangkan dalam bentuk program-program kerja yang bertujuan mendukung Tri Dharma Perguruan Tinggi yang terdiri atas Pendidikan dan Pengajaran, Penelitian, dan Pengabdian kepada Masyarakat.
          <br>
          <br>Himakomsi memiliki 5 divisi, yaitu Event Organizer and Network (EON), Talent Entertainment and Art (TEA), Entrepreneurship (EPS), Administrasi Publikasi dan Advokasi (ADPA), dan Study Intra Scientica (SIS). Himakomsi berlokasi di Sekolah Vokasi UGM.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-4">
          <div class="feature feature-1 text-center boxed boxed--lg">
            <i class="icon color--primary icon-Brain icon--lg"></i>
            <h3>Passion</h3>
            <span><em> </em></span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="feature feature-1 text-center boxed boxed--lg">
            <i class="icon color--primary icon-Chip icon--lg"></i>
            <h3>Technology</h3>
            <span><em> </em></span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="feature feature-1 text-center boxed boxed--lg">
            <i class="icon color--primary icon-Affiliate icon--lg"></i>
            <h3>Solidarity</h3>
            <span><em> </em></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="imageblock features features-1" id="divisi">
    <div class="imageblock__content col-md-5 col-sm-3 pos-left">
      <div class="background-image-holder">
        <img alt="image" src="img/hero8.jpg">
      </div>
    </div>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 col-md-push-6 col-sm-8 col-sm-push-4">
          <h4 class="text-center">Divisi</h4>
          <br>
          <div class="col-xs-6">
            <div class="feature feature-1">
              <i class="icon icon-Music-Note"></i>
              <h5>TEA</h5>
              <p>Divisi yang berhubungan dengan kegiatan-kegiatan untuk menyalurkan minat dan bakat para anggota Himakomsi.</p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="feature feature-1">
              <i class="icon icon-Coding"></i>
              <h5>SIS</h5>
              <p>Divisi yang mengurusi kegiatan-kegiatan di Himakomsi yang bertujuan sebagai sarana memperdalam bidang akademik para anggota Himakomsi.</p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="feature feature-1">
              <i class="icon icon-Sand-watch"></i>
              <h5>EON</h5>
              <p>Divisi yang menjalankan dan mengurusi kegiatan internal maupun eksternal di Himakomsi.</p>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="feature feature-1">
              <i class="icon icon-Bag-Coins"></i>
              <h5>EPS</h5>
              <p>Divisi yang menjalankan dan mengurusi kegiatan-kegiatan Himakomsi khususnya di bidang Kewirausahaan.</p>
            </div>
          </div><div class="col-xs-6">
            <div class="feature feature-1">
              <i class="icon icon-Conference"></i>
              <h5>ADPA</h5>
              <p>Divisi yang bertanggung jawab atas ruang kesekretariatan Himakomsi serta yang menjalankan program kegiatan kegiatan sosial.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg--secondary" id="news">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Latest News &amp; Events</h3>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="masonry masonry-blog">
          <div class="masonry__container masonry--animate masonry--active">
            @foreach($blog as $key)
            <div class="col-md-4 col-sm-6 masonry__item">
              <a href="{{ url('blog') }}/{{ $key->id }}">
                <div class="card card-4">
                  <div class="card__image">
                    <img alt="Pic" src="{{ url('uploads/blog') }}/{{ $key->image }}">
                  </div>
                  <div class="card__body boxed boxed--sm bg--white">
                    @if($key->tag == 1)
                      <h6>Event</h6>
                    @else
                      <h6>News</h6>
                    @endif
                    <div class="card__title">
                      <h5>{{ $key->title }}</h5>
                    </div>
                    <hr>
                    <div class="card__lower">
                      <span>by</span>
                      <span class="h6">{{ DB::table('users')->where('id', $key->user_id)->value('name') }}</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
          </div>
        </div>
        <div class="row text-center">
          <a class="btn btn--primary vpe" href="{{ url('blog') }}">
            <span class="btn__text">
              Show All
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection
