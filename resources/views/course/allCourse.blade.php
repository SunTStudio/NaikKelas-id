<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>Semua Kelas | NaikKelas.id</title>
    <link rel="icon" href="/img/logo-browser.png" type="image/x-icon">
    {{-- <link rel="stylesheet" href="{{ asset("css/style.css") }}"> --}}
    <link rel="stylesheet" href="/css/preloader.css">
    <link rel="stylesheet" href="/css/allCourse.css">
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
    <div class="loader">
            <svg id="Component_1_1" data-name="Component 1 – 1" xmlns="http://www.w3.org/2000/svg" width="307.762" height="349.247" viewBox="0 0 307.762 349.247">
                <path id="Path_2" data-name="Path 2" d="M173.857,532.929l12.161-10.638c.054-95.438.039-196.2.039-291.635v-14.1l4.25-1.806,209.929,241.8,3.049-1.063V222.038L356.623,252.9,418.6,183.682c20.649,22.7,40.712,44.752,63.022,69.275-16.8-11.049-30.9-20.329-46.932-30.874-.7,5.574-1.482,8.947-1.484,12.321q-.1,145.008,0,290.018a71.038,71.038,0,0,0,1,8.507h-7.4c-2.316-3.707-4.184-7.8-7.014-11.063q-95.8-110.348-191.734-220.585c-2.859-3.293-11.178-16.852-11.178-16.852-.176-.175-.756,15.58-.758,19.066q-.067,109.244.014,218.486l11.83,10.948Z" transform="translate(-173.857 -183.682)" fill="#5a646c"/>
            </svg>
            <small class="fw-medium text-secondary logo-name">NaikKelas.id</small>
    </div>
    {{-- nav --}}
    <section id="nav" class="mb-5">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container"  data-aos="fade-down" data-aos-duration="3000">
                <a class="navbar-brand fw-medium" href="#"><img src="/img/logo.png" alt="" class="img-fluid" id="img-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium " aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium active" href="/all-course">Course</a>
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
    <section id="header" style="position: relative">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-8  text-center" data-aos="zoom-in-up" data-aos-duration="3000">
            <img src="/img/logo.png" alt="" class="img-fluid text-center" id="img-header">
            <p class="h1 text-secondary fw-bold text-center" id="headline">Cari dan Pedalam Passion Kamu<br>bersama Kami di Platform NaikKelas.id</p>
          </div>
          <div class="col-8" id="sub-headline">
            <p class="fw-medium text-center text-secondary"  data-aos="zoom-in-down" data-aos-duration="3000">`Kami dengan senang hati mempersembahkan platform belajar digital yang dirancang khusus untuk mendukung perjalanan belajar Anda. Di naikkelas.id, kami percaya bahwa setiap orang memiliki potensi besar untuk meraih kesuksesan. Oleh karena itu, kami menyediakan beragam kelas online yang berkualitas, interaktif, dan mudah diakses kapan saja dan di mana saja.`</p>
          </div>
         
        </div>
      </div>
       <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6C757D" fill-opacity="1" d="M0,192L34.3,213.3C68.6,235,137,277,206,282.7C274.3,288,343,256,411,240C480,224,549,224,617,240C685.7,256,754,288,823,304C891.4,320,960,320,1029,288C1097.1,256,1166,192,1234,149.3C1302.9,107,1371,85,1406,74.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
       
    </section>
    {{-- header --}}


    {{-- list all course by kategori --}}
    <section id="all-course"  style="position: relative">
      <svg class="wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6C757D" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,69.3C384,64,480,64,576,58.7C672,53,768,43,864,42.7C960,43,1056,53,1152,90.7C1248,128,1344,192,1392,224L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class="container p-5 " >
        <div class="row mt-5">
          <div class="col" data-aos="zoom-in-up" data-aos-duration="1000">
            <p class="h3 text-secondary fw-bold text-center">Mulai Pelajari Puluhan Skill Teknologi Berstandar Industri</p>
            <p class=" text-secondary fw-medium text-center">`Pilih Kelas-kelas dibawah yang seluruhnya dibutuhkan di dunia kerja modern yang dibimbing oleh mentor ternama`</p>
            <div id="course-kategori">
                <div class="text-center p-3 text-secondary" id="caregori-course">
                    <a href="#course" class="btn btn-white p-1 mb-3 ps-4 pe-4 border shadow border-secondary ms-3 fw-medium" data-aos="zoom-in-up" data-aos-duration="1000">Web Development</a>
                </div>
                <div class="row p-2" id="card-course">
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow " data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://miro.medium.com/v2/resize:fit:1358/1*SoJOoRqbFp9fvNILpl4JNw.jpeg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">FullStack Laravel</p>
                                <small class="card-text">Pelajari Fundamentals hingga Advanced Development dalam satu paket lengkap untuk menjadi ahli pengembang web dengan framework Laravel.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 650.000,-</a>
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
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 650.000,-</a>
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
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 550.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>   
          </div>

          <div id="course-kategori" class="mt-5">
                <div class="text-center p-3 text-secondary" id="caregori-course">
                    <a href="#course" class="btn btn-white p-1 mb-3 ps-4 pe-4 border shadow border-secondary ms-3 fw-medium" data-aos="zoom-in-up" data-aos-duration="1000">Desain Grafis</a>
                </div>
                <div class="row p-2" id="card-course">
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow " data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://store-images.s-microsoft.com/image/apps.4282.14121511789296356.b1cd9e56-07b3-4312-abb8-d71eecbef69b.8dc6274c-ecd5-43a0-9113-5666b12348f2?h=576" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">Expert Corel Draw</p>
                                <small class="card-text">Kelas CorelDRAW: Kuasai Desain Grafis dari Awal hingga Lanjutan dengan CorelDRAW. Pelajari untuk Karya Seni Digital yang Profesional dan Kreatif.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 300.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://s3-alpha.figma.com/hub/file/716359964/3b5d23d8-502a-454d-a590-6b8add2f367f-cover.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">Expert Figma UI/UX</p>
                                <small class="card-text">Kelas Figma UI/UX: Kuasai Desain Antarmuka dan Pengalaman Pengguna dari Figma untuk Membuat Desain Aplikasi yang Menarik dan Fungsional.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 350.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://fronty.com/static/uploads/new/1.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">Expert Adobe illustrator</p>
                                <small class="card-text"> Kelas Adobe Illustrator: Kuasai Desain Grafis dari Awal hingga Lanjutan dan Pelajari untuk Membuat Ilustrasi dan Grafik Vektor yang Kreatif.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 525.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>   
          </div>
          <div id="course-kategori" class="mt-5">
                <div class="text-center p-3 text-secondary" id="caregori-course">
                    <a href="#course" class="btn btn-white p-1 mb-3 ps-4 pe-4 border shadow border-secondary ms-3 fw-medium" data-aos="zoom-in-up" data-aos-duration="1000">Office Spesialis</a>
                </div>
                <div class="row p-2" id="card-course">
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow " data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://cdn1.byjus.com/wp-content/uploads/2020/09/MS-Word.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">Expert Ms Word</p>
                                <small class="card-text">Kelas Microsoft Word: Kuasai Pengolahan Kata dari Awal hingga Lanjutan dengan Microsoft Word. Pelajari untuk Membuat Dokumen yang Profesional,Terstruktur dan Menarik.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 600.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://cdn.rswebsols.com/wp-content/uploads/2023/03/microsoft-powerpoint-edited-920x518.png?strip=all&lossy=1&ssl=1" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">Expert Ms PowerPoint</p>
                                <small class="card-text">Kelas Microsoft PowerPoint: Kuasai Presentasi dari Awal hingga Lanjutan dengan Microsoft PowerPoint. Pelajari untuk Membuat Presentasi yang Menarik dan Efektif.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 650.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                            <img src="https://hotmart.s3.amazonaws.com/product_pictures/b7959bbf-9a64-4bf7-9c8a-eceb7ea34355/logodoprogramaexcelreproducaomicrosoft.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="fw-bold fs-5 card-title">Expert Ms Exel</p>
                                <small class="card-text"> Kelas Microsoft Excel: Kuasai Pengolahan Data dari Awal hingga Lanjutan dengan Microsoft Excel. Pelajari untuk Membuat Spreadsheet yang Kompleks dan Analisis Data yang Efisien.</small>
                                <div class="d-flex align-items-center justify-content-between p-1 mt-1" id="btn-transaksi-course">
                                    <a href="#" class="text-primary fw-bold harga-teks">Rp 550.000,-</a>
                                    <a href="/course" class="btn btn-secondary fw-medium">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>   
          </div>
        </div>
      </div>
       
    </section>
    {{-- list all course by kategori --}}

    {{-- Promo update email --}}
    <section id="email-promo" class="mt-5 mb-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 rounded p-3 shadow" id="card-email-promo">
                    <div class="row">
                        <div class="col-lg-8 mb-1" id="text-promo-email">
                            <p class="fw-bold text-light m-0">Subscribe NaikKelas.id Untuk Informasi TerUpdate!</p>
                            <p class=" fw-normal text-light m-0" id="sub-promo-email">Masukan Email Anda dan Subscribe untuk mendapatkan semua informasi menarik dari Kami!</p>
                        </div>
                        <div class="col-lg-4" id="input-promo-email">
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
            <p class="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p class="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p class="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p class="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p class="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p class="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
          <div class="col-5 p-4 shadow  rounded bg-white me-4 mt-5 text-secondary" data-aos="zoom-in-down" data-aos-duration="1000">
            <p class="namaTestimoni" class="fw-bold "><i class="bi bi-person-circle fs-3"></i> Mahsun Badrutamam</p>
            <p class="tglTestimoni"><small>20 September 2024</small></p>
            <div id="kanvasIsi" class="d-flex align-items-center" style="height:20vh;">
              <p class="isiTestimoni">`Kelas Fullstack Laravel di NaikKelas.id sungguh luar biasa! Materi yang disampaikan dengan jelas dan instruktur yang ahli. Sangat merekomendasikan!`</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="footer-bg-top" style="background-color: #6C757D;">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 pt-4">
                <p class="fs-3 fw-medium text-white fst-italic" >NaikKelas.Id</p>
          </div>
          <div class="col-lg-5">
            <p class="text-light fw-light ">Contact Kami di Wa.me/6285868144268</p>
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
  



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/loader.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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
 <script>
    AOS.init();
  </script>
  </body>
</html>