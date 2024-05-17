<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start Course | NaikKelas.id</title>
    <link rel="icon" href="/img/logo-browser.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/startCourse.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    {{-- nav --}}
    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container animate__animated animate__fadeIn">
                <a class="navbar-brand fw-medium" href="#"><img src="/img/logo.png" alt="" class="img-fluid" id="img-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium" href="/all-course">Course</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium" href="/akun">Akun</a>
                    </li>
                </ul>
                <div class="loginBtn ms-5">
                    <a href="/login" class="btn btn-light text-secondary fw-medium p-3 shadow me-2">Masuk</a>
                    <a href="/daftar" class="btn btn-secondary p-3 fw-medium shadow">Daftar</a>
                </div>
                </div>
            </div>
        </nav>
    </section>
    {{-- nav --}}
    
    {{-- header --}}
    <section id="header" class="bg-white pt-5 mb-5">
        <div class="container">
            <div id="headerHeadline" class="p-3" data-aos="fade-right" data-aos-duration="1000">
                <small>Web Development / FullStack Laravel</small>
                <p class="h4 fw-bold">Kelas FullStack Laravel untuk Pemula</p>
                <small class="text-danger">Dr. Adi Wijaya, S.Kom.</small>
            </div>
            <div class="row">
                <div class="col-8 ">
                    <iframe width="720" height="415"  data-aos="fade-up" data-aos-duration="1000" src="https://www.youtube.com/embed/FTc6teQ-szA?si=vYGLcw9LSAK2Ms8S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="isi"  data-aos="fade-up" data-aos-duration="1000">
                        <p class="h5 fw-bold mt-5">Penjelasan Materi</p><hr>
                    <div id="isi-penjelasan-materi">
                        <small>Web programming dengan HTML (HyperText Markup Language) adalah dasar dari pembuatan halaman web. HTML digunakan untuk membuat struktur dan konten halaman web dengan menggunakan elemen-elemen markup. Berikut adalah beberapa konsep dasar dalam web programming menggunakan HTML:</small>
                        <p class="h5 mt-3">1. Struktur Dasar HTML</p>
                        <small>HTML menggunakan elemen-elemen yang ditandai dengan tag. Setiap halaman HTML dimulai dengan deklarasi &lt;!DOCTYPE html&gt; yang menunjukkan tipe dokumen. Di dalamnya, terdapat elemen html yang mencakup elemen head dan body.</small>
                        <p class="h5 mt-3">2. Elemen Teks dan Struktur</p>
                        <small>HTML menyediakan berbagai tag untuk mengorganisasi teks dan struktur halaman.</small>
                        <p class="h5 mt-3">Materi Lainnya</p>
                        <small>Materi Lainnya Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non eius accusamus quas unde dolor! Aspernatur sint blanditiis perspiciatis enim accusantium adipisci necessitatibus doloremque iste, magnam assumenda. Voluptates maiores ratione laboriosam?</small><br>
                        <div id="opsi-course" class="text-center mt-4">
                            <a href="" class="btn btn-warning ps-3 pe-3 me-3 fw-medium">Sebelumnya</a>
                            <a href="" class="btn btn-secondary ps-3 pe-3 me-3 fw-medium">Selanjutnya</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="accordion mb-4" id="accordionExample">
                        <div class="accordion-item">
                            <p class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Web Programing
                                    Fundamentals - HTML</button></p>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            1.SubMateri</a> <span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            2.SubMateri</a><span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>3.Quiz</a><span
                                            class="float-end text-secondary"> 30:00 <i class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            4.StudiKasus</a> <span class="float-end text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Web Programing
                                    Fundamentals - CSS</button></p>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            1.SubMateri</a> <span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            2.SubMateri</a><span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>3.Quiz</a><span
                                            class="float-end text-secondary"> 30:00 <i class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            4.StudiKasus</a> <span class="float-end text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Web Programing
                                    Fundamentals - JS</button></p>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            1.SubMateri</a> <span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            2.SubMateri</a><span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>3.Quiz</a><span
                                            class="float-end text-secondary"> 30:00 <i class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            4.StudiKasus</a> <span class="float-end text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Web Programing
                                    Fundamentals - PHP</button></p>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            1.SubMateri</a> <span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            2.SubMateri</a><span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>3.Quiz</a><span
                                            class="float-end text-secondary"> 30:00 <i class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            4.StudiKasus</a> <span class="float-end text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Web Programing
                                    Fundamentals - SQL</button></p>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            1.SubMateri</a> <span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            2.SubMateri</a><span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>3.Quiz</a><span
                                            class="float-end text-secondary"> 30:00 <i class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            4.StudiKasus</a> <span class="float-end text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Web Programing
                                    Fundamentals - Laravel</button></p>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            1.SubMateri</a> <span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            2.SubMateri</a><span class="float-end text-secondary"> 17:20 <i
                                                class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>3.Quiz</a><span
                                            class="float-end text-secondary"> 30:00 <i class="fa-solid fa-lock"></i></span></p>
                                    <hr>
                                    <p><a href="#" class="text-secondary"><i class="fa-brands fa-youtube text-secondary"></i>
                                            4.StudiKasus</a> <span class="float-end text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" ><img src="/img/promo/iklan.png" alt="" id="iklan" class="img-fluid rounded shadow"></a>
                </div>
            </div>
        </div>
    </section>
    {{-- header --}}


    {{-- Promo update email --}}
    <section id="email-promo" class="mt-5 mb-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-9 rounded p-3 shadow" id="card-email-promo">
                    <div class="row">
                        <div class="col-8" id="text-promo-email">
                            <p class="fw-bold text-light m-0">Subscribe NaikKelas.id Untuk Informasi TerUpdate!</p>
                            <p class=" fw-normal text-light m-0" id="sub-promo-email">Masukan Email Anda dan Subscribe untuk mendapatkan semua informasi menarik dari Kami!</p>
                        </div>
                        <div class="col-4" id="input-promo-email">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan Email Anda.." aria-label="email" aria-describedby="basic-addon1">
                                <button class="input-group-text" id="basic-addon1"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Promo update email --}}

    {{-- footer --}}
  <section id="footer-bg-top" style="background-color: #1e1e33;">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 pt-4">
                <p class="fs-3 fw-medium text-white fst-italic" >NaikKelas.Id</p>
          </div>
          <div class="col-lg-5">
            <p class="text-light fw-light ">NaikKelas.id: Kembangkan Diri, Capai Impian.</p>
          </div>
          <div class="col-lg-7 text-end ">
            <p class="text-end text-light fw-lighter ">Connect With Us</p>
            <img src="/img/sosmed/facebook.png" class="img-fluid me-1" alt="">
            <img src="/img/sosmed/x.png" class="img-fluid me-1" alt="">
            <img src="/img/sosmed/instagram.png" class="img-fluid me-1" alt="">
            <img src="/img/sosmed/linkedin.png" class="img-fluid me-1" alt="">
            <img src="/img/sosmed/youtube.png" class="img-fluid me-1" alt="">
          </div>
          <hr class="border border-white mt-1">
          <p class="fw-lighter text-light mb-4">Copyright @ 2024 NaikKelas.id. All right reserved</p>
        </div>
      </div>
    </footer>
  </section>
    {{-- footer --}}



    <script src="/js/course.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>