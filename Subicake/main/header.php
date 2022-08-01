<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-12">
					<div class="btn-group">
						<button class="btn border my-md-4 my-2 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanden="false">IDR</button>				
					</div>
				</div>
			<div class="col-md-4 col-12 text-center">
				<h2 class="my-md-3 site-title text-white">SUBICAKE</h2>
			</div>
			<div class="col-md-4 col-12 text-right">
				<p class="my-md-4 header-links">
				<?php
				if(isset($_SESSION['UserID'])){
				echo '<a href="../index.php?logout" class="px-2">Log Out</a>'
				}else{
				<a href="../index.php?login" class="px-2">Sign In</a>
					<a href="../index.php?signup" class="px-2">Create an Account</a>
				}
				?>	
				</p>
			</div>
			</div>
		</div>
	<div class="container-fluid p-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="../index.php?home">HOME </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="../index.php?menu">MENU<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="../index.php?contact">CONTACT</a>
		    </div>
		  </div>

		  <div class="navbar-nav">
		  	<li class="nav-item border rounded-circle mx-2 basket-icon">
		  		<a href="../index.php?cart"> <i class="fas fa-shopping-basket p-2"></i> 
				</a>
		  	</li> 
		  </div>
		</nav>
	</div> 
</header> 
