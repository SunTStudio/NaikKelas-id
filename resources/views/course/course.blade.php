<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course | NaikKelas.id</title>
    <link rel="stylesheet" href="/css/course.css">
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
                <a class="navbar-brand fw-medium" href="#">NaikKelas.Id</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium" href="/">Course</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium" href="/">Benefit</a>
                    </li>
                </ul>
                <div class="loginBtn ms-5">
                    <a href="#" class="btn btn-light text-secondary fw-medium p-3 shadow me-2">Masuk</a>
                    <a href="#" class="btn btn-secondary p-3 fw-medium shadow">Daftar</a>
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
                <div class="col-9 " data-aos="fade-up" data-aos-duration="1000"><img src="https://miro.medium.com/v2/resize:fit:1358/1*SoJOoRqbFp9fvNILpl4JNw.jpeg" alt="" class="img-fluid rounded"></div>
                <div class="col-3  rounded shadow  text-center" data-aos="fade-up" data-aos-duration="1000">
                    <p class="fw-medium text-secondary  pt-5 mb-0" style="text-decoration: line-through;">Rp 800.000,-</p>
                    <p class="h3 fw-bold text-primary  mt-0">Rp 600.000,-</p>
                    <a href="#" class="btn btn-secondary pt-2 pb-2 ps-5 pe-5 fw-bold text-light mt-1" id="beli" data-bs-toggle="modal" data-bs-target="#exampleModal" >Beli Kelas</a> <br>
                    <a id="simpan" class="btn btn-white border border-2 border-secondary pt-2 pb-2 ps-4 pe-4 fw-bold text-secondary mt-3" onclick="simpan()">Simpan Favorit</a>
                    <div class="text-start p-2 pb-0 pt-4" id="keterangan-course">
                        <p class="text-secondary fw-medium"><i class="fa-solid fa-book"></i> 22 Sub Materi</p>
                        <p class="text-secondary fw-medium"><i class="fa-regular fa-comments"></i> 2 kali Sesi Zoom dengan Mentor</p>
                        <p class="text-secondary fw-medium"><i class="fa-solid fa-film"></i> 21 Jam Total Video Pembelajaran</p>
                        <p class="text-secondary fw-medium"><i class="fa-solid fa-closed-captioning"></i> Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- header --}}

    {{-- Desc Course --}}
    <section id="info-course">
        <div class="container">
            <div class="row">
                <div class="col-9" >
                    <ul class="nav nav-underline mb-4" data-aos="fade-down" data-aos-duration="1000">
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="#info-course" id="deskripsi" onclick="deskripsi()">Deskripsi</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-dark fw-medium" href="#info-course" id="materi" onclick="materi()">Materi</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-dark fw-medium" href="#info-course" id="review" onclick="review()">Review</a>
                        </li>
                    </ul>

                    <div id="isi-info" data-aos="fade-up" data-aos-duration="1000">
                        <p class="fw-bold h5 text-secondary">Deskripsi Kelas</p>
                        <p class="fw-normal text-secondary">Kelas Online Fullstack Laravel dirancang untuk memberikan pengetahuan mendalam dan keterampilan praktis dalam mengembangkan aplikasi web menggunakan Laravel, salah satu framework PHP yang paling populer dan kuat. Kelas ini mencakup seluruh aspek pengembangan fullstack, mulai dari backend hingga frontend, memastikan peserta mampu membangun aplikasi web yang lengkap dan fungsional.</p>
                        <p class="fw-bold h5 mt-4 mb-4 text-secondary">Tujuan Kelas</p>
                        <ul id="tujuanKelas" class="text-secondary">
                            <li class="mb-3 fw-medium"><i class="fa-regular fa-square-check"></i> Memahami konsep dasar dan lanjutan Laravel.</li>
                            <li class="mb-3 fw-medium"><i class="fa-regular fa-square-check"></i> Menguasai teknik pengembangan backend menggunakan Laravel.</li>
                            <li class="mb-3 fw-medium"><i class="fa-regular fa-square-check"></i> Mengintegrasikan frontend modern dengan backend Laravel.</li>
                            <li class="mb-3 fw-medium"><i class="fa-regular fa-square-check"></i> Membangun dan menerapkan aplikasi web fullstack yang siap produksi.</li>
                            <li class="mb-3 fw-medium"><i class="fa-regular fa-square-check"></i> Menggunakan alat bantu dan praktik terbaik dalam pengembangan aplikasi Laravel.</li>
                        </ul>
                        

                    </div>
                </div>
                <div class="col-3" data-aos="fade-left" data-aos-duration="1000">
                    <a href="#"><img src="/img/promo/iklan.png" alt="" id="iklan" class="img-fluid rounded shadow"></a>
                </div>
            </div>
        </div>
    </section>
    {{-- Desc Course --}}

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



    {{-- modal --}}
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body rounded" style="background-color: #f1f1f1">
        <section id="checkout">
            <div class="container"> 
                <div class="row justify-content-center p-3">
                    <div class="col-7">
                    <form>
                        <div class="mb-3 bg-white p-3 ps-4 pe-4 rounded text-secondary">
                        <label for="exampleInputEmail1" class="form-label fw-medium"><i class="fa-solid fa-envelope p-2 bg-danger text-light rounded-circle"></i> Masukan Email</label>
                        <input type="email" class="form-control" placeholder="Masukan Email.." id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 bg-white p-3 ps-4 pe-4 rounded text-secondary">
                        <label for="exampleInputEmail1" class="form-label fw-medium"><i class="fa-solid fa-ticket p-2 bg-danger text-light rounded-circle"></i> Masukan Kupon</label>
                        <div class="input-group text-secondary">
                        <input type="text" class="form-control" placeholder="Masukan Kupon.." aria-label="Username" aria-describedby="basic-addon1">
                        <a class="input-group-text btn btn-danger" id="basic-addon1"><i class="fa-solid fa-ticket"></i></a>
                        </div>
                        </div>
                        <div class="mb-3 bg-white p-3 ps-4 pe-4 rounded text-secondary">
                        <label for="exampleInputEmail1" class="form-label fw-medium"><i class="fa-solid fa-list p-2 bg-danger text-light rounded-circle"></i> Pilih Metode Pembayaran</label>
                        <div class="form-floating text-secondary">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Pilih</option>
                            <option value="1">Dana</option>
                            <option value="2">Link Aja</option>
                            <option value="3">Paypal</option>
                            <option value="4">Bank</option>
                            </select>
                            <label for="floatingSelect">Metode Pembayaran</label>
                        </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-5 ">
                    <div id="produk-checkout" class="bg-white rounded p-3 pb-4">
                        <p class="fw-medium text-secondary"><i class="fa-solid fa-cart-shopping p-2 bg-danger text-light rounded-circle "></i> Detail Pesanan</p>
                        <div class="row">
                            <div class="col-4">
                            <img src="https://miro.medium.com/v2/resize:fit:1358/1*SoJOoRqbFp9fvNILpl4JNw.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8">
                            <p class="fw-bold m-0 text-secondary">Kelas Fullstack Laravel</p>
                            <p class="fw-medium m-0 fst-italic text-secondary" style="font-size: 0.7rem">Akses Selamanya</p>
                            </div>
                        </div>
                        <hr>
                        <div id="biaya" >
                        <p class="d-flex justify-content-between fw-medium"><span class="text-secondary"><i class="fa-solid fa-tags text-danger"></i> Harga Kelas</span> <span class="text-secondary">Rp600.000,-</span></p>
                        <p class="d-flex justify-content-between fw-medium"><span class="text-secondary"><i class="fa-solid fa-tags text-danger"></i> Kupon</span> <span class="text-secondary">- Rp20.000,-</span></p>
                        <p class="d-flex justify-content-between fw-medium"><span class="text-secondary"><i class="fa-solid fa-tags text-danger"></i> PPN</span> <span class="text-secondary">- Rp5.000,-</span></p>
                        <hr>
                        <p class="d-flex justify-content-between fw-bold text-secondary"><span>Total</span> <span>Rp575.000,-</span></p>
                        </div>
                        <div id="btn-checkout" class="text-center">
                        <a href="" class="btn btn-warning fw-medium p-2 me-2" data-bs-dismiss="modal">Kembali</a>
                        <a href="" class="btn btn-secondary fw-medium p-2" data-bs-dismiss="modal" onclick="beli()">Checkout</a>
                        </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>


    {{-- modal --}}



    <script src="/js/course.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>