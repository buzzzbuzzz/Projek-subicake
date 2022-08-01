<slider>
    	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		        <img src="picture/item-1.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		</div>
    </slider>
    
    <aboutus>
    	<div class="container">
        		<h1> ABOUT US </h1>
            <div class="boundary">
            	<img src="picture/pipicon.png">
                <p> We are a Cake Shop that has been established since 2017 and we send our stuff with love</p>           		
            </div>
        </div>
    </aboutus>
    <slider>
    <div class="container">
    	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="picture/f528ee29541184d545c809954704eb04.jpg"class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <h1 style="margin:40px 0 40px 0; text-align:center"> Menu Of the Month </h1>
       </div>
    </slider>    
   <menuofthemonth>

   <?php while($row= mysqli_fetch_array($query)) {?>

    	<div class="container">
        	<div class="form-row">
            	<div class="form-group col md-4">
                    <div class="card">
                    <div class="imgBx">
                      <img src="picture/<?php echo $row ["image"]?>"class="card-img-top" alt="...">
                     </div>
                      <div class="contentBx">
                        <h5 class="card-title"><?php echo $row ["cakename"]?></h5>
                        <p class="card-text"><?php echo $row["price"]?></p>
                        <a href="pages/menu.php" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
                </div>
                <div class="form-group col md-4">
                    <div class="card">
                    <div class="imgBx">
                      <img src="picture/flavourtown-bakery-london-cakes_rose-swirl-cake-blue2_2048x2048.webp"class="card-img-top" alt="...">
                     </div>
                      <div class="contentBx">
                        <h5 class="card-title">Rose Blue</h5>
                        <p class="card-text">IDR 250.000</p>
                        <a href="Menu.html" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
                 </div>
                <div class="form-group col md-4">
                    <div class="card">
                    <div class="imgBx">
                      <img src="picture/flavourtown-bakery-london-cakes_rose-swirl-cake-blue2_2048x2048.webp"class="card-img-top" alt="...">
                     </div>
                      <div class="contentBx">
                        <h5 class="card-title">Rose Blue</h5>
                        <p class="card-text">IDR 250.000</p>
                        <a href="Menu.html" class="btn btn-primary">Detail</a>
                      </div>
                    </div>               
                </div>
            </div>
            </div>
            </div>
        <?php }?>
    </menuofthemonth>