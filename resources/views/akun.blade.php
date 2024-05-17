<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start Course | NaikKelas.id</title>
    <link rel="icon" href="/img/logo-browser.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/akun.css">
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

    {{-- profile --}}
    <section id="profile">
      <div class="container">
        

        <div class="row justify-content-center p-3 mt-5 ">
          <div class="col-2">
            <div id="menu-akun" class="text-secondary border rounded p-4 pt-2 pb-2">
              <p class="fw-bold mt-3">Menu Akun</p>
              <p class="fw-medium mt-3" onclick="profile()"><a href="#"><i class="fa-regular fa-user me-3" ></i> Profile</a></p>
              <p class="fw-medium mt-3" onclick="aktivitas()"><a href="#"><i class="fa-solid fa-person-running me-3" ></i> Aktivitas</a></p>
              <p class="fw-medium mt-3" onclick="riwayat()"><a href="#"><i class="fa-solid fa-clock-rotate-left me-3" ></i> Riwayat</a></p>
            </div>
          </div>
          <div class="col-7 p-3" id="konten-profile">
            <div id="welcome" class="text-center text-secondary pt-2">
              <p class="h3 fw-bold">Selamat Datang, Mahsun Badrutamam!</p>
              <p class="fw-medium">Semua Informasi diri kamu dan aktifitas kamu ada disini!</p>

            </div>
            <div class="text-center mt-5 mb-3">
              <p><img src="/img/pasMahsun.jpg" class="rounded shadow " id="pas-foto" alt="..."></p>
              <a href="#" class="btn btn-secondary fw-medium">Ubah Profile</a>
            </div>
            <form class="text-center">
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
    
    


    <script src="/js/akun.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>