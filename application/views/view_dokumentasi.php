<!DOCTYPE html>
<html>
<head>
      <title>Parade Web</title>
      <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/img/cnc.ico' />
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/prism.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <!-- Compiled and minified JavaScript -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <!-- For load material icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
      <script src="<?php echo base_url();?>assets/js/prism.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
            $('.scrollspy').scrollSpy();
          });  
      </script>
</head>
<body>
<header>
<div class="navbar-fixed">
<nav class="top-nav">
<div class="container">
    <div class="nav-wrapper fixed"><a class="judul-parade">DOKUMENTASI PARADE WEB DEVELOPMENT</a></div>
</div>
</nav>
</div>
<ul id="nav-mobile" class="side-nav fixed">
        <table>
          <tr>
            <td>
            <img src="<?php echo base_url();?>assets/img/cnc.png" width="90">
            </td>
            <td class="center">
              <b>Computer and Commmunication Laboratory</b>
            </td>
          </tr>
        </table>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">
            <i class="large material-icons">label</i>Pendahuluan</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#ionic">Pengenalan Ionic</a></li>
                  <li><a href="#codeigniter">Pengenalan CodeIgniter</a></li>
                  <li><a href="#mvc">Konsep MVC</a></li>
                  <li><a href="#api">Konsep API</a></li>
                </ul>
              </div>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">
            <i class="large material-icons">label</i>Instalasi Ionic</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#install_nodejs">Instalasi NodeJS</a></li>
                  <li><a href="#install_ionic">Instalasi Ionic</a></li>
                </ul>
              </div>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">
            <i class="large material-icons">label</i>Create App</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#buat_project_ionic">Buat Project Ionic</a></li>
                  <li><a href="#struktur_folder_template_blank_ionic">Struktur Folder Ionic</a></li>
                  <li><a href="#konfigurasi_file_index">Konfigurasi File index.html</a></li>
                  <li><a href="#konfigurasi_app_js">Konfigurasi app.js</a></li>
                  <li><a href="#membuat_halaman_tentang">Tentang Page</a></li>
                  <li><a href="#halaman_daftar_asisten">Daftar Asisten Page</a></li>
                </ul>
              </div>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">
            <i class="large material-icons">label</i>Create API</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#api_codeigniter">API CodeIgniter</a></li>
                  <li><a href="#instalasi_codeigniter">Instalasi CodeIgniter</a></li>
                  <li><a href="#instalasi_materialize">Instalasi Materialize</a></li>
                  <li><a href="#konfigurasi_codeigniter">Konfig CI</a></li>
                </ul>
              </div>
        </li>
</header>
<main>      
<div class="section no-pad-bot" id="index-banner">
        <div style="text-align: justify;margin-left: 316px;margin-right: 40px;">
         <div id="ionic" class="section scrollspy">
              <h4 class="header center"><b>Building Hybrid Web Application with Ionic from start to end</b></h4> <br><br>
              <p class="caption">
                Apakah Ionic Framework itu?
              </p><br>
              <div class="center">
              <img src="assets/img/logo_ionic.png" width="300" centered>
              </div><br>
              <p>
              Ionic Framework merupakan framework HTML5 yang masih baru, dirilis 2 tahun lalu
              Framework ini membantu Anda dalam mengembangkan aplikasi mobile dengan teknologi web
              seperti HTML, CSS dan Javascript.
              Framework Ionic adalah sekumpulan teknologi yang dikembangkan untuk membangun aplikasi mobile
              hybrid yang powerful, cepat, mudah dan juga memiliki tampilan yang menarik. Ionic menggunakan
              AngularJS sebagai framework berbasis web dan menggunakan Cordova untuk membangun aplikasi mobile.
              <br>
              Dengan tagline “The next generation HTML5 hybrid app development framework”, Ionic dapat Anda gunakan untuk membangun aplikasi mobile shybrid. Saat ini, Ionic mendukung UIWebView untuk iOS 6+ dan Android 4+ (dengan beberapa dukungan untuk 2.3).
              <br>
              Sebagai pengembang (developer), tentu Anda juga dapat menggunakan emulator untuk menjalankan aplikasi dari Ionic ini, seperti Genymotion, Android Emulator, iOS Simulator atau BlueStacks.
              </p>
      </div>
      <div id="codeigniter" class="section scrollspy">
              <p class="caption">
                Apakah Code igniter itu?
              </p><br>
              <div class="center">
              <img src="assets/img/codeigniter.png" width="300" centered>
              </div>
              <p>
              Codeigniter adalah framework pengembangan aplikasi (Application Development Framework) dengan menggunakan PHP, suatu kerangka pembuatan program dengan menggunakan PHP. Pengembangan dapat langsung menghasilkan program dengan cukup singkat. Karena codeigniter menggunakan teknik MVC untuk pemrogramannya. MVC disini adalah dengen memisahkan antara data(model) dari tampilan (view) dan memprosesnya dengan controller.
              </p>
      </div>
      <div id="mvc" class="section scrollspy">
              <p class="caption">
              Bagaimana konsep MVC?
              </p><br>
              <div class="center">
              <img src="assets/img/mvc.png" width="300" centered>
              </div><br>
              <p>
              MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.
              <br>
              - <b>Model</b><br>
              Model merupakan bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. semua intruksi yang berhubung dengan pengolahan database di letakkan di dalam model. <br>
              - <b>View</b><br>
              View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user. tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.<br>
              - <b>Controller</b> <br>
              Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya dari view kemudian controller yang mengolah intruksi.
              dari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung view dan model. misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan.
              </p>
      </div>
      <div id="api" class="section scrollspy">
              <p class="caption">
              Bagaimana konsep API?
              </p><br>
              <div class="center">
              <img src="assets/img/api.png" width="500" centered>
              </div><br>
              <p>
              Sebuah API adalah antarmuka software-to-software, bukan user interface. Dengan API, aplikasi berbicara satu sama lain tanpa sepengetahuan pengguna atau intervensi. Asisten CNC dapat mendaftarkan dirinya melalui sebuah halaman register pada sebuah website, lalu data asisten tersebut dapat secara real-time terupdate pada aplikasi.
              <br>
             Dalam project kita menggunakan konsep RESTFUL API di mana setiap data yang akan ditampilkan merupakan data yang secara langsung diambil pada suatu server. Jadi aplikasi yang akan kita buat ini harus diakses menggunakan koneksi internet agar data dapat ditampilkan. Dengan menggunakan konsep RESTFUL API data dalam aplikasi kita dapat secara real-time terupdate, apabila ada perubahan sedikitpun pada database server, maka akan dapat langsung terupdate juga di aplikasi kita.
              </p>
      </div>
      <div id="install_nodejs" class="section scrollspy">
              <p class="caption">
              Instalasi NodeJS
              </p>
              <div class="center">
              <img src="assets/img/nodejs-new-pantone-black.png" width="300" centered>
              </div>
              <p>
              Tahapan pertama untuk install ionic adalah meng install Node.js. NodeJS adalah teknologi web server yang menggunakan bahasa javascript. Kelebihan dari NodeJS yaitu bisa menerima request dalam jumlah yang banyak dan mengeksekusinya secara parallel. Dengan menggunakan teknologi Google Javascript Engine V8, NodeJS menjalankan eksekusi perintah dalam waktu yang relative cepat. Dalam pengembangan web jaman sekarang dibutuhkan server yang cepat dalam melayani request dalam jumlah banyak sekaligus. Ionic merupakan salah satu yang menggunakan NodeJS ini. Ionic dapat Anda jalankan tanpa harus menginstall NodeJS terlebih dahulu, selain itu Ionic menggunakan teknologi NodeJS untuk menjalankan fungsi livereload, di mana aplikasi yang kita buat dapat langsung disimulasikan melalui browser secara real-time.
              </p>
              <p>
              Berikut ini tahap-tahapnya : <br><br>
              1. Buka <a href="https://nodejs.org/en/" target="_blank">https://nodejs.org/en/</a><br>
              <div class="center">
              <img src="assets/img/image19.png" width="500" centered>
              </div><br>
              Download versi 4.4.2 LTS. Ionic hanya support NodeJS versi tersebut, tidak disarankan menginstal NodeJS versi 5.X
              </p>
              <p>
              2. Selesaikan langkah instalasi Next hingga selesai finish.<br>
              <div class="center">
              <img src="assets/img/image02.png" width="500" centered>
              </div><br>
              <div class="center">
              <img src="assets/img/image04.png" width="500" centered>
              </div>
              </p>
              <p>
              3. Untuk mengecek NodeJS sudah terinstall caranya: <br> Buka CMD lalu ketikkan: <br>
              <pre><code class="language-markup">
                  $ node --version
              </code></pre>
              </p>
               <p>
              <div class="center">
              <img src="assets/img/image23.png" width="500" centered>
              </div><br>
              4. Jika keluar seperti gambar di atas artinya nodeJS sudah sukses terinstall di komputer Anda dengan versi 4.4.2 sesuai yang direkomendasikan untuk menjalankan Ionic Framework.
              </p>
      </div>
      <div id="install_ionic" class="section scrollspy">
              <p class="caption">
              Instalasi Ionic
              </p><br>
              <p>
              Berikut ini tahap-tahapnya : <br><br>
              1. Buka <a href="http://ionicframework.com/getting-started/" target="_blank">http://ionicframework.com/getting-started/</a><br>
              <div class="center">
              <img src="assets/img/ionic2.png" width="500" centered>
              </div>
              </p>
              <p>
              2. Untuk memulai proses instalasi menggunakan CMD caranya ketikkan:<br>
              <pre><code class="language-markup">
                  $ npm install -g cordova ionic
              </code></pre>
              <div class="center">
              <img src="assets/img/image21.png" width="500" centered><br>
              </div>
              Tunggu proses instalasi membutuhkan waktu yang cukup lama karena mendownload package-package yang cukup besar. Selesaikan proses instalasi.
              </p>
              <p>
              3. Jika proses instalasi sudah selesai akan meghasilkan seperti di bawah ini:
              <div class="center">
              <img src="assets/img/image25.png" width="500" centered><br>
              </div>
              </p>
              <p>
              4. Untuk memastikan Ionic sudah terinstall lakukan cek version dengan mengetikkan:<br>
              <pre><code class="language-markup">
                  $ ionic --version
              </code></pre><br>
              <div class="center">
              <img src="assets/img/image08.png" width="500" centered><br>
              </div><br>
              Instalasi Ionic Framework sudah berhasil.
              </p>
      </div>
      <div id="buat_project_ionic" class="section scrollspy">
              <p class="caption">
              Membuat Project Ionic Baru
              </p><br>
              <p>
              Pada tahap ini sudah memasuki tahap awal pembuatan menggunakan Ionic Framework.
              <br><br>
              1.  Membuat project baru dengan nama aplikasi_cnc.
              Pada Ionic disediakan tiga template yang dapat kita gunakan secara langsung sejak awal proses pembuatan project.<br>
              <div class="center">
              <img src="assets/img/image13.png" width="500" centered>
              </div><br>
              Pada project ini menggunakan template Blank. <br>
              Buka CMD lalu masuk ke dalam direktori di mana nanti project akan kita simpan. Jika sudah, ketikkan command untuk pembuatan project yang baru dengan nama aplikasi_cnc menggunakan Blank template. <br>
              <pre><code class="language-markup">
                  $ Ionic start aplikasi_cnc blank
              </code></pre><br>
              <div class="center">
              <img src="assets/img/image27.png" width="500" centered>
              </div><br>
              Apabila keluar pertanyaan mengenai Push Notification, ketikkan huruf n untuk menyatakan tidak menggunakan fitur push notification. Pada project kali ini belum membutuhkan fitur tersebut.<br>
              <div class="center">
              <img src="assets/img/image10.png" width="500" centered>
              </div><br>
              Tunggu hingga proses selesai. Apabila sudah berhasil akan menghasilkan seperti di bawah ini: <br>
              <div class="center">
              <img src="assets/img/image06.png" width="500" centered>
              </div><br>
              </p>
              <p>
              2. Masuk ke dalam folder project kita maka akan terdapat struktur folder seperti
              di bawah ini:<br>
              <div class="center">
              <img src="assets/img/image39.png" width="500" centered><br>
              </div><br>
              Proses pembuatan project baru berhasil dilakukan.
              </p>
              <p>
      </div>
      <div id="menjalankan_live_reload" class="section scrollspy">
              <p class="caption">
              Menjalankan Live Reload Project Pada Browser
              </p><br>
              <p>
              Pada Ionic, terdapat fitur live reload yaitu project kita dapat langsung di run
              pada browser, sehingga segala perubahan yang kita lakukan dapat langsung dipantau
              melalui browser. <br>
              1.  Buka CMD lalu masuk ke direktori project aplikasi_cnc<br>
              <div class="center">
              <img src="assets/img/image32.png" width="500" centered>
              </div><br>
              </p>
              <p>
              2. Ketikkan command : <br>
              <pre><code class="language-markup">
                  $ ionic serve
              </code></pre><br>
              Command ini akan memjalanakan fitur live reload di mana project kita dapat tampil di browser
              secara real time. <br>
              Apabila muncul notice seperti di bawah ini: <br>
              <div class="center">
              <img src="assets/img/image28.png" width="500" centered>
              </div><br>
              Pilihlah Ethernet, karena kita akan menduduki port tersebut untuk menjalankan live
              reload. Jika menggunakan localhost atau VMware dapat menyebabkan bentrok port
              sehingga live reload tidak dapat dijalankan. <br>
              Secara otomatis akan terbuka browser dan menampilkan tampilan awal dari project
              kita seperti di bawah ini: <br>
              <div class="center">
              <img src="assets/img/image35.png" width="500" centered>
              </div><br>
              </p>
              <p>
              3. Untuk mengakhiri fungsi live reload, buka CMD lalu ketikkan huruf q. <br>
              <div class="center">
              <img src="assets/img/image28.png" width="500" centered>
              </div><br>
              Maka  live reload akan diakhiri. Jika dilakukan refresh pada browser tidak akan menampilkan project kita lagi.
              </p>
      </div>
      <div id="struktur_folder_template_blank_ionic" class="section scrollspy">
              <p class="caption">
              Struktur Folder Pada Template Blank Ionic
              </p><br>
              <p>
              Bukalah Sublime Text sebagai text editor yang akan kita gunakan pada pelatihan
              ini. Lakukan open folder aplikasi_cnc seperti di bawah ini: <br>
              1.  Buka CMD lalu masuk ke direktori project aplikasi_cnc<br>
              <div class="center">
              <img src="assets/img/image16.png" width="350" centered>
              </div><br>
              Pada pelatihan kali ini file yang akan dilakukan perubahan hanya pada file app.js
              dan folder untuk tampilan. File-file html yang akan digunakan sebagai tampilan
              kita masukkan ke dalam folder templates. Caranya buat folder baru dengan nama
              templates pada project kita. 
              </p>
              <div class="center">
              <img src="assets/img/image12.png" width="350" centered>
              </div><br>
              Dalam folder templates ini file-file html akan dijadikan satu dalam folder sehingga dapat memudahkan dalam mengorganisasi file-file html agar tidak terpisah-pisah.
              <br><br>
              Kembali kepada file app.js yang terdapat pada aplikasi_cnc/www/js/app.js, fungsi app.js ini adalah sebagai routing dan controller. 
              <br><br>
              - Routing adalah yang menentukan file html mana yang akan ditampilkan saat diakses suatu url tertentu. <br>
              - Controller adalah sekumpulan fungsi dimana memiliki peranan dalam mengenerate data yang akan ditampilkan pada suatu file html. <br><br>
              Dalam project kita menggunakan konsep RESTFUL API di mana setiap data yang akan ditampilkan merupakan data yang secara langsung diambil pada suatu server. Jadi aplikasi yang akan kita buat ini harus diakses menggunakan koneksi internet agar data dapat ditampilkan. Dengan menggunakan konsep RESTFUL API data dalam aplikasi kita dapat secara real-time terupdate, apabila ada perubahan sedikitpun pada database server, maka akan dapat langsung terupdate juga di aplikasi kita. <br>
      </div>
      <div id="konfigurasi_file_index" class="section scrollspy">
              <p class="caption">
              Konfigurasi File index.html
              </p><br>
              <p>
              Aplikasi secara default akan mengakses index.html, namun pada aplikasi kita
              terdapat banyak file html yang akan ditampilkan. <br>
              Agar file dapat dinamis sesuai routing maka harus dikonfigurasi seperti di bawah ini: <br>
              1.  Buka file index.html <br>
              <div class="center">
              <img src="assets/img/image20.png" width="500" centered>
              </div><br>
              2. Lakukan perubahan pada bagian body, diganti dengan kode di bawah ini: <br><br>
              <div class="center">
              <img src="assets/img/image07.png" width="500" centered>
              </div><br>
              Kode <b>ion-nav-view</b> akan menyesuaikan tampilan html mana yang akan ditampilkan sesuai dengan Routing pada app.js <br>
              Apabila kita lakukan ionic-serve maka akan menghasilkan tampilan white screen
              blank, karena kita belum membuat file html yang akan ditampilkan pada url default ( / ). <br>
              </p>
      </div>
      <div id="konfigurasi_app_js" class="section scrollspy">
              <p class="caption">
              Konfigurasi app.js sebagai routing dan controller
              </p><br>
              <p>
              1.  Buka file app.js <br>
              <div class="center">
              <img src="assets/img/image29.png" width="500" centered>
              </div><br>
              2. Lakukan inisiasi variable app <br>
              <pre><code class="language-markup">
                  (function() {
                  var app = angular.module('starter', ['ionic']);

                  //kode bawaan

                  }());
              </code></pre> <br>
              Seperti di bawah ini: <br>
              <div class="center">
              <img src="assets/img/image33.png" width="500" centered>
              </div><br>
              </p>
      </div>
       <div id="membuat_halaman_home" class="section scrollspy">
              <p class="caption">
              Membuat Halaman Home Aplikasi
              </p><br>
              <p>
              Hal yang dibutuhkan untuk membuat halaman home adalah routing pada app.js dan file
              home.html pada folder templates. <br>
              1.  Buatlah file baru pada folder templates dengan nama home.html <br>
              <pre><code class="language-markup">
                 &lt;ion-view view-title="Home">
                  &lt;ion-header-bar class="bar-stable bar-calm">
                      &lt;center>&lt;h1 class="title">Aplikasi Profil Asisten&lt;/h1>&lt;/center>
                    &lt;/ion-header-bar>
                    &lt;ion-content>
                      &lt;center>&lt;img ng-src="img/cnc.png" width="100">&lt;/center>
                      &lt;center>&lt;h3>Computer and Communication Laboratory&lt;/h3>&lt;/center><br>
                      &lt;center>O Building Room 203 &lt;/center>
                      &lt;center>School of Engineering&lt;/center>
                      &lt;center>&lt;h4>Telkom University&lt;/h4>&lt;/center>
                      &lt;img ng-src="img/cnc_bareng.jpg" width="100%">
                    &lt;/ion-content>
                        &lt;div class="tabs tabs-icon-left tabs-assertive">
                          &lt;a class="tab-item" href="#/">
                          &lt;i class="icon ion-home">&lt;/i>
                          Home
                          &lt;/a>
                          &lt;a class="tab-item" href="#/asisten">
                          &lt;i class="icon ion-person-stalker">&lt;/i>
                          Asisten
                          &lt;/a>
                          &lt;a class="tab-item" href="#/tentang">
                          &lt;i class="icon ion-information-circled">&lt;/i>
                          Tentang
                          &lt;/a>
                      &lt;/div>    
                  &lt;/ion-view>
              </code></pre><br>
              Save dengan nama home.html pastikan dalam folder templates. <br>
              <div class="center">
              <img src="assets/img/image03.png" width="500" centered>
              </div><br>
              2.  Membuat routing pada app.js yang berfungsi sebagai yang mengarahkan url / agar
              menampilkan file home.html. Bukalah app.js lalu tambahkan kode di bawah ini: <br>
              <pre><code class="language-markup">
                app.config(function($stateProvider, $urlRouterProvider) {
                  $urlRouterProvider.otherwise('/');

                  $stateProvider.state('home', {
                  url: '/',
                  templateUrl: 'templates/home.html'
                  });
                });
              </code></pre><br>
              <div class="center">
              <img src="assets/img/image05.png" width="500" centered>
              </div><br>
              Tampilan struktur kode keseluruhan app.js seperti di bawah ini: <br>
              <div class="center">
              <img src="assets/img/image38.png" width="500" centered>
              </div><br>
              3. Karena dibutuhkan image logo CNC, logo SM CNC dan image foto CNC maka download pada <a href="https://www.dropbox.com/s/iyb9k6d66mo6297/logo.zip?dl=0">link</a> ini, masukkan ke dalam folder img. <br>
              <div class="center">
              <img src="assets/img/image36.png" width="300" centered>
              </div><br>
              4. Coba lakukan live reload dengan command ionic serve melalui CMD. Maka akan
              menampilkan file home.html pada url default ( / ). Seperti tampilan di bawah ini: <br><br>
              <div class="center">
              <img src="assets/img/image00.png" width="300" centered>
              </div><br>
              Halaman HOME untuk Aplikasi CNC sudah dapat berhasil buat. 
              </p>
      </div>
      <div id="membuat_halaman_tentang" class="section scrollspy">
              <p class="caption">
              Membuat Halaman Tentang
              </p><br>
              <p>
              1.  Buatlah file tentang.html dalam folder templates dengan kode di bawah ini: <br>
              <pre><code class="language-markup">
              &lt;ion-view title="Tentang">
                    &lt;ion-header-bar class="bar-stable bar-calm">
                          &lt;h1 class="title">Tentang&lt;/h1>
                        &lt;/ion-header-bar>
                    &lt;ion-content>
                    &lt;div class="row row-center">
                      &lt;div class="col col-center">
                      &lt;center>
                        &lt;img ng-src="img/cnc.png" width="100"><br>
                          &lt;h3>Aplikasi Profil Asisten CNC 2016&lt;/h3><br>
                          &lt;i>Beta version&lt;/i> <br><br>
                          Apabila ada masukan demi kesempurnaan aplikasi ini harap submit ke : <br>
                          &lt;b>&lt;a href="http://www.labcnc.com/feedback_aplikasi">http://www.labcnc.com/feedback_aplikasi&lt;/a>&lt;/b><br><br>
                          - Terimakasih telah menggunakan Aplikasi ini - <br><br>
                          &lt;b>- Developed by SM 2016 -&lt;/b><br>

                        &lt;/div>
                        &lt;/center>
                      &lt;/div>
                    &lt;/ion-content>
                      &lt;div class="bar bar-footer">
                        &lt;div class="tabs tabs-icon-left tabs-assertive">
                        &lt;a class="tab-item" href="#/">
                        &lt;i class="icon ion-home">&lt;/i>
                        Home
                        &lt;/a>
                        &lt;a class="tab-item" href="#/asisten">
                        &lt;i class="icon ion-person-stalker">&lt;/i>
                        Asisten
                        &lt;/a>
                        &lt;a class="tab-item" href="#/tentang">
                        &lt;i class="icon ion-information-circled">&lt;/i>
                        Tentang
                        &lt;/a>
                      &lt;/div>
                    &lt;/div>
              &lt;/ion-view>
              </code></pre><br>
              </p>
              2. Buatlah routing baru pada app.js <br>
              Tambahkan kode di bawah ini pada routing: <br>
              <pre><code class="language-markup">
                $stateProvider.state('tentang', {
                url: '/tentang',
                templateUrl: 'templates/tentang.html',
                });
              </code></pre><br>
              <div class="center">
              <img src="assets/img/image26.png" width="500" centered>
              </div><br>
              Lakukan live reload lalu akses ke halaman Tentang. <br>
              <div class="center">
              <img src="assets/img/image34.png" width="300" centered>
              </div><br>
              Halaman Tentang sudah berhasil dibuat <br>
      </div>
      <div id="halaman_daftar_asisten" class="section scrollspy">
              <p class="caption">
              Membuat Halaman Daftar Asisten CNC
              </p><br>
              <p>
              Sama seperti proses pembuatan halaman HOME dan halaman TENTANG. <br><br>
              1.  Buatlah file asisten.html pada folder templates dengan kode di bawah ini:<br>
              <pre><code class="language-markup">
              &lt;ion-view view-title="Divisi">
                &lt;ion-header-bar class="bar-stable bar-calm">
                  &lt;h1 class="title">Divisi&lt;/h1>
                &lt;/ion-header-bar>
                &lt;ion-content>
                  &lt;div class="list">
                  &lt;a class="item item-avatar item-icon-right" href="#/asisten_riset">
                    &lt;img ng-src="img/sm.png">
                    &lt;h2>Asisten Riset&lt;/h2>
                    &lt;p>Detail Asisten Riset CNC 2016&lt;/p>
                  &lt;/a>
                  &lt;a class="item item-avatar item-icon-right" href="#/asisten_aslab">
                    &lt;img ng-src="img/cnc.png">
                    &lt;h2>Asisten Laboratorium&lt;/h2>
                    &lt;p>Detail Asisten Laboratorium CNC 2016&lt;/p>
                  &lt;/a>
                  &lt;a class="item item-avatar item-icon-right" href="#/asisten_benginpro">
                    &lt;img ng-src="img/cnc.png">
                    &lt;h2>Asisten Benginpro&lt;/h2>
                    &lt;p>Detail Asisten Benginpro CNC 2016&lt;/p>
                  &lt;/a>
                  &lt;a class="item item-avatar item-icon-right" href="#/asisten_kamjar">
                    &lt;img ng-src="img/cnc.png">
                    &lt;h2>Asisten Kamjar&lt;/h2>
                    &lt;p>Detail Asisten Kamjar 2016&lt;/p>
                  &lt;/a>
                  &lt;a class="item item-avatar item-icon-right" href="#/alumni">
                    &lt;img ng-src="img/cnc.png">
                    &lt;h2>&lt;i class="ion-university">&lt;/i>  Alumni CNC&lt;/h2>
                    &lt;p>Detail Alumni Lab CNC&lt;/p>
                  &lt;/a>
              &lt;/div>
                &lt;/ion-content>
                    &lt;div class="tabs tabs-icon-left tabs-assertive">
                    &lt;a class="tab-item" href="#/">
                    &lt;i class="icon ion-home">&lt;/i>
                    Home
                    &lt;/a>
                    &lt;a class="tab-item" href="#/asisten">
                    &lt;i class="icon ion-person-stalker">&lt;/i>
                    Asisten
                    &lt;/a>
                    &lt;a class="tab-item" href="#/tentang">
                    &lt;i class="icon ion-information-circled">&lt;/i>
                    Tentang
                    &lt;/a>
                  &lt;/div>
              &lt;/ion-view>
              </code></pre><br>
              2. Tambahkan routing baru pada app.js dengan kode di bawah ini: <br>
              <pre><code class="language-markup">
                  $stateProvider.state('asisten', {
                    url: '/asisten',
                    templateUrl: 'templates/asisten.html'
                    });
              </code></pre> <br>
              <div class="center">
              <img src="assets/img/image24.png" width="500" centered>
              </div><br>
              3. Lakukan live reload lalu akses halaman asisten <br><br>
              <div class="center">
              <img src="assets/img/image18.png" width="300" centered>
              </div><br>
              Pembuatan halaman ASISTEN sudah berhasil <br>
              </p>
      </div>
      <div id="api_codeigniter" class="section scrollspy">
              <p class="caption">
              Membuat API menggunakan Code Igniter
              </p><br>
              <p>
              Sebuah API adalah antarmuka software-to-software, bukan user interface. Dengan
              API, aplikasi berbicara satu sama lain tanpa sepengetahuan pengguna atau intervensi. Asisten dapat mendaftarkan dirinya melalui sebuah halaman register pada sebuah website, lalu data asisten tersebut dapat secara real-time terupdate pada aplikasi. Konsep API dapat digambarkan seperti di bawah ini: <br>
              <div class="center">
              <img src="assets/img/api.png" width="500" centered>
              </div><br>
              API yang akan kita buat menggunakan sebuah framework PHP yang bernama CodeIgniter 
              (https://www.codeigniter.com/).  Framework itu sendiri adalah suatu kerangka kerja 
              yang berupa sekumpulan folder yang memuat file-file php yang menyediakan class 
              libraries, helpers dan lain sebagainya . Framework menyediakan konfigurasi dan
              teknik coding tertentu. <br><br>
              Konsep MVC adalah konsep pemisahan antara logic dengan tampilan dan database. 
              Manfaat konsep ini adalah, membuat coding logic lebih simple, karena sudah dipisah dengan code untuk tampilan dan membuat programmer dapat bekerja secara terpisah dengan designer. Programmer mengerjakan logic, sedangkan designer berkutat dengan design dan tampilan. 
              <br><br>
              - Model → Merupakan code struktur data. Model berisi fungsi di dalam pengolahan database. Script Sql masuk di sini. 
              <br>
              - View → Merupakan code untuk menampilkan tampilan suta program. Tampilan dapat berupa web page, header, footer dan apa saja yang berjenis tampilan.
              <br>
              - Controller → Merupakan code untuk logic, algoritma dan sebagai penghubung antara model, view, dan sumber lain yang di perlukan untuk mengolah HTTP request dan generate web page. <br>
              </p>
      </div>
      <div id="instalasi_codeigniter" class="section scrollspy">
              <p class="caption">
              Instalasi CodeIgniter
              </p><br>
              <p>
              CodeIgniter merupakan framework php, di mana php bekerja di sisi server side. Oleh 
              karena itu, diperlukan sebuah web server contohnya seperti XAMPP. <br>
              1.  Download XAMPP pada https://www.apachefriends.org/download.html <br>
              2.  Selesaikan proses instalasi. <br>
              <br><br>
              Sekarang mulai instalasi codeIgniter, buka halaman web https://www.codeigniter.com/download untuk mendownload package CodeIgniter. <br>
              1.  Download CI versi 3.0.0 pada https://github.com/bcit-ci/CodeIgniter/archive/3.0.0.zip <br>
              2.  Ekstrak package CI tersebut dengan nama APIcnc. <br>
              3.  Masukkan ke dalam XAMPP / htdocs, seperti gambar di bawah ini: <br>
              <div class="center">
              <img src="assets/img/image01.png" width="500" centered>
              </div><br>
              Setelah folder CodeIgniter sudah di Ekstrak ke folder C:\xampp\htdocs.
              Kemudian akses ke browser dengan alamat http://localhost/APIcnc/ akan muncul 
              tampilan seperti dibawah ini <br>
               <div class="center">
              <img src="assets/img/image40.png" width="500" centered>
              </div><br>
              </p>
      </div>
      <div id="instalasi_materialize" class="section scrollspy">
              <p class="caption">
              Instalasi Materialize CSS Framework
              </p><br>
              <p>
              Materialize CSS ini dikembangkan oleh Dogfalo (www.github.com/dogfalo) pada framework ini sudah tersedia berbagai macam komponen untuk membangun website mulai desain grid, tabel, form, button, dll. Framework responsive ini sudah mengadaptasi Bahasa desain Material Design by Google. Dengan menggunakan ini sebagai web developer diberikan kemudahan dalam membuat website yang indah dengan mudah dan cepat. <br>
              <div class="center">
              <img src="assets/img/image09.png" width="500" centered>
              </div><br>
              Sebelum melakukan perancangan, download terlebih dahulu framework CSS di http://materializecss.com/getting-started.html <br>
              <div class="center">
              <img src="assets/img/image37.png" width="500" centered>
              </div><br>
              Buat folder assets pada folder project kita di C:\xampp\htdocs\APIcnc. Kemudian ekstrak folder materialize tersebut. <br>
              </p>
      </div>
      <div id="konfigurasi_codeigniter" class="section scrollspy">
              <p class="caption">
              Konfigurasi Framework Code Igniter
              </p><br>
              <p>
              1.       Setting base_url pada application/config/config.php<br>
              <div class="center">
              <img src="assets/img/image17.png" width="300" centered>
              </div><br>
             
              </p>
      </div>
</body>
</html>