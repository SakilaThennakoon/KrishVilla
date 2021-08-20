<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">

	      <div class="slider-item" style="background-image: url(<?php echo base_url(); ?>source/images/fru.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Fruits</h1>
	              <h2 class="subheading mb-4">We deliver fresh & organic vegetables &amp; fruits</h2>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
    </section>

<section>

<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-6"></h1></br></br></br>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if(!empty($fruit)) { ?>
        <?php foreach($fruit as $items) { ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $items['image'];?>
                <img width="260" height="260" class="card-img-top" src="<?php echo base_url().'uploads/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><?php echo $items['name']; ?></h5>
                        <h6 class="text-muted"><b>Rs. <?php echo $items['price']; ?></b></h6>
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