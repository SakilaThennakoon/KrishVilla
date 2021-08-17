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
            <h1 class="display-4">Vegitable Items</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if(!empty($vegi)) { ?>
        <?php foreach($vegi as $items) { ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $items['image'];?>
                <img width="260" height="260" class="card-img-top" src="<?php echo base_url().'uploads/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?php echo $items['name']; ?></h4>
                        <h4 class="text-muted"><b>Rs. <?php echo $items['price']; ?></b></h4>
                    </div>
                    <p class="card-text"><?php echo $items['description']; ?></p>
                    <a href="<?php echo base_url().'Dish/addToCart/'.$items['id']; ?>" class="btn btn-primary"><i
                            class="fas fa-cart-plus"></i> Add to
                        Cart</a>
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