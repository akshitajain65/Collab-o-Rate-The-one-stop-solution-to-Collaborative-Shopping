<div class="container">
	<h2>Here's your friend's WishList! Help them choose :)</h2>
	<br/>
	<?php

	include_once 'class/Rating.php';

	$rating = new Rating();
	$productList = $rating->getProductList();

	foreach($productList as $product){
		$average = $rating->getRatingAverage($product["id"]);
		$count = $rating->getRatingTotal($product["id"]);
	
	?>

	<div class="row">
	<div class="card shadow">
		<div>
            <img class="product_image" src="image/<?php echo $product["image"]; ?>" alt="image1"class="img-fluid card-img-top">
        </div>

		<div class="card-body">
            <h5 class="card-title"><a href="product_detail.php?product_id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a><span class="price">  - Rs <?php echo $product["price"]?></span></h5>
			<button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

		<div class="col-sm-4">

		<?php
			
			for ($i = 1; $i <= 5; $i++) {
				$ratingClass = "star-grey";
				if($i <= $average) {
					$ratingClass = "star-highlight";
				}


			echo	'<i class="fa fa-star '.$ratingClass. '"; aria-hidden="true"></i>';

			}
		?>
	   	<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span></div>
	  	<?php
		  echo '<br>';

		?>
		</div>	
	</div>
	</div>
</div>
<?php } ?>
</div>
</div>
