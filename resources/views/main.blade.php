@extends('template')

@section('title','arddhanaaa')

@section('body')


    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand brandnav" href="#">arddhanaaa</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation"
                    class="navbar-toggler btn-bar border-0" data-target="#navbarSupportedContent" data-toggle="collapse"
                    type="button">
                <!--                        <span class="fa fa-bars"></span>-->
                <div class="">
                    <div class="bar">
                    </div>
                    <div class="bar">
                    </div>
                    <div class="bar">
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#ttg-saya">Tentang Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container header" id="header-cover">
        <div class="col-lg-12 col-md-12 col-sm-12 section section-header">
            <div class="text header-text">
                <h1>HALO,</h1>
                <p class="text-p">saya arddhana - mahasiswa sistem informasi</p>
            </div>
            <img alt="" class="header-img" src="assets/a1.png">
        </div>
    </section>

    <section class="container" id="ttg-saya">
        <div class="col-lg-12 col-md-12 col-sm-12 section section-ttgsaya">
            <h1 class="background-text text-uppercase">Tentang Saya</h1>
            <div class="text ttgsaya-text">
                <p class="text-p">
                    lulus dari SMK Telkom Malang pada tahun 2018, dan melanjutkan studi ke Universitas Telkom.
                    <br><br>
                    menjadi asisten di <b><a href="https://instagram.com/dasprolab"><i>Daspro Laboratory</i></a></b> dan
                    desainer di <b><a href="https://instagram.com/lifeatede"><i>EDE
                                Laboratory.</i></a></b>
                    <br><br>
                    menyukasi <b><a href="https://dribbble.com/arddhanaza">seni visual</a></b> dan <b><a
                            href="https://github.com/arddhanaza"><i>software development.</i></a></b>
                    <br><br>
                    saya juga <a href="https://medium.com/@arddhanaza99"><b>menulis</b></a> disela-sela waktu luang.
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid portofolio" id="portofolio">
        <div class="section container section-portofolio">
            @foreach($portfolios as $portfolio)
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 portofolio-foto">
                        <img alt="" onerror="this.src='img/default-img.jpg'" class="img-foto"
                             src="img/{{$portfolio->image}}">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 card portofolio-card">
                        <div class="card-header head-porto">
                            <div class="row">
                                <div class="col-11">
                                    <h3>{{$portfolio->title}}</h3>
                                </div>
                                <div class="col-1 p-0 pt-1">
                                    <a href="{{$portfolio->link}}" target="_blank"><img src="assets/arrow.png"
                                                                                        alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body body-porto">
                            <span>{{$portfolio->type}}</span>
                            <p>{{$portfolio->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container" id="kontak">
        <div class="col-lg-12 col-md-12 col-sm-12 section section-kontak">
            <h1 class="background-text text-uppercase">Kon-<br>tak</h1>
            <div class="text kontak-text">
                <p class="text-p">
                    aktif di instagram-
                    <br>
                    <b><a href="https://instagram.com/arddhanaaa">@arddhanaaa</a></b>
                    <br><br>
                    dapat dihubungi melalui-
                    <br>
                    <b><a href="mailto: zafarddhana@gmail.com">zafarddhana@gmail.com</a></b>
                    <br><br>
                    juga memiliki akun dribble:
                    <br>
                    <b><a href="https://dribble.com/arddhanaza">arddhanaza</a></b>
                    <br><br>
                    kunjungi juga akun behance saya-
                    <br>
                    <b><a href="https://behance.net/arddhanazhafran">arddhanazhafran</a></b>
                    <br><br>
                    tak lupa juga github-
                    <br>
                    <b><a href="https://github.com/arddhanaza">arddhanaza</a></b>
                </p>
            </div>
        </div>
    </section>

@endsection
