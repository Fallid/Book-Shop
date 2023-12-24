<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/bookhouse.png') }}" width="150px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="search-bar">
          <form>
            <input type="text" name="" placeholder="Buku apa yang anda cari ?">
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
    <div class="container-fluid d-flex flex-row align-items-center justify-content-center">
      <div class="flex-column text-center">
        <h1>Koleksi Ebooks untuk <br> Pertumbuhan Pribadi dan <br> Profesional Anda with coffee</h1>
        <p>Dalam e-book kami, temukan kisah nyata individu yang berhasil <br>
          mencapai mimpi dan tujuan mereka. Bukan sekadar motivasi, ini adalah <br>
          rangkuman pengalaman hidup, tantangan, dan strategi sukses.</p>
      </div>
      <div class="flex-row ms-5">
        <img src="{{ asset('assets/bookcover1.jpg') }}" alt="foto-main">
        <img src="{{ asset('assets/bookcover.png') }}" alt="foto-main">
      </div>

    </div>
    <div class="container-fluid bg-white ps-5 d-flex flex-column align-items-start justify-content-start">
      <div class="mb-2">
        <h4 class="">Top Seller</h4>
      </div>
      <!-- <div class="form-group"> -->
      <form class="mb-4" action="">
        <select id="genre" class="form-control bg-secondary" name="is_open">
          <option>Choose Genre</option>
          <option value="genre_fiction">Fiction</option>
          <option value="genre_romance">Romance</option>
          <option value="genre_mystery">Mystery</option>
          <option value="genre_horor">Horor</option>
        </select>
      </form>
      <div class="scrollmenu container-fluid bg-white d-flex flex-row align-items-start justify-content-start">
        <!-- class item buku -->
        <div class="bg-white d-flex align-items-center rounded-end">
          <img class="customImage ms-1" src="https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg" alt="jujur kasian">
          <div class=" flex-row bg-white w-50 ms-3">
            <h6>Jujutsu no Kaisen</h6>
            <p class="previewcontent">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.

              Yūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu "selalu membantu orang" dan "mati dikelilingi orang". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan "kematian yang layak".

              Sinopsis
              Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel "objek terkutuk" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?

              Judul : Jujutsu Kaisen Vol.01
              Rating : Remaja
              Cerita & Ilustrasi : Gege Akutami
              Tebal : 200 halaman
              Berat : 0.13 kg
              Format : Soft Cover
              Tanggal Terbit : 28 Jan 2021
              Dimensi : 12 x 18 cm
              ISBN : 9786230022180
            </p>
            <p>Rp.30.000</p>
            <div class="btn btn-primary w-100"> Add to chart</div>
          </div>
        </div>
        <div class="bg-white ms-5 d-flex align-items-center rounded-end">
          <img class="customImage ms-1" src="https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg" alt="jujur kasian">
          <div class=" flex-row bg-white w-50 ms-3">
            <h6>Jujutsu no Kaisen</h6>
            <p class="previewcontent">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.

              Yūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu "selalu membantu orang" dan "mati dikelilingi orang". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan "kematian yang layak".

              Sinopsis
              Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel "objek terkutuk" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?

              Judul : Jujutsu Kaisen Vol.01
              Rating : Remaja
              Cerita & Ilustrasi : Gege Akutami
              Tebal : 200 halaman
              Berat : 0.13 kg
              Format : Soft Cover
              Tanggal Terbit : 28 Jan 2021
              Dimensi : 12 x 18 cm
              ISBN : 9786230022180
            </p>
            <p>Rp.30.000</p>
            <div class="btn btn-primary w-100"> Add to chart</div>
          </div>
        </div>
        <div class="bg-white d-flex ms-5 align-items-center rounded-end">
          <img class="customImage ms-1" src="https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg" alt="jujur kasian">
          <div class=" flex-row bg-white w-50 ms-3">
            <h6>Jujutsu no Kaisen</h6>
            <p class="previewcontent">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.

              Yūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu "selalu membantu orang" dan "mati dikelilingi orang". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan "kematian yang layak".

              Sinopsis
              Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel "objek terkutuk" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?

              Judul : Jujutsu Kaisen Vol.01
              Rating : Remaja
              Cerita & Ilustrasi : Gege Akutami
              Tebal : 200 halaman
              Berat : 0.13 kg
              Format : Soft Cover
              Tanggal Terbit : 28 Jan 2021
              Dimensi : 12 x 18 cm
              ISBN : 9786230022180
            </p>
            <p>Rp.30.000</p>
            <div class="btn btn-primary w-100"> Add to chart</div>
          </div>
        </div>
      </div>
      <div class="scrollmenu container-fluid bg-white d-flex flex-row align-items-start justify-content-start">
        <!-- class item buku -->
        <div class="bg-white d-flex align-items-center rounded-end">
          <img class="customImage ms-1" src="https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg" alt="jujur kasian">
          <div class=" flex-row bg-white w-50 ms-3">
            <h6>Jujutsu no Kaisen</h6>
            <p class="previewcontent">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.

              Yūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu "selalu membantu orang" dan "mati dikelilingi orang". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan "kematian yang layak".

              Sinopsis
              Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel "objek terkutuk" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?

              Judul : Jujutsu Kaisen Vol.01
              Rating : Remaja
              Cerita & Ilustrasi : Gege Akutami
              Tebal : 200 halaman
              Berat : 0.13 kg
              Format : Soft Cover
              Tanggal Terbit : 28 Jan 2021
              Dimensi : 12 x 18 cm
              ISBN : 9786230022180
            </p>
            <p>Rp.30.000</p>
            <div class="btn btn-primary w-100"> Add to chart</div>
          </div>
        </div>
        <div class="bg-white ms-5 d-flex align-items-center rounded-end">
          <img class="customImage ms-1" src="https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg" alt="jujur kasian">
          <div class=" flex-row bg-white w-50 ms-3">
            <h6>Jujutsu no Kaisen</h6>
            <p class="previewcontent">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.

              Yūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu "selalu membantu orang" dan "mati dikelilingi orang". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan "kematian yang layak".

              Sinopsis
              Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel "objek terkutuk" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?

              Judul : Jujutsu Kaisen Vol.01
              Rating : Remaja
              Cerita & Ilustrasi : Gege Akutami
              Tebal : 200 halaman
              Berat : 0.13 kg
              Format : Soft Cover
              Tanggal Terbit : 28 Jan 2021
              Dimensi : 12 x 18 cm
              ISBN : 9786230022180
            </p>
            <p>Rp.30.000</p>
            <div class="btn btn-primary w-100"> Add to chart</div>
          </div>
        </div>
        <div class="bg-white d-flex ms-5 align-items-center rounded-end">
          <img class="customImage ms-1" src="https://cdn.gramedia.com/uploads/picture_meta/2023/11/17/efri6damk2qz3tuvwn4car.jpg" alt="jujur kasian">
          <div class=" flex-row bg-white w-50 ms-3">
            <h6>Jujutsu no Kaisen</h6>
            <p class="previewcontent">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.

              Yūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu "selalu membantu orang" dan "mati dikelilingi orang". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan "kematian yang layak".

              Sinopsis
              Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel "objek terkutuk" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?

              Judul : Jujutsu Kaisen Vol.01
              Rating : Remaja
              Cerita & Ilustrasi : Gege Akutami
              Tebal : 200 halaman
              Berat : 0.13 kg
              Format : Soft Cover
              Tanggal Terbit : 28 Jan 2021
              Dimensi : 12 x 18 cm
              ISBN : 9786230022180
            </p>
            <p>Rp.30.000</p>
            <div class="btn btn-primary w-100"> Add to chart</div>
          </div>
        </div>
      </div>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <footer class="mt-5 bg-warning">
    <div class="row row-cols-4">
      <div class="d-flex justify-content-center">
        <img src="{{ asset('assets/bookhouse.png') }}" alt="logo-footer" width="300px" />
      </div>
      <section class="ez mt-5">
        <div class="col-xs-12 justify-content-center">
          <p>
            <a class="text-secondary fs-3 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">Support</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">Getting Start</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">Help</a>
          </p>

        </div>
      </section>


      <section class="ez mt-5">
        <div class="col-xs-12 justify-content-center">
          <p>
            <a class="text-secondary fs-3 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">Information</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">About Us</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">Books</a>
          </p>

        </div>
      </section>

      <section class="ez mt-5">
        <div class="col-xs-12 justify-content-center">
          <p>
            <a class="text-secondary fs-3 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer">Follow us</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/logo-facebook.png') }}" alt="logo-facebook" style="margin-right: 25px; width:22px" />Facebook</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/logo-twitter.png') }}" alt="logo-twitter " style="margin-right: 6px; width:36px" />
              Twitter</a>
          </p>
          <p>
            <a class="text-dark fs-5 link-underline link-underline-opacity-0" href="http://" target="_blank" rel="noopener noreferrer"><img src="{{ asset('assets/logo-instagram.png') }}" alt="logo-instagram" style="margin-right: 10px; width:34px" />
              Instagram</a>
          </p>
        </div>
      </section>

    </div>
    <div class="md-3 col-md-3 col-xs-12 d-flex justify-content-center">
      <p class="text-secondary">Copyrigth © 2023 By The Book House</p>
    </div>
  </footer>
</body>

</html>