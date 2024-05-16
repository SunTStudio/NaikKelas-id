<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | NaikKelas.id</title>
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
  <body style="background-color: #f1f1f1">
    <section id="checkout">
        <div class="container"> 
            <div class="row justify-content-center pt-5">
                <div class="col-5">
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
                <div class="col-4 ">
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
                      <a href="" class="btn btn-warning fw-medium p-2 me-2">Kembali</a>
                      <a href="" class="btn btn-secondary fw-medium p-2">Checkout</a>
                    </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>

    <script src="/js/course.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>