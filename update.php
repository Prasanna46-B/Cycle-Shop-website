<?php include 'connect.php';?>
          <?php

          $id=$_GET["id"];
          ?>
          <?php

if(isset($_POST["create"])){
                $first_name =$_POST["first_name"];
                $whatsapp_no=$_POST["whatsapp_no"];
                $e_mail=$_POST["e_mail"];
                $city=$_POST["city"];
                $genders=$_POST["genders"];
                $mobile_no=$_POST["mobile_no"];
                $address=$_POST["address"];
                $payment_method=$_POST["payment_method"];
                $postal_code=$_POST["postal_code"];
                $postal_code=$_POST["upload_file"];
                $country=$_POST["country"];
                $sta=$_POST["sta"];
                $order_type=$_POST["order_type"];
                $size=$_POST["size"];
                $brand=$_POST["brand"];
                $feedback=$_POST["feedback"];
                $id=$_POST["id"];


                 $sun="UPDATE reg_form SET first_name='$first_name',whatsapp_no='$whatsapp_no',e_mail='$e_mail',city='$city',genders='$genders',mobile_no='$mobile_no',address='$address',payment_method='$payment_method',postal_code='$postal_code',upload_file='$upload_file',country='$country',sta='$sta',order_type='$order_type',size='$size',brand='$brand',feedback='$feedback' WHERE id='$id'";
                      $res=mysqli_query($con,$sun);
                  if($res){
                    header ("location:create.php");
                  }
                  else{
                    echo "Please enter the data";
                  }
              }
              ?>



              
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<link rel="stylesheet" type="text/css" href="form.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Codystar&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">



	<title>FORM</title>
</head>
<body>
	<?php
	$row1=mysqli_query($con,"SELECT * FROM reg_form WHERE id='$id'");
	$col1=mysqli_fetch_array($row1);

	?>

	
<div class="container">
<div class="topic">
<p style="display: flex;text-align: center;justify-content: center;margin-top:37px;font-size:30px;font-family: 'Bungee Inline', cursive;text-shadow: 2px 2px 10px red;color: white"> REGISTRATION FORM</p>
</div>
</div>



<div class="container" id="background" style="border:2px solid transparent; background-color: transparent; border-radius:25px;width:90%;height:700px;box-shadow: 1px 1px 10px 25px;margin-top: 80px;color: black;">

  <div class="container">
  <form  method="post" action="update.php">
  	<input type="hidden" name="id" value="<?php echo $col1["id"]?>">
    <div class="row" style="display: flex;margin-top: 34px;">
     <div class="col-md-4">
    <label style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>FIRST NAME</b></label>
    <input type="text" placeholder="Enter Your name" value="<?php echo $col1["first_name"]?>" name="first_name" class="form-control" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;" >
</div>
            <div class="col-md-4">
    <label style="font-family: 'Roboto Slab', serif;color: #FFEB3B;" ><b>WHATSAPP NUMBER</b></label>
    <input type="number" placeholder="Enter Whatsapp number" value="<?php echo $col1["whatsapp_no"]?>" name="whatsapp_no" class="form-control" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>
        <div class="col-md-4">
    <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>E.MAIL</b></label>
    <input type="email" placeholder="Enter Your Mail"  value="<?php echo $col1["e_mail"]?>" name="e_mail" class="form-control" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>
</div>
<div class="row" style="display: flex;margin-top: 45px;">
      <div class="col-md-4">
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>CITY</b></label>
    <input type="text" placeholder="Enter Your City" value="<?php echo $col1["city"]?>"  name="city"   class="form-control" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>

       <div class="col-md-4" >
     <label style="font-family: 'Roboto Slab', serif;color: #FFEB3B;" ><b>GENDER</b></label>

<select  class="form-control" value="<?php echo $col1["genders"]?>" name="genders" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
      
      <?php
      if($col1["genders"] !=''){?>
      	<option value="<?php echo $col1["genders"]?>"><?php echo $col1["genders"]?></option>
      <?php }else{
      	?>
      	<option value= "--SELECT--">--SELECT--</option>
         <?php }?>


   <option value="Kids" style="font-family: 'Itim', cursive;font-size:16px;">Kids</option>
  <option value="Male" style="font-family: 'Itim', cursive;font-size:16px;">Male</option>
  <option value="Female" style="font-family: 'Itim', cursive;font-size:16px;" >Female</option>
</select>

</div>

      <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>MOBILE NUMBER</b></label>
    <input type="number" placeholder="Enter Your Number" value="<?php echo $col1["mobile_no"]?>" name="mobile_no"  class="form-control" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>
</div>
<div class="row"  style="display: flex;margin-top: 60px;">
      <div class="col-md-4">
    <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>ADDRESS</b></label>
    <textarea type="text" placeholder="Address" value="<?php echo $col1["address"]?>" class="form-control" name="address" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;"></textarea>
</div>

       <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>PAYMENT METHOD</b></label>
    <select  class="form-control" name="payment_method"  value="<?php echo $col1["payment_method"]?>" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">


      <?php
      if($col1["payment_method"] !=''){?>
      	<option value="<?php echo $col1["payment_method"]?>"><?php echo $col1["payment_method"]?></option>
      <?php }else{
      	?>
      	<option value= "--SELECT--">--SELECT--</option>
         <?php }?>



   <option value="UPI METHOD" style="font-family: 'Itim', cursive;font-size:16px;">UPI METHOD</option>
  <option value="CASH ON DELIVERY" style="font-family: 'Itim', cursive;font-size:16px;">CASH ON DELIVERY</option>

</select>
</div>

      <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>POSTAL CODE</b></label>
    <input type="number" placeholder="Enter Your Code" class="form-control" value="<?php echo $col1["postal_code"]?>" name="postal_code" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>
</div>


<div class="col-md-12" style="display: flex;margin-top: 30px;">
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>UPLOAD FILE</b></label>
    <input type="file" placeholder="UPLOAD FILE" class="form-control" value="<?php echo $col1["upload_file"]?>" name="upload_file" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>







<div class="row"  style="display: flex;margin-top: 62px;">
      <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>COUNTRY</b></label>
    <input type="text" placeholder="Enter Your country"class="form-control" value="<?php echo $col1["country"]?>" name="country" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>

 <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>STATE</b></label>
    <input type="text" placeholder="Enter Your State"class="form-control" value="<?php echo $col1["sta"]?>" name="sta" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>

      <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>ORDER TYPE</b></label>
    <select  class="form-control" value="<?php echo $col1["order_type"]?>" name="order_type" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">


      <?php
      if($col1["order_type"] !=''){?>
      	<option value="<?php echo $col1["order_type"]?>"><?php echo $col1["order_type"]?></option>
      <?php }else{
      	?>
      	<option value= "--SELECT--">--SELECT--</option>
         <?php }?>





   <option value="delivery" style="font-family: 'Itim', cursive;font-size:16px;">DELIVERY</option>
  <option value="pickup" style="font-family: 'Itim', cursive;font-size:16px;">PICK UP</option>
</select>
</div>
</div>
<div class="row" style="display: flex;margin-top: 70px;">
      <div class="col-md-4" >
     <label style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>SIZE</b></label>
    <select  class="form-control" value="<?php echo $col1["size"]?>" name="size" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">


      <?php
      if($col1["size"] !=''){?>
      	<option value="<?php echo $col1["size"]?>"><?php echo $col1["size"]?></option>
      <?php }else{
      	?>
      	<option value= "--SELECT--">--SELECT--</option>
         <?php }?>




   <option value=" S " style="font-family: 'Itim', cursive;font-size:16px;"> S </option>
  <option value=" M " style="font-family: 'Itim', cursive;font-size:16px;"> M </option>
  <option value=" L" style="font-family: 'Itim', cursive;font-size:16px;" > L </option>
  <option value=" XL" style="font-family: 'Itim', cursive;font-size:16px;" > XL </option>
</select>
  </div>
   <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>BRANDS</b></label>
    <select  class="form-control" name="brand" value="<?php echo $col1["brand"]?>" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">


      <?php
      if($col1["brand"] !=''){?>
      	<option value="<?php echo $col1["brand"]?>"><?php echo $col1["brand"]?></option>
      <?php }else{
      	?>
      	<option value= "--SELECT--">--SELECT--</option>
         <?php }?>






   <option value="Triban RC500 Shimano Sora Disc Brake Road Bike" style="font-family: 'Itim', cursive;font-size:16px;">Triban RC500 Shimano Sora Disc Brake Road Bike</option>
  <option value="Btwin Robot 500 Bike with Training Wheels" style="font-family: 'Itim', cursive;font-size:16px;"> Btwin Robot 500 Bike with Training Wheels </option>
  <option value="Btwin CBC500 Tilt 20"  style="font-family: 'Itim', cursive;font-size:16px;" >Btwin CBC500 Tilt 20 </option>
  <option value="Btwin 500 Original Bike " style="font-family: 'Itim', cursive;font-size:16px;" >Btwin 500 Original Bike </option>
  <option value="Riverside 500 Hybrid Bike 700c" style="font-family: 'Itim', cursive;font-size:16px;" > Riverside 500 Hybrid Bike 700c</option>
</select>
</div>

      <div class="col-md-4" >
     <label for="psw-repeat" style="font-family: 'Roboto Slab', serif;color: #FFEB3B;"><b>FEEDBACK</b></label>
    <input type="text" placeholder="Enter your Feedback" value="<?php echo $col1["feedback"]?>" class="form-control" name="feedback" style="font-family: 'Itim', cursive;font-size:16px; text-shadow: 2px 2px 5px #795548;">
</div>
   </div> 


 <div class="button" style="display: flex;margin-top: 67px;text-align: center;justify-content: center;">
    <button class="submit submit2" name="create" style="width: 200px;height: 36px;color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;">REGISTER</button>
</div>

</form>
</div>
</div>ss
</body>
</html>