<?php include "kayit.php" ?>
<?php

$db_name = 'mysql:host=localhost;dbname=iletisim_db';
$user_name = 'root';
$user_password = '';


$conn = new PDO($db_name, $user_name, $user_password);

if (isset($_POST['send'])) {


  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $number = $_POST['number'];
  $number = filter_var($number, FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $courses = $_POST['courses'];
  $courses = filter_var($courses, FILTER_SANITIZE_STRING);


  $select_contact = $conn->prepare("INSERT INTO `contact_formm` (name, number, email, support) VALUES (?,?,?,?)");
  $select_contact->execute([$name, $number, $email, $courses]);

  if ($select_contact->rowCount() > 0) {

    $message[] = 'başarılı.';
  } else {

    $insert_message = $coon->prepare("INSERT INTO `contact_formm`(name,number,email,support) VALUES(?,?,?,?)");
    $insert_message->execute([$name, $number, $email, $courses]);
    $message[] = 'hata.';
  }
}





?>















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>204603015</title>

  <!-- swiper css  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <!-- custom css-->
  <link rel="stylesheet" href="style.css" />
</head>

<body>

<!-- loader -->

  <div id="preloader"></div>




  <!-- header div-->

  <header class="header">
    <div class="box-con">
      <a href="index.php" class="logo">webs</a>

      <nav class="navbar">
        <a href="#home">Ana Sayfa</a>
        <a href="#about">Bilgi</a>
        <a href="#courses">Paketler</a>
        <a href="#reviews">Görüşler</a>
        <a href="#contact">İletişim</a>
        <a href="2.php">Çıktı Sorgula</a>

      </nav>
    </div>
  </header>

  <!-- header div end -->

  <!-- home div -->

  <div class="home" id="home">
    <div class="row">
      <div class="content">
        <h3>Tüm Yazılım, Web ve <span>Domain İşleriniz</span></h3>
        <a href="#courses" class="btn">Detaylar</a>
      </div>

      <div class="image">
        <img src="images/333.svg" alt="" />
      </div>
    </div>

  </div>

  <div class="preloaderslow">


    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <!-- home div ends -->

  <!-- couter section stars  -->

  <div class="courses">
    <div class="box-container">
      <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <div class="content">
          <h3>150+</h3>
          <p>Kullanıcı</p>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-chalkboard-user"></i>
        <div class="content">
          <h3>80+</h3>
          <p>Teslim Edilmiş Proje</p>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-face-smile"></i>
        <div class="content">
          <h3>99%</h3>
          <p>Memnuniyet</p>
        </div>
      </div>
    </div>
  </div>

  <!-- courses div end -->

  <!-- about div starts  -->

  <div class="about" id="about">
    <div class="row">
      <div class="image">
        <img src="images/555.svg" alt="" />
      </div>

      <div class="content">
        <h3 class="heading">
          Neden <span> Biz?</span> </h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
          quibusdam magni error, aut enim rerum?
        </p>
        <a href="#contact" class="btn">İletişim</a>
      </div>
    </div>
  </div>

  <!-- about div ends -->

  <!-- courses2 div starts  -->

  <div class="courses" id="courses">
    <h1 class="heading">Neler <span>Yapıyoruz?</span></h1>

    <a href="#contact">
      <div class="swiper course-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img src="images/444.svg" alt="" />
            <h3>Web Tasarım</h3>
            <p>Talepleriniz Doğrultusunda Web Tasarım</p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/course-2.svg" alt="" />
            <h3>Seo</h3>
            <p>Sitenizi Üst Sıralara Çıkaralım.</p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/course-4.svg" alt="" />
            <h3>Grafik Tasarım</h3>
            <p>Taleplerinizi Gerçekleştirmek Bizim İşimiz.</p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/Server-amico.svg" alt="" />
            <h3>Domain Servisleri</h3>
            <p>SoftHosting İle Ucuz ve Hızlı Domainler Sağlıyoruz.</p>
          </div>
        </div>
      </div>
    </a>


    <div class="swiper-pagination"></div>
  </div>
  </div>


  <!-- courses div ends -->

  <!-- reviews div starts  -->

  <div class="reviews" id="reviews">
    <h1 class="heading">Müşteri <span>Yorumları</span></h1>

    <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
            necessitatibus atque fuga delectus numquam consequatur velit autem
            distinctio possimus culpa!
          </p>
          <div class="user">
            <img src="images/pic-1.png" alt="" />
            <div class="user-info">
              <h3>Murat Uçar</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
            necessitatibus atque fuga delectus numquam consequatur velit autem
            distinctio possimus culpa!
          </p>
          <div class="user">
            <img src="images/pic-2.png" alt="" />
            <div class="user-info">
              <h3>Emine Uçar</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide slide">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
            necessitatibus atque fuga delectus numquam consequatur velit autem
            distinctio possimus culpa!
          </p>
          <div class="user">
            <img src="images/pic-3.png" alt="" />
            <div class="user-info">
              <h3>Miraç Yılmaz</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
          necessitatibus atque fuga delectus numquam consequatur velit autem
          distinctio possimus culpa!
        </p>
        <div class="user">
          <img src="images/pic-5.png" alt="" />
          <div class="user-info">
            <h3>Mehmet Sait Akay</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
  </div>

  <!-- reviews div ends -->

  <!-- contact div starts  -->

  <div class="contact" id="contact">
    <h1 class="heading"><span>Bize</span> <br>Ulaşın</h1>

    <div class="row">
      <div class="image">
        <img src="images/666.svg" alt="" />
      </div>

      <form action="" method="post">
        <span>Adınız</span>
        <input type="text" required maxlength="50" name="name" class="box" />
        <span>Mail Adresiniz</span>
        <input type="email" required maxlength="50" name="email" class="box" />
        <span>Numararanız</span>
        <input type="number" required max="9999999999" min="0" name="number" class="box" onkeypress="if(this.value.length == 10) return false;" />
        <span>Destek İstediğiniz Alan</span>
        <select name="courses" class="box" required>
          <option value="" disabled selected>Seçiniz.</option>
          <option value="Web Tasarım">Web Tasarım</option>
          <option value="Seo">Seo Desteği</option>
          <option value="Grafik Tasarım">Grafik Tasarım</option>
          <option value="Domain">Domain Servisleri</option>
          </option>
        </select>
        <input type="submit" value="Gönder" class="btn" name="send" />
      </form>
    </div>
  </div>

  <!-- contact div ends -->

  <!-- footer div starts  -->

  <footer class="footer">
    <section>
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-youtube"></a>
      </div>

      <div class="credit">
        &copy; 2022 <span>Miraç Yılmaz</span>
      </div>
    </section>
  </footer>

  <!-- footer div ends -->

  <!-- swiper js link  -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      loader.style.display = "none";
    })
  </script>



</body>





</html>