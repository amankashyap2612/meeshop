<?php include 'config/form2conn.php'; 

// <--update start -->
$add=true;
$id =null;
$prow =null;
$name=null;
$status=null;
$date=null;
//	$id=$_GET['update'];
	//print_r($id);
	if(isset($_GET['update'])){
		
	$id=$_GET['update'];
	// print_r($id);
	$add=false;
	$sql="select * from category where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	// print_r($result);
	$prow=mysqli_fetch_array($result);
	$name=$prow['name'];
	$status =$prow['status'];
	$date =$prow['createddate'];

	}
	
// <--update end -->
?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'include/head.php';?>
<body>
<section class="update">
<div action="/action_page.php" class="needs-validation form light" novalidate>
    <div class="form-group" >
      <label for="uname">Category Name</label>
      <input type="text" class="form-control"   id="pname"  value="<?php echo $name ?>" placeholder="Category" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Status:</label>
      <input type="text" class="form-control"   id="pstatus"  value="<?php echo $status ?>" placeholder="Enter Status"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	<div class="form-group">
      <label for="uname">Date:</label>
      <input type="Date" class="form-control"   id="pdate"  value="<?php echo $date ?>" placeholder="Enter Status"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
 	<?php if($add){
					?>
					<button type="submit" id="submit"class="btn btn-primary">Submit</button>
					<?php
				}else{
					?>
					<button type="submit" id="update" class="btn btn-primary" onclick="return confirm('Are you sure you want to Update?')">Update</button>
					
					<?php
				}?>
   </div>
   
  </div>
</section>



	<?php include 'include/footer.php';?>	
<script>
	// <--insert start -->
	$(document).ready(function(){
		 $("#submit").click(function(){
			var name =$("#pname").val();
			var status = $('#pstatus').val();
			var date = $('#pdate').val();
		 
		var obj={
			 T_name :name,
			 T_status :status, 
			 T_date : date }
			 
			 console.log(obj);
			
			$.ajax({
				url:"ajax/catservice.php",
				type:"POST",
				data:obj,
				success:function(resp){
					console.log(resp);
					if(resp == 1){
						window.location.href = 'category.php';
					}
				}
			})
		});
		
		// <--insert end -->
		
		// <--update start -->
			$("#update").click(function(){
			var id="<?php echo $id?>";
			var name =$("#pname").val();
			var status = $('#pstatus').val();
			var date = $('#pdate').val();
		 
		var obj={
			 T_id:id,
			 T_name :name,
			 T_status :status, 
			 T_date : date }
			 
			 console.log(obj);
			
			$.ajax({
				url:"ajax/cat_update.php",
				type:"POST",
				data:obj,
				success:function(resp){
					console.log(resp);
					if(resp == 1){
						window.location.href = 'cat_table.php';
					}
				}
			})
		});
	});
		 // <--update  end -->






</script>
</body>
</html>
