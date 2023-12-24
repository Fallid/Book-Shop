<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/detail.css">
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
              <input type="text" name="" placeholder= "search" >
              <button class="icon-search" type="submit"><i class="fa fa-search" aria> </i>

              </button>
            </form>
        </div>
        <span><i class="bi me-2 bi-cart"></i></span>
        <div class="login d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary SIGN_UP" type="button">SIGN UP</button>
        </div>
      </div>
    </header>

    <main>
    <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">

      <img src="{{ asset('assets/bookcover.png') }}" class="img-thumbnail" alt="Cinque Terre">
    </div>
    <div class="col-sm-6">
      <h3>Leila S. Chudori</h3>
      <h2>Laut Bercerita</h2>

      <div class="deskripsi">
      <h4>Deskripsi Buku</h4>
      
      <p>Buku ini terdiri atas dua bagian. Bagian pertama mengambil sudut pandang seorang mahasiswa aktivis bernama Laut, 
        menceritakan bagaimana Laut dan kawan-kawannya menyusun rencana, berpindah-pindah dalam pelarian, hingga tertangkap oleh pasukan rahasia.</p>
      <h6>Sinopsis</h6>
      <p>Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada,
         sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.</p>
    </div>
    </div>
    
      
</main>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>


    </body>


    </html>
    