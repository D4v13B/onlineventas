<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Los Más vistos hoy</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<!-- <div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Suscríbete</b></h3>
	  	</div>
	  	<div class="box-body">
	    <p>Obtenga actualizaciones gratuitas sobre los últimos productos y descuentos, directamente en su bandeja de entrada.</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div> -->

<div class="row">
	<div class='box box-solid text-danger'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Síguenos en las redes sociales</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a class="btn btn-social-icon" href=""><i class="fa fa-facebook"></i></a>
	    	<a class="btn btn-social-icon" href=""><i class="fa-brands fa-instagram text-danger"></i></a>
			<a class="btn btn-social-icon btn-whatsapp" href="wa.link/izdmym"><i class="fa-brands fa-whatsapp text-success"></i></a>
	    	
	  	</div>
	</div>
</div>
