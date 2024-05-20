<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun Saya| NaikKelas.id</title>
    <link rel="icon" href="/img/logo-browser.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/akun.css">
    <link rel="stylesheet" href="/css/preloader.css">
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
    <div class="loader">
            <svg id="Component_1_1" data-name="Component 1 – 1" xmlns="http://www.w3.org/2000/svg" width="307.762" height="349.247" viewBox="0 0 307.762 349.247">
                <path id="Path_2" data-name="Path 2" d="M173.857,532.929l12.161-10.638c.054-95.438.039-196.2.039-291.635v-14.1l4.25-1.806,209.929,241.8,3.049-1.063V222.038L356.623,252.9,418.6,183.682c20.649,22.7,40.712,44.752,63.022,69.275-16.8-11.049-30.9-20.329-46.932-30.874-.7,5.574-1.482,8.947-1.484,12.321q-.1,145.008,0,290.018a71.038,71.038,0,0,0,1,8.507h-7.4c-2.316-3.707-4.184-7.8-7.014-11.063q-95.8-110.348-191.734-220.585c-2.859-3.293-11.178-16.852-11.178-16.852-.176-.175-.756,15.58-.758,19.066q-.067,109.244.014,218.486l11.83,10.948Z" transform="translate(-173.857 -183.682)" fill="#5a646c"/>
            </svg>
            <small class="fw-medium text-secondary logo-name">NaikKelas.id</small>
    </div>
    {{-- nav --}}
    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container" data-aos="fade-down" data-aos-duration="3000">
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
                    <a class="nav-link fw-medium" href="/all-course">Course</a>
                    </li>
                    <li class="nav-item ms-5">
                    <a class="nav-link fw-medium active" href="/akun">Akun</a>
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

    {{-- profile --}}
    <section id="profile">
      <div class="container">
        

        <div class="row justify-content-center p-3 mt-5 ">
          <div class="col-lg-2">
            <div id="menu-akun" class="text-secondary border rounded p-4 pt-2 pb-2" data-aos="fade-right" data-aos-duration="3000">
              <p class="fw-bold mt-3">Menu Akun</p>
              <p class="fw-medium mt-3" onclick="profile()"><a href="#"><i class="fa-regular fa-user me-3" ></i> Profile</a></p>
              <p class="fw-medium mt-3" onclick="aktivitas()"><a href="#"><i class="fa-solid fa-person-running me-3" ></i> Aktivitas</a></p>
              <p class="fw-medium mt-3" onclick="riwayat()"><a href="#"><i class="fa-solid fa-clock-rotate-left me-3" ></i> Riwayat</a></p>
            </div>
          </div>
          <div class="col-lg-7 p-3" id="konten-profile">
            <div id="welcome" class="text-center text-secondary pt-2" data-aos="fade-down" data-aos-duration="3000">
              <p class="h3 fw-bold">Selamat Datang, Mahsun Badrutamam!</p>
              <p class="fw-medium">Semua Informasi diri kamu dan aktifitas kamu ada disini!</p>

            </div>
            <div class="text-center mt-5 mb-3" data-aos="fade-up" data-aos-duration="3000">
              <p><img src="/img/pasMahsun.jpg" class="rounded shadow " id="pas-foto" alt="..."></p>
              <a href="#" class="btn btn-secondary fw-medium">Ubah Profile</a>
            </div>
            <form class="text-center" data-aos="fade-up" data-aos-duration="1000">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="text-secondary">Nama Lengkap</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="text-secondary">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="text-secondary">Nomor Telepon</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" class="text-secondary">Password</label>
              </div>
              <button type="submit" class="btn btn-secondary p-1 ps-4 pe-4 fw-medium">Ubah Data</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    {{-- profile --}}


    <section id="footer-bg-top" class="mt-5" style="background-color: #6C757D;">
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
    <script src="/js/akun.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>