<?php
error_reporting(0);
$servername = 'localhost';
$user_name = 'root';
$user_password = '';
$dbname = "iletisim_db";

$conn = new mysqli($servername, $user_name, $user_password,$dbname);
$new = mysqli_set_charset($conn, "utf8");
if($conn->connect_error){
die("hata" . $conn->connect_error);

}


// if($_GET) {
  //   $no = $_GET["ilanno"];

    // $search = "SELECT * FROM contact_formm WHERE id=" . $no;
    // $save = $conn->query($search);

    // while ($row = $save->fetch_assoc() ) {
         //print_r($row);
      //   echo "{$row['name']}";
        // echo "{$row['number']}";
         //echo "{$row['email']}";
         //echo "{$row['support']}";
     //}
 //}

//$conn->close();

?>
