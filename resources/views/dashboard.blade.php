<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg bg-warning" >
      <div class="container-fluid" >
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/bookhouse.png') }}" width="150px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          ></button>
          <div class= "search-bar">
            <form >
              <input type="text" name="" placeholder= "Buku apa yang anda cari ?" >
              <button class="icon-search" type="submit"><i class="fa fa-search" aria> </i>

              </button>
            </form>
        </div>
        <span><i class="bi me-2 bi-cart" style="font-size: 30px;"></i></span>
        <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary signup" type="button">SIGN UP</button>
          <button class="btn btn-primary Login" type="button">LOG IN</button>
        </div>
      </div>
    </header>

    <main>
    <div class="home position-flex bottom-0 end-0" id="home">
            <div class="home-text">
                <h1>Koleksi Ebooks untuk <br> Pertumbuhan Pribadi dan <br> Profesional Anda with coffee</h1>
                <p>Dalam e-book kami, temukan kisah nyata individu yang berhasil <br> 
                  mencapai mimpi dan tujuan mereka. Bukan sekadar motivasi, ini adalah rangkuman pengalaman hidup, 
                  tantangan, dan strategi sukses.</p>
            </div>
            <aside class="home-img">
              <img src="{{ asset('assets/bookcover.png') }}" alt="foto-main">
            </aside>
        </div>
    </main>


      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>

<footer>
  <footer class="mt-5 bg-warning">
      <div class="row footer-wrapper">
        <div
          class="col-md-6 col-xs-12 d-flex justify-content-center ilab-bawah"
        >
          <img
            src="{{ asset('assets/bookhouse.png') }}"
            alt="logo-footer"
            width="150px"
          />
        </div>

        <div class="col-md-2 col-xs-12 justify-content-center">
          <p>
            <a
              class="text-secondary link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >Support</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >Getting Start</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >Help</a
            >
          </p>
    
        </div>

        <div class="col-md-2 col-xs-12 justify-content-center">
          <p>
            <a
              class="text-secondary link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >Information</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >About Us</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >Books</a
            >
          </p>
      
        </div>

        <div class="col-md-2 col-xs-12 justify-content-center">
          <p>
            <a
              class="text-secondary link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              >Follow us</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              ><img
                src= "{{ asset('assets/logo-facebook.png') }}"
                alt="logo-facebook"
                width="12px"
                style="margin-right: 17px"
              />Facebook</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              ><img
                src="{{ asset('assets/logo-twitter.png') }}"
                alt="logo-twitter "
                width="18px"
                style="margin-right: 6px"
              />
              Twitter</a
            >
          </p>
          <p>
            <a
              class="text-dark link-underline link-underline-opacity-0"
              href="http://"
              target="_blank"
              rel="noopener noreferrer"
              ><img
                src="{{ asset('assets/logo-instagram.png') }}"
                alt="logo-instagram"
                width="15px"
                style="margin-right: 10px"
              />
              Instagram</a
            >
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12 d-flex justify-content-center">
          <p class="text-secondary">Copyrigth © 2023 By The Book House</p>
        </div>
      </div>
    </footer>
</footer>
    </body>
    </html>
    