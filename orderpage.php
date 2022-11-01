<?php include 'admin/config/form2conn.php';
 

//user ki detail lane ke liye work start

	if(isset($_SESSION['token'])){
		$userid = $_SESSION['token'];
		$userdata = "select * from user where id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		//print_r($userinfo['name']);
	}
//user ki detail lane ke liye work end


$order_id =$_GET['order'];  //<-- yeh detail page ke buy now button p di thi id
$order ="select * from product where id ='".$order_id."' ";

$query =mysqli_query($conn,$order);
$array = mysqli_fetch_array($query);


$user ="select * from user";

$usquery =mysqli_query($conn,$order);
$userarray = mysqli_fetch_array($query);




?>

<!DOCTYPE html>

<html lang="en">
<head>
	  <title>Online Shopping Site For Fashion</title>
	    <link rel = "icon" href = 
"image/logom.jpg" 
        type = "image/x-icon">
	<?php include 'include/head.php';?>
	  <link
    rel="stylesheet"
    href="css/animate.min.css"
  />
	</head>
<body>

	<?php include 'include/nav.php';?>


		<div class="container">
			<div class="top border p-3 shadow mt-5 pt-4" >
				<div class="border border mb-3">
					<div class="d-flex justify-content-between p-3 border border-top-0 border-left-0 border-right-0">
						<div class="p-2 px-4 bg-primary text-light">Shopping cart</div>
						<div class="p-2 px-4 border"><i class="fas fa-map-marker-alt pr-3"></i>Track</div>
					</div>
					<div class="">
						<div class="d-flex m-2" id="opc">
							<figure class="snip1401">
							  <img src="admin/img/userphoto/<?php echo $array['image'];?>" />
							  <figcaption>
								<h4><?php echo $array['Productname'];?></h4>
							  </figcaption>
							</figure>


							<div class="p-2  flex-fill">
								<div class="d-flex mb-3">
									<div class="p-2 flex-fill">
										<h5 class="text-center">Price</h5>
										<h5 type="text" id="Price"  class=" my-1 form-control border text-center box py-2" ><?php echo $array['Price'] ?></h5>
									</div>
									<div class="mt-5 plus-minus-input flex-fill">
										<div class="d-flex">
											<div class="input-group-button">
												<button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
												  <i class="fa fa-minus" aria-hidden="true"></i>
												</button>
											</div>
											  <input id="quantityfield" class="input-group-field" type="number" name="quantity" value="1">
											<div class="input-group-button">
												<button type="button" class="button hollow circle" data-quantity="plus" data-field	="quantity">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="p-2 flex-fill">
										<h5 class="text-center">Total price</h5>
										<input type="text" id="Total" class=" " value="<?php echo $array['Price'];?>" ></input>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-between p-1 border border-bottom-0 border-left-0 border-right-0">
						<div class="p-1 px-4 ">
							<input type="text" id="address" class=" my-1 form-control border text-center box py-2" value="" placeholder="Place Address" >
							<img src="image/loader.gif" style="display:;
							    width: 150px; height: 127px; display:none ;  position: absolute; top: 500px;  margin: auto; left: 0;  right: 0; bottom: 0; filter: brightness(130%);" id="show"/></input>
						</div>
							
						
							<div class="py-2 m-2 px-4 bg-success text-light rounded-lg" type="button" id="buy" >Buy Now</div>
						
						
						
						
					</div>
				</div>
			</div>
		</div>



		
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/sweetalert.min.js"></script>
<script>
   $(document).ready(function(){
  $("#buy").click(function(){
 
  })
});

</script>

<script>
		/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

		</script>
<script>
			$(document).ready(function(){
				$("#buy").click(function(){
					var product ="<?php echo $array['Productname']?>";
					var pr ="<?php echo $array['Price']?>";
					var product_id ="<?php echo $array['id']?>";
					var user_id="<?php echo $userinfo['id']?>";
					var user_name="<?php echo $userinfo['name']?>";
					var totall =$("#Total").val();
					var quantity =$("#quantityfield").val();
					
					
					
					var obj ={
						T_product:product,
						T_pid:product_id,
						T_user:user_id,
						T_name:user_name,
						T_total:totall,
						T_pr:pr,
						T_quantity:quantity
					}
					
					$("#show").show();
					
					$("#opc").addClass("opty");
					
					$.ajax({
						url:"admin/ajax/buy.php",
						type:"POST",
						data:obj,
						success:function(resp){
							if (resp == 1){
								  $("#show").hide();
								  
								  $("#opc").removeClass("opty");
								  swal({
            title: "Thank You for Use Meesho!",
            text: "U Can See Your Order In My Order!!",
            icon: "success",
            button: "Ok",
            timer: 10000
        })

		
								}
						}
					})
				
				});
			});
			
				function quantityfunc(currentvalue){
					var quantity = currentvalue;
					var price = "<?php echo $array['Price'] ?>";
					var total = (quantity * price);
					var totalprice = $("#Total").val(total);
					
					console.log(total);
					console.log(quantity);
					console.log(price);
					console.log(totalprice);
				}
		
	
	
	jQuery(document).ready(function(){
				
	
	// This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
			quantityfunc(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
			quantityfunc(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});


		</script>
		
		
	</body>
</html>