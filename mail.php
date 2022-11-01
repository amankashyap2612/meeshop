<?php 


$reciver ="amankashyap2312@gmail.com";
$subject ="Meesho Help Center";
$sender ="From:amankashyap2312@gmail.com";
$sender .= "MIME-Version: 1.0" . "\r\n"; 
$sender .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
// uper yha p hume yeh btana h ki content kis type k h 
$body ="<section style='width:800px; margin:auto;'>
<div style='background-color: #ff7a49a3;; height:120px; width:100%; text-align:center;'>
<h1 style='margin:0;'>Confirmation For Your Order</h1>
<p style='margin:0; font-size:12px;'>Hi Josh We've recived a request for your Order and we are working on it now.we are just want your confirmation for this order</p>
<p style='margin:0; font-size:12px;'>we'll email you and update when we've shipped it</p>
<button style='padding:6px; background: black; color: grey;  border-radius: 30px; width: 200px;
margin-top:10px;
'> View Your Order Detail</button>
</div>

<div style='  background:#80808040; '>
<h3 style='text-align: center; padding: 15px 0; font-size:20px; margin: 0;'>Items Order</h3>
<div style='    width: 50%; float: left; text-align:center; height: 160px;'>
<img src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80' style='height:150px; width:120px;'/>
</div>
<div style='    width: 50%;  float: left; height: 160px;'>
<h2>i phone6s</h2>
<p>Memory:32GB</p>
<p>Color:Space Gray</p>
<p>New iSight 12-megapixel Camera</p>
</div>
<div style='clear:both;'></div>
</div>
<div style='  background:#80808040; border-top :2px solid; padding:10px; '>
<div style='display:flex;     margin-left: 300px;    font-size: 12px;  height: 20px;'>
<h3 style=' margin:0;'>Item Price:- </h3>
<h3 style=' margin:0;    margin-left: 20px'>100</h3>
</div>
<div style='display:flex;     margin-left: 300px;'>
<h3 style=' margin:0;'>Quantity:- </h3>
<h3 style=' margin:0px;  margin-left: 28px'>5</h3>
</div>
<div style='display:flex;     margin-left: 300px;'>
<h3 style=' margin:0px;'>Total Price:- </h3>
<h3 style=' margin:0px;  margin-left: 14px'>500</h3>
</div>
</div>
<div style='clear:both;'></div>
<div style='  background:#80808040; '>
<div style='     width: 50%; float: left; text-align:center; height: 250px;'>
<h2>We're here to help</h2>
<p>Call (800) 999-9999 or <a>visit us online</a><br>
for expert association </p>
</div>
<div style='   width: 50%;  float: left; height: 250px;'>
<h2>Our Gurrantee</h2>
<p>Your satisfaction is 100% gurranted <br>
see Our <a>return Exchange policy</a></p>
</div>
<div style='clear:both;'></div>
</div
</div>

</section>";

if(mail($reciver, $subject, $body, $sender)){
echo '<script>alert("Sent Succesfully to Customer")</script>';
	
}else{
	echo"sorry failed";
}

?>