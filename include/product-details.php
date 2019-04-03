<?php

$id = $_GET['product_id'];
$type = $_GET['type'];


for ($i = 0; $i < sizeof($_SESSION['produtos']); $i++){
	if($_SESSION['produtos'][$i]['id'] == $id && $_SESSION['produtos'][$i]['tipo'] == $type){
		$produto = $_SESSION['produtos'][$i];
		break;
	}
}
?>

<div class="product product-details clearfix">
	<div class="col-md-6">
		<div id="product-main-view">
			<div class="product-view">
				<img src="<?php echo $produto['imagem'];?>" alt="">
			</div>

		</div>
		<div id="product-view">
			<div class="product-view">
				<img src="<?php echo $produto['imagem'];?>" alt="">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="product-body">
			<div class="product-label">
				<span>New</span>
				<span class="sale">-20%</span>
			</div>
			<h2 class="product-name"><?php echo $produto['nome'];?></h2>
			<h3 class="product-price"><?php echo "R$".$produto['preco'];?></h3>
			
			<p><strong>Availability:</strong> In Stock</p>
			<p><strong>Brand:</strong> <?php echo strtoupper($produto['marca']);?></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
				dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="product-btns">
				<div class="qty-input">
					<span class="text-uppercase">Quantity: </span>
					<input class="input" type="number">
				</div>
				<?="<button class='primary-btn add-to-cart'><i class='fa fa-shopping-cart'></i> <a href='checkout.php?product_id=".$_GET['product_id']."&type=".$_GET['type']."'>Add to Cart</button>"?>
				<div class="pull-right">
					<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
					<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
					<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="product-tab">
			<ul class="tab-nav">
				<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
				<li><a data-toggle="tab" href="#tab1">Details</a></li>
				<li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab-pane fade in active">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div id="tab2" class="tab-pane fade in">

					<div class="row">
						<div class="col-md-6">
							<div class="product-reviews">
								<div class="single-review">
									<div class="review-heading">
										<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
										<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
										<div class="review-rating pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
									<div class="review-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
											irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>

								<div class="single-review">
									<div class="review-heading">
										<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
										<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
										<div class="review-rating pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
									<div class="review-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
											irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>

								<div class="single-review">
									<div class="review-heading">
										<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
										<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
										<div class="review-rating pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
									<div class="review-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
											irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>

								<ul class="reviews-pages">
									<li class="active">1</li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<h4 class="text-uppercase">Write Your Review</h4>
							<p>Your email address will not be published.</p>
							<form class="review-form">
								<div class="form-group">
									<input class="input" type="text" placeholder="Your Name" />
								</div>
								<div class="form-group">
									<input class="input" type="email" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<textarea class="input" placeholder="Your review"></textarea>
								</div>
								<div class="form-group">
									<div class="input-rating">
										<strong class="text-uppercase">Your Rating: </strong>
										<div class="stars">
											<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
											<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
											<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
											<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
											<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
										</div>
									</div>
								</div>
								<button class="primary-btn">Submit</button>
							</form>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
	
	<script>
		
	</script>
</div>