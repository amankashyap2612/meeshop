<?php 
	include '../config/form2conn.php';
	//profile photo work
	$photo = $_FILES['T_photo']; //khali image k lie 
	$temp = $photo['tmp_name'];
	//khali image k lie 
	$date = date('y-m-d-H-i-s');
	//echo $date;
	$filename = $date."photo.jpg";
	//print_r($filename);
	move_uploaded_file($temp, '../img/userphoto/'.$filename);
	
	//profile photo end
	
	//detail photo work
	$dphoto = $_FILES['T_dphoto'];//detail photo k lie
		$temp1 = $dphoto['tmp_name'];
	$date1 =rand(1,100000);
	//echo $date;
	$filename1 = $date1."dphoto.jpg";
	
	move_uploaded_file($temp1, '../img/duserphoto/'.$filename1);
	print_r($filename1);
	
	//detail photo end
	
	$name =$_POST['T_name'];
	$price =$_POST['T_price'];
	$size =$_POST['T_size'];
	$description =$_POST['T_description'];
	$cat_id =$_POST['T_cat'];
	
	// print_r($dphoto);
	// print_r($photo);
	// print_r($name);
	// print_r($price);
	// print_r($size);
	// print_r($description);
	// print_r($temp);
	//print_r($photo)
	

	
// yeh query chalayi yha pr
	
	 $sql ="insert into product (id,image,dimage,Productname,Price,Size,Description,cat_id)values('','".$filename."','".$filename1."','".$name."','".$price."','".$size."','".$description."','".$cat_id."')";

// query end

 $query = mysqli_query($conn, $sql);
	 print_r($query);




?>