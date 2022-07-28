<?php include "kayit.php" ?>
<?php error_reporting(0); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorgu</title>

    <!-- swiper css  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- custom css-->
    <link rel="stylesheet" href="style.css" />

</head>

<body>

</body>

</html>
<div id="preloader"></div>




<div class="preloaderslow">


    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe display=none; width="560" height="315" src="https://www.youtube.com/embed/C5fLxtJH2Qs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<header class="header">
    <div class="box-con">
        <a href="#home" class="logo">webs</a>

        <nav class="navbar">
            <a href="index.php">Ana Sayfa</a>
            <a href="2.php">Çıktı Sorgula</a>

        </nav>
    </div>
</header>


<div class="contact" id="contact">
    <h1 class="heading"><span>İD</span> <br>GİRİNİZ</h1>

    <div class="row">
        <div class="image">
            <img src="images/666.svg" alt="" />
        </div>

        <form action="" method="post">
            <span>İD</span>
            <input type="text" required maxlength="50" name="ilanno" class="box" />
            <input type="submit" value="Gönder" class="btn" name="gonder" />
        </form>
    </div>
</div>

<?php

if ($_GET) {
    $no = $_GET["ilanno"];

    $search = "SELECT * FROM contact_formm WHERE id=" . $no;
    $save = $conn->query($search);

    while ($row = $save->fetch_assoc()) {
       
        echo '<div class="myclass">';

        // print_r($row);
        echo "{$row['name']}". "&nbsp"  ;  
        echo "{$row['number']}". " &nbsp" ; 
        echo "{$row['email']}". " &nbsp" ;
        echo "{$row['support']}". " &nbsp" ;

        echo '</div>';

   
    }
}

if ($kayit->num_rows > 0) {

    while ($satir = $kayit->fetch_assoc()) {


        echo "email:" . $satir["id"];
    }
}




?>

</div>
</div>



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