@extends('layouts.portal')
@section('title')
Portal
@endsection
@section('content')
<div class="portal1">
    <main class="portal2">
        <!-- Jumbotron -->
        <section id="hero-animated" class="hero-animated d-flex align-items-center">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
                data-aos="zoom-out">
                <h2 style="margin-top: -40px;">Selamat Datang di Sistem Pemilihan Siswa Teladan (SISDAN)</h2>
            
          <div class="d-flex">
                    @auth
                    @else
                    <a href="{{ route('free.perhitungan') }}" class="btn-get-started scrollto">HASIL SISWA TELADAN</a>
                    @endauth
                </div>
            </div>
      </section>
        <!-- End Jumbotron -->
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container ">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-xl-3 col-md-6" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-people icon"></i></div>
                            <h4>
                                <a class="stretched-link"><span>{{ $siswa }}</span> Data siswa</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 " data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-layout-text-sidebar icon"></i>
                            </div>
                            <h4>
                                <a class="stretched-link"><span>{{ $criterias }}</span> Kriteria</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 " data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-building icon"></i>
                            </div>
                            <h4>
                                <a class="stretched-link"><span>{{ $kelas }}</span> Data Kelas</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 " data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-person-gear icon"></i></div>
                            <h4>
                                <a class="stretched-link"><span>{{ $users }}</span> Pengguna</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Featured Services Section -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="collapse {{ Request::is('spk/ahp*') ? 'show' : '' }}" id="masterDataCollapse2"
                    data-bs-parent="#sidenavAccordion">
                    <a class="nav-link {{ Request::is('spk/ahp*') ? 'active' : '' }} child"
                        href="{{ route('free.perhitungan') }}">
                        <div class="sb-nav-link-icon col-1">
                            <i class="fas"></i>
                        </div>
                        
                    </a>
                </div>
        <!-- End About Section -->
        <!-- ======= F.A.Q Section ======= -->
        <!-- <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                        </div>
                        <div class="accordion accordion-flush px-xl-5" id="faqlist">
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa itu Sistem Pendukung Keputusan (SPK)?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        SPK adalah sistem komputer atau perangkat lunak yang dirancang untuk membantu
                                        pengambilan keputusan dengan menganalisis data, memodelkan masalah, dan
                                        memberikan rekomendasi atau solusi.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->
                            <!--  -->
                            <!-- # Faq item-->
                            
                    <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url('{{ url('.jpg') }}')"> 
                        &nbsp;
                    </div> -->
                </div>
            </div>
        </section> -->
        <!-- End F.A.Q Section -->
        <!-- ======= Comment Section ======= -->
        {{-- <section id="comment" class="comment">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Comment</h2>
                    <p>Silahkan beri penilaian dengan cara login ke sistem.</p>
                </div>
                <div class="row g-4 g-lg-5 align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <div class="comment-img">
                            <img src="{{ url('frontend/images/comment.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <!-- Tab Comment -->
                        <div class="tab-content">
                            <div class="row">
                                @foreach($comments as $comment)
                                <div class="card mb-4">
                                    <div class="card-body table-responsive">
                                        <div class="post">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span>
                                                    <strong>{{ $comment->user->name }}</strong> <b>@</b>{{ $comment->user->username }}
                                                    <strong>&#183;</strong> <span id="time_{{ $comment->id }}"></span>
                                                </span>
                                            </div>
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    setInterval(function () {
                                        var timeElement = document.getElementById('time_{{ $comment->id }}');
                                        var currentTime = new Date().getTime();
                                        var commentTime = new Date('{{ $comment->created_at }}').getTime();
                                        var timeDifference = currentTime - commentTime;
                                        var timeElapsed = Math.floor(timeDifference / 1000);
                                        var timeDisplay;
                                        if (timeElapsed < 60) {
                                            timeDisplay = timeElapsed + ' detik yang lalu';
                                        } else if (timeElapsed < 3600) {
                                            timeDisplay = Math.floor(timeElapsed / 60) + ' menit yang lalu';
                                        } else if (timeElapsed < 86400) {
                                            timeDisplay = Math.floor(timeElapsed / 3600) + ' jam yang lalu';
                                        } else {
                                            timeDisplay = Math.floor(timeElapsed / 86400) + ' days ago';
                                        }
                                        timeElement.innerText = timeDisplay;
                                    }, 1000);
                                </script>
                                @endforeach
                            </div>
                            <!-- End Tab 1 Comment -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Comment Section -->
    </main>
</div>
@endsection