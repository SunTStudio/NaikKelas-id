<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>NaikKelas.iID</title>
    {{-- <link rel="stylesheet" href="{{ asset("css/style.css") }}"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- get slick slide css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />  
</head>
  <body>
    <section id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container animate__animated animate__fadeIn">
                <a class="navbar-brand fw-medium" href="#">NaikKelas.Id</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium" href="/all-course">Course</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium ">Benefit</a>
                    </li>
                </ul>
                <div class="loginBtn ms-5">
                    <a href="#" class="btn btn-light text-secondary fw-medium p-3 shadow me-2">Masuk</a>
                    <a href="#" class="btn btn-secondary p-3 fw-medium shadow">Daftar</a>
                </div>
                </div>
            </div>
        </nav>

        <div class="text-header">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex align-items-center" >
                        <div class="d-block animate__animated animate__fadeInLeft" id="textHeader">
                            <p class=" fw-medium" style="color: #0B7077;" id="textHeaderP">Tingkatkan Ilmu,<br>Tingkatkan Karier,<br><span class="fw-bold" id="textHeaderSpan">NaikKelas.id</span> - <br>Tempatnya Belajar Lebih,<br>Berprestasi Lebih!</p>
                            <a href="#course" class="btn btn-primary fw-medium shadow p-2" id="textHeaderBtn">Jelajahi Kelas</a>
                        </div>
                    </div>
                    <div class="col-6 animate__animated animate__fadeInUp" id="imgHeader">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-5" id="course">
        <div class="container pt-5">
            <p class="h4 fw-bold text-center p-2 text-secondary" data-aos="fade-zoom-in" data-aos-duration="1000">SEGERA DAFTAR KELAS KAMI</p>
            <div class="text-center p-3 text-secondary" id="caregori-course">
                <a href="#course" class="btn btn-white p-1 mb-3 ps-4 pe-4 border shadow border-secondary ms-3 fw-medium" data-aos="zoom-in-up" data-aos-duration="1000">Web Development</a>
                <a href="#course" class="btn btn-white p-1 mb-3 ps-4 pe-4 border shadow border-secondary ms-3 fw-medium" data-aos="zoom-in-up" data-aos-duration="1000">Desain Grafis</a>
                <a href="#course" class="btn btn-white p-1 mb-3 ps-4 pe-4 border shadow border-secondary ms-3 fw-medium" data-aos="zoom-in-up" data-aos-duration="1000">Office Spesialis</a>
            </div>
            <div class="row mt-2 p-5" id="card-course">
                <div class="col-lg-4 mb-3">
                    <div class="card shadow " data-aos="fade-up" data-aos-duration="1000">
                        <img src="https://miro.medium.com/v2/resize:fit:1358/1*SoJOoRqbFp9fvNILpl4JNw.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="fw-bold fs-5 card-title">FullStack Laravel</p>
                            <small class="card-text">Pelajari Fundamentals hingga Advanced Development dalam satu paket lengkap untuk menjadi ahli pengembang web dengan framework Laravel.</small>
                            <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                <a href="#" class="text-primary fw-bold fs-5">Rp 600.000,-</a>
                                <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                        <img src="https://stackdiary.com/wp-content/uploads/2022/04/The-Most-Popular-Node.js-Frameworks-3.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="fw-bold fs-5 card-title">FullStack Node JS</p>
                            <small class="card-text">Kelas Fullstack Node.js: Kuasai Pengembangan Web dari Awal hingga Lanjutan dengan Node.js. Pelajari untuk Aplikasi Web yang Scalable dan Efisien.</small>
                            <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                <a href="#" class="text-primary fw-bold fs-5">Rp 650.000,-</a>
                                <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                        <img src="https://media.licdn.com/dms/image/D4D12AQF26-NZ279EaA/article-cover_image-shrink_600_2000/0/1688018102545?e=2147483647&v=beta&t=Q9aUSt_UHzSqZYyDycri3s2kqVDlPc-YM0ZzlH2yfYc" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <p class="fw-bold fs-5 card-title">FullStack React Js</p>
                            <small class="card-text"> Mendalami Pembangunan Web yang Interaktif dan Responsif dengan React.js. Pelajari untuk Membuat UI yang Dinamis.</small>
                            <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                <a href="#" class="text-primary fw-bold fs-5">Rp 550.000,-</a>
                                <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefit" class="pt-5 pb-5 ">
        <div class="conteiner mt-5">
            <div class="row justify-content-center p-5">
                <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000">
                    <img src="https://images.unsplash.com/photo-1579389083395-4507e98b5e67?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid shadow" style="height: 70vh;width:100%; object-fit:cover;" alt="">
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000">
                    <p class="fw-bold text-center fs-4 mt-4 text-secondary" id="benefitHeadline">BENEFIT PELANGGAN</p>
                    <div id="isi-benefit">
                        <p class="fw-medium text-secondary mb-4 "><i class="fa-solid text-secondary border border-secondary me-2 border-2 p-2 rounded fa-certificate"></i> Mendapatkan Sertifikat Profesi Standar Nasional</p>
                        <p class="fw-medium text-secondary mb-4 "><i class="fa-solid text-secondary border border-secondary me-2 border-2 p-2 rounded fa-certificate"></i> Akses Materi Selamanya</p>
                        <p class="fw-medium text-secondary mb-4 "><i class="fa-solid text-secondary border border-secondary me-2 border-2 p-2 rounded fa-certificate"></i> Live dengan Mentor Seminggu 2x</p>
                        <p class="fw-medium text-secondary mb-4 "><i class="fa-solid text-secondary border border-secondary me-2 border-2 p-2 rounded fa-certificate"></i> Grub Chat Diskusi dengan 999+ Peserta Lainnya</p>
                        <p class="fw-medium text-secondary mb-4 "><i class="fa-solid text-secondary border border-secondary me-2 border-2 p-2 rounded fa-certificate"></i> Didampingi oleh Mentor-mentor Standar Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sponsor" class="slide bg-sponsor pt-3 pb-4 mb-2"
    style="background-color:#353535;padding-top: 4rem; margin-top:10rem;">
        <p class="fw-medium text-center fs-4 text-light pb-2">PATNER INDUSTRI KAMI</p>
        <div class="autoplay d-flex">
        <div><img src="/img/sponsor/sponsor1.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor2.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor3.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor4.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor5.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor6.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor7.png" alt=""></div>
        <div><img src="/img/sponsor/sponsor8.png" alt=""></div>
        </div>
  </section>

  <section id="promo" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container rounded shadow" id="promoCard">
      <div class="row" >
        <div class="col-7">
          <p class="fw-bold h3 text-light ps-3 pt-5" id="textPromoHeading">Kenapa Harus Ikut NaikKelas.id Sekarang?</p>
          <div class="ps-3 pt-2" id="isi-promo">
          <p class="fw-medium fs-7 text-light "><i class="fa-solid fa-tags"></i> Promo Spesial! Diskon 30% untuk Semua Kelas!</p>
          <p class="fw-medium fs-7 text-light "><i class="fa-solid fa-tags"></i> Tambahan Diskon! dengan Code "NaikKelasYuk"!</p>
          <p class="fw-medium fs-7 text-light "><i class="fa-solid fa-tags"></i> Promo Diskon hanya sampai Akhir Tahun 2024!</p>
          <a href="#" class="btn btn-light fw-bold text-secondary shadow">Beli Kelas Sekarang</a>
          </div>
        </div>
        <div class="col-5">
          <img src="/img/promo/promo-person.png" alt="" id="img-promo">
        </div>
      </div>
    </div>
  </section>

  <section id="bundling">
    <div class="container">
            <p class="h4 fw-bold text-center p-2 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">BUNDLING PAKET SPESIAL!</p>
            <p class=" fw-medium text-center p-2 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">Ingin mengembangkan beragam keterampilan dengan harga yang terjangkau?<br> Manfaatkan bundling paket dari NaikKelas.id dan hemat lebih banyak!</p>
      <div class="row justify-content-center p-5">
        <div class="col-lg-5 mb-3">
          <div class="card shadow" data-aos="zoom-in-up" data-aos-duration="1000">
                  <img src="/img/bundling/bundlingweb.png" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                      <p class="fw-bold fs-6 card-title">Bundling Fullstack WebDev (React JS+Node Js+Mongo DB)</p>
                      <small class="card-text">Kelas online Bundling Fullstack WebDev mengajarkan React JS, Node JS, dan MongoDB untuk pengembangan web yang komprehensif dan modern.</small>
                      <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                            <a href="#" class="text-primary fw-bold fs-5">Rp 1.300.000,-</a>
                            <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                      </div>
                  </div>
            </div>
        </div>
        <div class="col-lg-5 mb-3">
          <div class="card shadow" data-aos="zoom-in-up" data-aos-duration="1000">
                  <img src="/img/bundling/bundlingms.png" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                      <p class="fw-bold fs-6 card-title">Bundling MS Office (Ms Word+Ms Exel+Ms PowerPoint )</p>
                      <small class="card-text">Bundling MS Office menghadirkan kesempatan mempelajari keterampilan dasar dan lanjutan untuk menguasai alat-alat penting dalam produktivitas di kantor.</small>
                      <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                            <a href="#" class="text-primary fw-bold fs-5">Rp 900.000,-</a>
                            <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                      </div>
                  </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mentor" class="slide bg-sponsor pt-3 pb-4"
    style="margin-top:5rem;">
        <div id="headline" class="p-3">
        <p class="fw-bold text-center fs-4 text-secondary pb-2 m-0 p-0" data-aos="zoom-in-up" data-aos-duration="1000">PARA MENTOR DI NAIKKELAS.ID</p>
        <p class="fw-normal text-center text-secondary pb-2 text-center " data-aos="zoom-in-up" data-aos-duration="1000">Para Mentor di NaikKelas.id berstandar Industri<br>yang akan membimbing Anda dalam memahami dan menguasai pembelajaran dikelas</p>
        </div>
        <div class="autoplayMentor d-flex" >
        <div data-aos="fade-up" data-aos-duration="2000"><div class="mentor-course rounded shadow me-3" style="background-image:url('/img/mentor/mentor1.jpg');">
          <div class="mentor-isi">
            <p class="nama-mentor fw-medium ps-3 mb-1 text-light">Dr. Adi Wijaya, S.Kom.</p>
            <div class="spesialis-mentor ps-3">
                <a href="" class="btn btn-white border border-light border-2 text-light fw-medium">Data Scient</a>
            </div>
          </div>
        </div></div>
        <div data-aos="fade-up" data-aos-duration="2100"><div class="mentor-course rounded shadow me-3" style="background-image:url('/img/mentor/mentor2.jpg');">
          <div class="mentor-isi">
            <p class="nama-mentor fw-medium ps-3 mb-1 text-light">Dr. Rina Pratiwi, S.Kom., M.Sc. </p>
            <div class="spesialis-mentor ps-3">
                <a href="" class="btn btn-white border border-light border-2 text-light fw-medium">UI/UX</a>
            </div>
          </div>
        </div></div>
        <div data-aos="fade-up" data-aos-duration="2200"><div class="mentor-course rounded shadow me-3" style="background-image:url('/img/mentor/mentor3.jpg');">
          <div class="mentor-isi">
            <p class="nama-mentor fw-medium ps-3 mb-1 text-light">Dr. Citra Puspita, S.Kom., M.T.</p>
            <div class="spesialis-mentor ps-3">
                <a href="" class="btn btn-white border border-light border-2 text-light fw-medium">Node Js</a>
            </div>
          </div>
        </div></div>
        <div data-aos="fade-up" data-aos-duration="2300"><div class="mentor-course rounded shadow me-3" style="background-image:url('/img/mentor/mentor4.jpg');">
          <div class="mentor-isi">
            <p class="nama-mentor fw-medium ps-3 mb-1 text-light">Dr. Dian Wulandari, S.Kom.</p>
            <div class="spesialis-mentor ps-3">
                   <a href="" class="btn btn-white border border-light border-2 text-light fw-medium">React</a>
            </div>
          </div>
        </div></div>
        <div data-aos="fade-up" data-aos-duration="2400"><div class="mentor-course rounded shadow me-3" style="background-image:url('/img/mentor/mentor5.jpg');">
          <div class="mentor-isi">
            <p class="nama-mentor fw-medium ps-3 mb-1 text-light"> Dr. Irfan Abdullah, S.Kom.</p>
            <div class="spesialis-mentor ps-3">
                <a href="" class="btn btn-white border border-light border-2 text-light fw-medium">Mongo DB</a>
            </div>
          </div>
        </div></div>
        
        
        </div>
  </section>

  <section id="testimoniPage" style="padding-top: 2rem;">
    <div id="testimoni" style="padding-bottom:4rem;padding-top: 5rem; margin-top:7rem; background-color:#f8f9fa;">
      <h3 class="text-center fw-bold text-secondary" data-aos="zoom-in-up" data-aos-duration="1000">Apa Kata Alumni NaikKelas.id?</h3>
      <div class="container ">
        <div class="row justify-content-center p-1">
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p id="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p id="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p id="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p id="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p id="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p id="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p id="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p id="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
      $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        prevArrow: false, // Menyembunyikan tombol "Previous"
        nextArrow: false, // Menyembunyikan tombol "Next"
        centerMode: true, // Aktifkan mode tengah
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.autoplayMentor').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        prevArrow: false, // Menyembunyikan tombol "Previous"
        nextArrow: false, // Menyembunyikan tombol "Next"
        centerMode: true, // Aktifkan mode tengah
      });
    });
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>