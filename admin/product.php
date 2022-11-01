<?php include 'config/form2conn.php';?>
<?php 

//category add krne ka work 
		$catsql = "select * from category";
		$catquery = mysqli_query($conn, $catsql);
//category add krne ka work end

// <--update start-->
$add=true;
$id =null;
$prow =null;
$pname=null;
$price=null;
$size=null;
$description=null;
$trimdes = null;
//	$id=$_GET['update'];
	//print_r($id);
	if(isset($_GET['update'])){
		
	$id=$_GET['update'];
	// print_r($id);
	$add=false;
	$sql="select * from product where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	// print_r($result);
	$prow=mysqli_fetch_array($result);
	$pname=$prow['Productname'];
	// print_r($pname);
	$price=$prow['Price'];
	// print_r($price);
	$size =$prow['Size'];
	// print_r($size);
	$description=$prow['Description'];
	// print_r($description);
	$trimdes = trim($description);// ckeditor update krne ke liye trim lagana h

	}
	
// <--update end -->
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('include/head.php');?>
 <style>
 .maut{  width: 500px;
    margin: auto;
    box-shadow: 5px 7px 8px 10px grey;
}
 </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
 <?php include 'include/sidebarnav.php';?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
				
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
							<div class="container">
			  <h2>Product ADD</h2>
			  <div action="table,php">
  
<!--category ke option add krne ka work-->
				<div class="col">
					<label for="name" class="mr-sm-2"> select category</label>
					<select id="cat" class="form-control">
						<option value=""><--select category --></option>
							<?php
								while($row = mysqli_fetch_array($catquery)){
									?>
										<option value=" <?php echo $row['id']; ?>"><?php echo $row ['name'] ;?>
										</option>
										
									<?php
								}
							
							
							?>
					</select>
				</div>
				
<!--category ke option add krne ka work end-->				
				<div class="form-group row">
				  <div class="col-6">
				  
						  <label for="email">Product Image:</label>
						  
						  <input type="file" class="form-control" id="pimage" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp ">
						  <input type="hidden" class="form-control" id="hideimage" placeholder="Image" name="">
						  <div class="uploadprev" id="uploadimg">
							<img src="img/default.jpg" id="image1" />
						  </div>
				  </div>
				  <div class="col-6">
							<label for="email">Detail Image:</label>
							<input type="file" class="form-control" id="dimage" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp">
							<input type="hidden" class="form-control" id=			"hideimage2" placeholder="Image" name="">
						  <div class="uploadprev" id="uploadimg2">
							<img src="img/default.jpg" id="image2" />
						  </div>
				  </div>
				  
				  
				</div>
				<div class="form-group">
				  <label for="email">Product Name:</label>
				  <input type="Name" class="form-control" id="pname" value="<?php echo $pname ?>" placeholder="Enter Name" name="email">
				</div>
				<div class="form-group">
				  <label for="email">Product Price:</label>
				  <input type="text" class="form-control" id="pprice" value="<?php echo $price ?>" placeholder="Enter email" name="email">
				</div>
				<div class="form-group">
				  <label >Product Size:</label>
				  <input type="text" class="form-control" id="psize" value="<?php echo $size?>" placeholder="Enter Size" >
				</div>
				<div class="form-group">
				  <label >Product Description:</label>
				  <input type="text" class="form-control" id="pdescription"  value="<?php echo $description?>"placeholder="Description" >
				</div>
				
				<div class="form-group form-check">
				  <label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember"> Remember me
				  </label>
				</div>
				<?php if($add){
					?>
					<button type="submit" id="psubmit"class="btn btn-primary">Submit</button>
					<?php
				}else{
					?>
					<button type="submit" id="pedit"class="btn btn-primary"onclick="return confirm('Are you sure you want to Update?')">Update</button>
					
					<?php
				}?>
				
			  </div>
			</div>
              <h6>Projects table</h6>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
 
  <!--   Core JS Files   -->
  <!--script-->
<?php include('include/script.php');?>
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<?php include('include/footer.php');?>
<!-- script-->
<script>
//ck editor work
CKEDITOR.replace('pdescription');
CKEDITOR.instances['pdescription'].setData("<?php echo $trimdes;?>");
	// <--insert start to product add data-- -->
	
	$(document).ready(function(){
		
		$("#uploadimg").click(function(){
			$("#pimage").click();
		});
		
		$("#pimage").change(function(){
			var file = $(this)[0].files[0];
			var filename = $("#hideimage").val();
			var fd = new FormData();  
			fd.append("T_photo",file);
			fd.append("T_photoname",filename);
			
			$.ajax({
				 url:"ajax/uploadimage.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res){
					$("#hideimage").val(res);
					$("#image1").attr("src", "");
					$("#image1").attr("src", "img/userphoto/"+res);
				 }
		   });
		})
		
		
		
		
		
		$("#uploadimg2").click(function(){
			$("#dimage").click();
		});
		
		$("#dimage").change(function(){
			var file = $(this)[0].files[0];
			var filename = $("#hideimage2").val();
			var fd = new FormData();  
			fd.append("T_photo",file);
			fd.append("T_photoname",filename);
			
			$.ajax({
				 url:"ajax/uploadlistimage.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res){
					$("#hideimage2").val(res);
					$("#image2").attr("src", "");
					$("#image2").attr("src", "img/userphoto/"+res);
				 }
		   });
		})
		
		
		
		$("#psubmit").click(function(){
		
			var name =$("#pname").val();
			var price =$("#pprice").val();
			var size =$("#psize").val();
			var cat =$("#cat").val();
			var description = CKEDITOR.instances["pdescription"].getData();
			var imagename = $("#hideimage").val();
			var photo = $("#pimage")[0].files[0];//image k lie
		
			var dphoto = $("#dimage")[0].files[0];//detail image k lie
			console.log(imagename);
			
			
			
			var fd = new FormData();    
			
			fd.append("T_photo",photo);// image k lie
			fd.append("T_dphoto",dphoto);//detail image k lie
			fd.append("T_name",name);
			fd.append("T_price",price);
			fd.append("T_size",size);
			fd.append("T_description",description);
			fd.append("T_cat",cat);
			
			console.log(fd);
		
		// var obj={
			// //T_id:id
			// T_name:name,
			// T_price:price,
			// T_size:size,
			// T_description:description
			
		// }
		// console.log(obj);
		
		
		 $.ajax({
				 url:"ajax/service.php",
				 type:"POST",
				data:fd,
				processData:false,
				contentType:false,
				 success:function(res){
						$("#pname").val('');
						$("#pimage").val('');
						$("#dimage").val('');
						$("#psize").val('');
						$("#pprice").val('');
						$("#pdescription").val('');
						window.location.href = 'table.php';
			}
		 });
		
		});
		
	// <--insert end to product data -->
	
	
	//ck editor work
CKEDITOR.replace('pdescription');
	// <--update start -->
		$("#pedit").click(function(){
			var id="<?php echo $id?>";
			var name=$("#pname").val();
			var price=$("#pprice").val();
			var size=$("#psize").val();
			var description = CKEDITOR.instances["pdescription"].getData();
				console.log(id);
				
			  //console.log(name);
			 // console.log(price);
			// console.log(size);
			 // console.log(description);
			
			var obj={
				T_id:id,
				T_name:name,
				T_price:price,
				T_size:size,
				T_description:description	
			}
			$.ajax({
				url:"ajax/update.php",
				type:"POST",
				data:obj,
				success:function(resp){
					console.log(resp);
					window.location.href = 'table.php';
				}
			})
		});
	
	});
	
	
	// <--update end -->
</script>
</body>


</html>