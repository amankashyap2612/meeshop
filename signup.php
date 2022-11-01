<!DOCTYPE html>
<html lang="en">
<title>Online Shopping Site For Fashion</title>
	    <link rel = "icon" href = 
"image/logom.jpg" 
        type = "image/x-icon">
 <title>Signup</title>
	<?php include 'include/head.php';?>
	
  <link rel="stylesheet" href="css/signup.css">
<body class="">
	<?php include 'include/nav.php';?>


<section class="body">
	<div class="">
		<div class="mauto">
			<div class="banner">
				<img src="image/banner.jpg"/>
			</div>
			<div class="sign">
				<h5>Sign Up to view your profile</h5>
				<div class="container">
				  <div action="" class="was-validated">
					<div class="form-group">
					  <label for="uname"> Mobile:</label>
					  <input type="text" class="form-control" id="umobile" placeholder="Enter Mobile" name="uname" required maxlength="10" pattern="[0-9]{10}" >
					  <div class="valid-feedback">Valid.</div>
					  <div class="invalid-feedback" >Please fill out this field.</div>
					  <div id="mob" ></div>
					</div>
					 <div class="form-group">
					  <label for="uname"> Email:</label>
					  <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="" required>
					  <div class="valid-feedback">Valid.</div>
					  <div class="invalid-feedback" id="eml">Please fill out this field.</div>
					  <div id="eml"></div>
					</div>
					<button type="submit" class="btn btn-primary" id="sign">Submit</button>
					<div>
						<a style="font-size:15px; margin-top:15px; " href="#" id="register">Not Register ? Register Here</a>
						<p style=" font-size:12px; text-align:center; margin:15px 0;">By continuing, you agree to Meesho’s <br><span style ="color:rgb(244, 51, 151);  font-size:12px;">Terms & Conditions</span>and<span style ="color:rgb(244, 51, 151); font-size:12px;">Privacy Policy</span></p>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="body regform" id="shw">
	<div class="">
		<div class="mauto">
			<div class="banner">
				<img src="image/banner.jpg"/>
			</div>
			<div class="sign">
				<h5>Sign Up to view your profile</h5>
<div class="container">
  <div action="" class="was-validated">
    <div class="row">
   <div class="form-group col-6">
      <label for="uname"> Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="uname" required  >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback" >Please fill out this field.</div>
      <div id="mob" ></div>
    </div>
	<div class="form-group col-6">
      <label for="uemail"> email</label>
      <input type="" class="form-control" id="email" placeholder="Enter email" name="" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback" id="eml">Please fill out this field.</div>
      <div id="eml"></div>
    </div>
   </div>
	 
		<div class="form-group">
      <label for="umobile"> mobile</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="uname" required maxlength="10" pattern="[0-9]{10}" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback" >Please fill out this field.</div>
      <div id="mob" ></div>
    </div>
		<div class="form-group">
      <label for="uname"> Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="uname" required >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback" >Please fill out this field.</div>
      <div id="mob" ></div>
    </div>
	<div class="form-group">
      <label for="uname"> Password:</label>
      <input type="text" class="form-control" id="pass" placeholder="Enter Password" name="uname" required maxlength="10"  >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback" >Please fill out this field.</div>
      <div id="mob" ></div>
    </div>
   
    <button type="submit" class="btn btn-primary" id="click">Submit</button>
	<p style=" font-size:12px; text-align:center; margin:15px 0;">By continuing, you agree to Meesho’s <br><span style ="color:rgb(244, 51, 151);  font-size:12px;">Terms & Conditions</span>and<span style ="color:rgb(244, 51, 151); font-size:12px;">Privacy Policy</span></p>
  </div>
  
</div>
	
			</div>
		</div>
	</div>
</section>




<div class="dg">
	<img src="image/dbb.gif" id="dgb"/>
</div>

	<?php include 'include/footer.php';?>
	
	
	
<script>
	$(document).ready(function(){
		$("#register").click(function(){
			$("#shw").show();
		});
		
		
		$("#click").click(function(){
			
			var email = $("#email").val();
			var mobile = $("#mobile").val();
			var name = $("#name").val();
			var address = $("#address").val();
			var pass = $("#pass").val();
			
			 console.log(email);
			 console.log(name);
			 console.log(address);
			 console.log(pass);
			 console.log(mobile);
			
			
			var obj={
				T_email:email,
				T_mobile:mobile,
				T_name:name,
				T_address:address,
				T_pass:pass,
			
		}
			 console.log(obj);
			
			 $.ajax({
				 url:"admin/ajax/signservice.php",
				 type:"POST",
				  data:obj,
				success:function(res){
						if(res == 1){
						window.history.go(-1);
					}
				}
			});
		});
		
		
		$("#sign").click(function(){
			
			var mobile =$("#umobile").val();
			var email =$("#uemail").val();
			
			// console.log(email);
			// console.log(mobile);
			
			var obj={
				T_email:email,
				T_mobile:mobile,
				
			}
			
			// console.log(obj);
			
			
			$.ajax({
				
				url:"admin/ajax/signsessionajax.php",
				type:'POST',
				data:obj,
				success:function(resp){
					if(resp == 1){
						window.history.go(-1);
					 }
				}
			})
			
				
				
		});
		
		
		
		
		
	});
</script>	
</body>
</html>
