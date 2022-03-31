<?php 

session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>WE ARE RPL</title>
  </head>

    <header>
      <a href="#home" class="logo">RPL</a>

      <input type="checkbox" id="menu-bar" />
      <label for="menu-bar" class="fas fa-bars"></label>

      <nav class="navbar">
        <ul>
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT </a></li>
          <li><a href="#gallery">GALLERY</a></li>
          <li><a href="#contact">CONTACT US</a></li>
          <li><a href="kluar.php" target="blank">LOGOUT</a></li>
        </ul>
      </nav>
    </header>

    <section class="bener" id="home">
      <div class="rpl">
        <h1>Rekayasa Perangkat Lunak</h1>
        <br />
        <h3>SMK BHUMI HUSADA</h3>
        <p>"Little things means a lot"</p>
      </div>
      <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#3F3F3F"
          fill-opacity="1"
          d="M0,64L48,69.3C96,75,192,85,288,112C384,139,480,181,576,186.7C672,192,768,160,864,154.7C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <section class="about" id="about">
      <div class="about">
        <h1>ABOUT</h1>
        <img src="img/logo1.png" alt="" />
        <p>
          Rekayasa Perangkat Lunak (Software Engineering) adalah pengubahan perangkat lunak itu sendiri guna mengembangkan, memelihara, dan membangun kembali dengan menggunakan prinsip rekayasa untuk menghasilkan perangkat lunak yang dapat
          bekerja lebih efisien dan efektif untuk pengguna. Bidang profesi ini mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas. Ilmu
          ini dipandang sangat perlu karena pada dasarnya memungkinkan Anda membangun sistem perangkat lunak yang kompleks, efektif dan efisien dalam jangka waktu panjang dan pada dasarnya harus mempunyai kualitas tinggi.
        </p>
      </div>
    </section>

    <section class="about-we" id="gallery">
      <h1>OUR TEAM</h1>
      <div #swiperRef="" class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>arif fadillah</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Rendy christian</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Zheanita Juarlin</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Rhino hariansyah</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Rizky ierham</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Alif putra</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, odit?</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Ikhsan Rahadian</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Erwin</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Randy</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
          <div class="swiper-slide">
            <img src="img/pp.jpg">
            <h3>Ramadhani</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, placeat.</p>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
  
    </section>

    <section class="galery" id="gallery">
      <div class="container">
            <h1>GALLERY</h1>
          </div>
        </div>
        <div class="gallery">
          <img src="img/foto 3.jpg" />
          <img src="img/foto 4.jpg" />
          <img src="img/foto 5.JPG" />
          <img src="img/foto 6.jpg" />
          <img src="img/foto 7.JPG" />
          <img src="img/foto 9.JPG" />
        </div>
      </div>
    </section>

    <section class="contatc" id="contact">
      <h1>CONTACT US</h1>
      <div class="container1">
        <div class="contactinfo">
          <div>
            <h2>Contact information</h2>
            <ul class="info">
              <li>
                <span><img src="img/call.png" /></span>
                <span> (021) 22824842 </span>
              </li>
              <li>
                <span><img src="img/mail.png" /></span>
                <span> rpl.bhj@gmail.com </span>
              </li>
              <li>
                <span><img src="img/location.png" /></span>
                <span> Jl.Pengantin Ali No.6A, RT.1/RW.6, Ciracas, Kec.Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13740 </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="contactform">
          <div class="formBox">
            <div class="inputBox">
              <span>First Name</span><br />
              <input type="text" required />
            </div>
            <div class="inputBox w50">
              <span>Last Name</span><br />
              <input type="text" requidred />
            </div>
            <div class="inputBox">
              <span>Mobile Number</span><br />
              <input type="text" required />
            </div>
            <div class="inputBox w50">
              <span>Email Addres</span><br />
              <input type="email" requidred />
            </div>
            <div class="inputBox">
              <span>Write your message here...</span><br /><br /><br />
              <textarea requidred></textarea>
            </div>
            <div class="inputBox w100">
              <input type="submit" value="SEND" onclick="a1()" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="sosmed">
        <li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
        <li class="a"><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href=""><ion-icon name="logo-youtube"></ion-icon></a></li>
        <li class="b"><a href=""><ion-icon name="logo-tiktok"></ion-icon></a></li>
      </ul>
      <ul class="menu">
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="">Login</a></li>
      </ul>
      <p> ©2022 RPL BHJ  IS THE BEST </p>
    </footer>

    <script src="js/main.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      
      var appendNumber = 4;
      var prependNumber = 1;
      document.querySelector(".prepend-2-slides").addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide(['<div class="swiper-slide">Slide ' + --prependNumber + "</div>", '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"]);
      });
      document.querySelector(".prepend-slide").addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide('<div class="swiper-slide">Slide ' + --prependNumber + "</div>");
      });
      document.querySelector(".append-slide").addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide('<div class="swiper-slide">Slide ' + ++appendNumber + "</div>");
      });
      document.querySelector(".append-2-slides").addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide(['<div class="swiper-slide">Slide ' + ++appendNumber + "</div>", '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"]);
      });

      function a1() {
        alert("Terima kasih sudah mengisi !!")
      }
  </script>
    
   
  </body>
</html>
