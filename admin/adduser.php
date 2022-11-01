<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('include/head.php');?>
 <link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="" rel="dofollow">Login As New User</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
				<div class="row">
					<div class="col-6 p-0">
					<span class="padding-bottom--15 lgn">Login  to create your account</span>
					</div>
					
				</div>
			 <div action="usertable.php" class="was-validated">
				  <div class="form-group">
					<label for="uname">Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter username" name="uname" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				  </div>
				  <div class="form-group">
					<label for="uname">Email:</label>
					<input type="text" class="form-control" id="email" placeholder="Enter Email" name="uname" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				  </div>
				  <div class="form-group">
					<label for="uname">Mobile:</label>
					<input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="uname" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				  </div>
				  <div class="form-group">
					<label for="uname">Address:</label>
					<input type="text" class="form-control" id="address" placeholder="Enter Address" name="uname" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password"  minlength="5" required class="form-control" id="password" placeholder="Enter password" name="pswd" >
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				  </div>
				  <div class="form-group form-check">
					<label class="form-check-label">
					  <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
					  <div class="valid-feedback">Valid.</div>
					  <div class="invalid-feedback">Check this checkbox to continue.</div>
					</label>
				  </div>
				  <button type="submit" class="btn btn-primary"  id="submit">Submit</button>
				</div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
<?php include('include/script.php');?>
<?php include('include/footer.php');?>
<!-- script-->

<script>

	// <--insert start -->
	$(document).ready(function(){
		$("#submit").click(function(){
			var name=$("#name").val();
			var email =$("#email").val();
			var mobile =$("#mobile").val();
			var address =$("#address").val();
			var password =$("#password").val();
			
			 // console.log(name);
			  // console.log(email);
			   // console.log(mobile);
			    // console.log(address);
				 // console.log(password);
			
			var obj={
				  T_name :name,
				  T_email :email,
				  T_mobile :mobile,
				  T_address :address,
				  T_password :password
			  }
			  
			     console.log(obj);
				
				
				
			  $.ajax({
				url:"ajax/service.php",
				type:"POST",
				data:obj,
				success:function(resp){
					if(resp == 1){
						window.location.href = 'usertable.php';
					}
				}
			})
			  
			
			
		});
		
		
	});
	
	// <--insert end -->
</script>






</body>

</html>