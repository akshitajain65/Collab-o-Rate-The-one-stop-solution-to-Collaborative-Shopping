<div class="container">
	<h2>Product Details</h2>
	<?php

	include 'class/Rating.php';
	$rating = new Rating();
	$productDetails = $rating->getProduct($_GET['product_id']);
	$average = $rating->getRatingAverage($_GET['product_id']);
	$count = $rating->getRatingTotal($_GET['product_id']);
	$settingClass = $rating->getSetting();


	foreach($productDetails as $product){
		$average = $rating->getRatingAverage($product["id"]);


	?>
	<div class="row">
		<div>
            <img class="product_image" src="image/<?php echo $product["image"]; ?>" alt="image1" class="img-fluid card-img-top" class=>
        </div>
		<div class="card-body">
            <h5 class="card-title"><a href="product_detail.php?product_id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a><span class="price">  - Rs <?php echo $product["price"]?></span></h5>
        

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
		<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span> </div> 
  
		</div>
	</div>
	</div>
<?php } ?>

<br>
	<div >
		
		<div class="col-sm-3">
			<button type="button" id="rateProduct" class="btn btn-secondary btn-sm <?php if(empty($_SESSION['userid'])){echo $settingClass;}  ?>">Rate This Product</button>
		</div>
		<br/>
		<br/>
		<br/>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<div id="ratingSection" style="display:none;">
					<hr/>
					<div class="row">
						<div class="col-sm-12">
							<form id="ratingForm" method="POST">
								<div class="form-group">
									<h4>Rate this product</h4>	
									<i class="fa fa-star fa-lg star-grey rateButton" aria-hidden="true"></i>
										<i class="fa fa-star fa-lg star-grey rateButton" aria-hidden="true"></i>
										<i class="fa fa-star fa-lg star-grey rateButton" aria-hidden="true"></i>
										<i class="fa fa-star fa-lg star-grey rateButton" aria-hidden="true"></i>
										<i class="fa fa-star fa-lg star-grey rateButton" aria-hidden="true"></i>


									<input type="hidden" class="form-control" id="rating" name="rating" value="1">
									<input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $_GET['product_id']; ?>">
									<input type="hidden" name="action" value="saveRating">									
								</div>
								<div class="form-group">
									<label for="usr">Title</label>
									<input type="text" class="form-control" id="title" name="title" >
								</div>
								<div class="form-group">
									<label for="comment">Review</label>
									<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
								</div>
								<div class="form-group">
									<label for="name">Name</label>
										<input type="text" class="form-control"  id = "reviewer" name="reviewer" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id = "email"  name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-secondary btn-sm" id="saveReview">Post</button> <button type="button" class="btn btn-secondary btn-sm" id="cancelReview">Cancel</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>



	<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Login to rate this product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
				<form method="post" id="loginForm" name="loginForm">
					<input type="text" name="user" placeholder="Username" required>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="hidden" name="action" value="userLogin">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				</form>
				
      </div>

    </div>
  </div>
</div>



</div>
