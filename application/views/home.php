<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(<?php echo base_url(); ?>source/images/bg1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
	              <h2 class="subheading mb-4">We deliver fresh & organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>
	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(<?php echo base_url(); ?>source/images/bg2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Organic Foods</h1>
	              <h2 class="subheading mb-4">We deliver fresh & organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
    </section>


<section>
<div class="container-fluid padding">
    <div class="row text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Easy 3 Steps To Follow</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">The easiest way to your food. Food Ordering System provides fresh delivery
                with in the 30 minutes and provide free food if order is not on time. So don't wait and start ordering right now!</p>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-utensils"></i>
            <h3>Choose A Restaurant</h3>
            <p>First thing you can do is choose from our restautant partners easily!</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bullseye"></i>
            <h3>Choose A Tasty Dish</h3>
            <p>We've got you covered with menus from over various delivery restaurants online!</p>
        </div>
        <div class="col-sm-12 col-md-4">
        <i class="fas fa-clipboard-check"></i>
            <h3>Pick Up or Delivery</h3>
            <p>After all, the food gets delivered or you can pick it up as per your choices!</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Popular Dishes</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if(!empty($homeList)) { ?>
        <?php foreach($homeList as $items) { ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $items['image'];?>
                <img width="260" height="260" class="card-img-top" src="<?php echo base_url().'uploads/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?php echo $items['name']; ?></h4>
                        <h4 class="text-muted"><b>Rs. <?php echo $items['price']; ?></b></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="jumbotron">
            <h1>No records found</h1>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect With Us</h2>
        </div>
        <div class="col-12 social padding">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
</section>





    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<h2 class="mb-3">Organic foods is good for your health</h2>
            <p1>Organic products reduce public health risks to farm workers, their families, and consumers by minimizing their exposure 
              to toxic and persistent chemicals on the farm and in food, the soil in which they work and play, the air they breathe, 
              and the water they drink. Children are especially vulnerable to pesticides. Thus, offering organic food and fiber products 
              into the marketplace gives parents the option of choosing products produced without the use of these toxins. <br>

              Not only does organic production help reduce public health risks, mounting evidence shows that food grown organically 
              are rich in nutrients, such as Vitamin C, iron, magnesium, and phosphorus, with less exposure to nitrates and pesticide 
              residues in organically grown fruits, vegetables, and grains when compared to conventionally grown products.</p>
            <p>
              <img src="images/image_1.jpg" alt="" class="img-fluid">
            </p>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our satisfied customer says</h2>
            <p>That's a good choice...</p>
          </div>
        </div>
	</section>  

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Be the first to save</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>