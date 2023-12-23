<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/app.css">
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <div class="logo">
            <img src="{{ asset('assets/bookhouse.png') }}" width="80px"/>
          </div>
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
          <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarSupportedContent"
          >
          <form class="d-flex">
            <input class="form-control me-2 col-2 rounded-pill" type="search" placeholder="Buku apa yang ingin dicari?" aria-label="Search"> 
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
          <span><i class="bi me-2 bi-cart"></i></span>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary LOGIN" type="button">SIGN UP</button>
          <button class="btn btn-primary LOGIN" type="button">LOG IN</button>
        </div>
      </div>
    </header>

    <main>
    <div class="home sm-5 text-start" id="home">
            <div class="home-text">
                <h1>Koleksi Ebooks untuk <br> Pertumbuhan Pribadi dan <br> Profesional Anda with coffee</h1>
                <p>Dalam e-book kami, temukan kisah nyata individu yang berhasil <br> 
                  mencapai mimpi dan tujuan mereka. Bukan sekadar motivasi, ini adalah <br>
                  rangkuman pengalaman hidup, tantangan, dan strategi sukses.</p>
            </div>
            <aside class="home-img row">
              <div class="col me-5">
                <img src="{{ asset('assets/bookcover.png') }}" alt="foto-main">
              </div>
              <div class="col">
                <img src="{{ asset('assets/bookcover1.jpg') }}" alt="foto-main1">
              </div>
            </aside>
        </div>
    </main>


      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>


    </body>


    </html>
    