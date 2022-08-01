<?php 
ob_start();
session_start();
include "include/config.php";
include "main/head.php";
 ?>


<?php include"main/header.php" ?>

<body>  
<div class="content">
      <?php  if(isset($_GET["login"])){
          include "pages/login.php";
    }else if(isset($_GET["signup"])){
      include "pages/signup.php";
    }else if(isset($_GET["home"])){
      include "pages/home.php";
}else if(isset($_GET["menu"])){
      include "pages/menu.php";
}else if(isset($_GET["contact"])){
      include "pages/contact.php";
}else if(isset($_GET["cart"])){
      include "pages/cart.php";
}else{
        include "pages/home.php";
         }?>
</div>
</body>

<?php
include"main/footer.php";
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>


<?php
mysqli_close($conn);
ob_end_flush();
?>
