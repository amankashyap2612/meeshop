<?php
include 'admin/config/form2conn.php';

?> 


<!DOCTYPE html>

<html lang="en">
<head>
	  <title>Online Shopping Site For Fashion</title>
	    <link rel = "icon" href = 
"image/logom.jpg" 
        type = "image/x-icon"/>
	<?php include 'include/head.php';?>
	  <link
    rel="stylesheet"
    href="css/animate.min.css"
  />
	</head>
<body>

	<?php include 'include/nav.php';?>
	<?php include 'include/nav2.php';?>

<section class="m3  ">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-0 ">
				<div class="coll down ">
					<h1>Biggest sales Of the Year </h1>
					<h1>Best Quality Shopping</h1>
					<div class="bgw">
						<h6>Sale of the Year will be start in </h6>
					</div>
					<button id="demo"><?php   ?></button>
					
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div>
					<img src="image/mpl.webp"  class="anmate"/>
				</div>
			</div>
		</div>
	</div>
</section>


<!--<section class="m3 annmate ">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-0 ">
				<div class="coll down ">
					<h1>Lowest Prices</h1>
					<h1>Best Quality Shopping</h1>
					<div class="bgw">
						<h6>25+ Crores worth Rewards | 500 Winners every Hour</h6>
					</div>
					<button>Download the Meesho App</button>
					
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div>
					<img src="image/off.jpg"  class=""/>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="mmb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h1>Top Categories to choose from</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="">
	<div class="container">
		<div class=" back4">
			<div class="d-flex">
				<div  class="west2">
					<img src="image/women.jpg"/>
				</div>
				<div class="west">
					<img src="image/men.jpg"/>
				</div>
				<div class="west">
					<img src="image/kids.jpg"/>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="">
	<div class="container">
		<div class="position-relative back">
			<div class="row">
				<div class="col-md-4 p-0">
				</div>
				<div class="col-md-8 d-flex p-0">
					<div class="sofa">
						<img src="image/beauty.jpg"/>
						<img src="image/16.png"/>
					</div>
					<div class="sofa">
						<img src="image/electronic.jpg"/>
						<img src="image/80.png"/>
					</div>
					<div class="sofa">
						<img src="image/speaker.jpg"/>
						<img src="image/88.png"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="">
	<div class="container">
		<div class="position-relative back3">
			<div class="row">
				<div class="col-md-4 p-0">
					<div class="text-center position-relative">
						<div class="home">
							<h1>Homecare</h1>
							<button>VIEW ALL</button>
						</div>
					</div>
				</div>
				<div class="col-md-8 d-flex p-0">
					<div class="sofa">
						<img src="image/sofa.png"/>
						<button>Bedsheets</button>
					</div>
					<div class="sofa">
						<img src="image/cooker.png"/>
						<button>Kitchenware</button>
					</div>
					<div class="sofa">
						<img src="image/carpet.png"/>
						<button>Carpets</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="">
	<div class="container back2">
		<div class="row">
			<div class="col-md-4 ">
				<div class="text-center">
					
				</div>
			</div>
			<div class="col-md-8 pp">
				<div class="text-right become">
					<h4>Become a Reseller and</h4>
					<h3>Start your Online Business<br>
with Zero Investment</h3>
					<button type="button" class="btn btn-dark"><img src="image/google.png" class="sev"/></button>
					<button type="button" class="btn btn-dark"><img src="image/app.png" class="sev"/></button>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container supply webdesigntuts-workshop">
		<div class="col-md-9">
			<div class="text-white register">
				<h2>Register as a Meesho Supplier</h2>
				<p>Sell your products to crores of customers at 0% commission</p>
				<li>Grow your business 10x</li>
				<li>Enjoy 100% Profit</li>
				<li>Sell all over India</li>
			</div>
				<button type="button" class="btn bg-white pinnk">Sign up Now</button>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</section>

<section class="for">
	<div class="container">
		<div>
			<h1>Product For You</h1>
		</div>
	</div>
</section>

<!--products list-->

<?php

include 'include/product-list.php';

?>


<!--products list-->

<!--contact us-->
<?php
include 'include/contactus.php';
?>

<!--contact us-->
<!--foot-->
<?php include 'include/foot.php';?>
<!--foot-->

<!--script-->
	<?php include 'include/footer.php';?>
<!--script-->
<script>
var dest = new Date("december 25 ,2022 23:59:").getTime();

var x = setInterval(function(){


var now = new Date().getTime();

var diff =dest - now;
// console.log(diff);

var days = Math.floor(diff/(1000*60*60*24));
// console.log(days);
var hours = Math.floor((diff%(1000*60*60*24))/(1000*60*60));
// console.log(hours)

var minutes = Math.floor((diff%(1000*60*60))/(1000*60));
// console.log(minutes)

var seconds = Math.floor((diff %(1000*60))/ 1000);
// console.log(seconds)

document.getElementById("demo").innerHTML =days +"Days   "+ hours +"hours :    " +minutes +"minutes :   " +seconds +"seconds  "

},1000);

</script>

</body>
</html>
