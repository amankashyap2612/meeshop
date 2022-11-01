<?php

include 'admin/config/form2conn.php';

// nav me category add karwane ka kaam 
$sql ="select*from category";

$query =mysqli_query($conn, $sql);
// print_r($query);
// $pquery = mysqli_fetch_array($query);


// nav me category add karwane ka kaam end




?><section class="ctsus2">
	<div class="container-fluid p-0">	
	<div class="navv ">			
  <ul class="navbar\-nav">
	<?php 
	while($pquery = mysqli_fetch_array($query)){
	?>
	 <li class="nav-item">
      <a class="nav-link active
	  "href="list_page.php?cid=<?php echo $pquery['id'];?>"><?php echo $pquery['name'];?></a>
    </li>
	
	<?php
	}
?> 
  </ul>
	</div>
		</div>
</section>