<?php include 'connect.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>REGISTATION FORM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="form.css">
 


<style>
table,th,td{
  border: 2px solid black;
}
</style>
</head>
<body>
  <div class="container" style="margin-left: 32px;margin-top: 30px;">



                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">
                        <form method="GET" action=" ">

                        <div class="search">
                          <i class="fa fa-search" style="margin-right: 200px;"></i>
                          <input type="text" name="search" value="<?php if(isset($_GET['Search'])){echo $_GET['Search'];}?>" class="form-control" placeholder="Search data">
                          <button class="btn btn-primary" style="margin-right:100px;">Search</button>
                        </div>
                        </form>
                      </div>
                    
                      <table class="table table-striped" >
                              <thead>
                                <tr>
                                  <th style="padding: 20px;justify-content: center;">ID</th>
                                  <th style="padding: 20px;">FIRST NAME</th>
                                  <th style="padding: 20px;">WHATSAPP NO</th>
                                  <th style="padding: 10px;">EMAIL</th>
                                  <th style="padding: 20px;">CITY</th>
                                  <th style="padding: 10px;">GENDER</th>
                                  <th style="padding: 20px;">MOBILE NUMBER</th>
                                  <th style="padding: 10px;">ADDRESS</th>
                                  <th style="padding: 10px;">PAYMENT METHOD</th>
                                  <th style="padding: 10px;">POSTAL CODE</th>
                                  <th style="padding: 10px;">UPLOAD FILE</th>
                                  <th style="padding: 10px;">COUNTRY</th>
                                  <th style="padding: 10px;">STATE</th>
                                  <th style="padding: 10px;">ORDER TYPE</th>
                                  <th style="padding: 20px;">SIZE</th>
                                  <th style="padding: 16px;">BRAND</th>
                                  <th style="padding: 20px;">FEEDBACK</th>
                                </tr>
                              </thead>
                              <tbody>






<?php

                                $con = mysqli_connect("localhost","root","","form");

                                if (isset($_GET['search'])) {
                                  $id = $_GET['search'];
                                  $query = "SELECT * FROM reg_form WHERE CONCAT(first_name,whatsapp_no,e_mail,city,genders,mobile_no,address,payment_method,postal_code,upload_file,country,sta,order_type,size,brand,feedback) LIKE '%$id%' ";
                                  $query_run = mysqli_query($con,$query);

                                  if (mysqli_num_rows($query_run) > 0) 
                                  {
                                    foreach ($query_run as $items)
                                    {
                                      ?>


                                      <tr>
                                    <td><?= $items ['id']; ?></td>
                                    <td><?= $items ['first_name']; ?></td>
                                    <td><?= $items ['whatsapp_no']; ?></td>
                                    <td><?= $items ['e_mail']; ?></td>
                                    <td><?= $items ['city']; ?></td>
                                    <td><?= $items ['genders']; ?></td>
                                    <td><?= $items ['mobile_no']; ?></td>
                                    <td><?= $items ['address']; ?></td>
                                    <td><?= $items ['payment_method']; ?></td>
                                    <td><?= $items ['postal_code']; ?></td>
                                    <td><?= $items ['country']; ?></td>
                                    <td><img src="<?= $items['upload_file']; ?>" style="height: 100px;width: 100px;"></td>
                                    <td><?= $items ['sta']; ?></td>
                                    <td><?= $items ['order_type']; ?></td>
                                    <td><?= $items ['size']; ?></td>
                                    <td><?= $items ['brand']; ?></td>
                                    <td><?= $items ['feedback']; ?></td>

                                   </tr>


                                      <?php

                                    }
                                  }
                                  else
                                  {
                                    ?>


                                    <tr>
                                    <td colspan="17">No Record Found</td>
                                    </tr>



                                    <?php
                                  }
                                }
                                

                                ?>
                                
                              </tbody>
                              
                            </table>


    
<table >
  <thead>
  <tr>
    <th style="padding: 10px;">ID</th>
    <th  style="padding: 5px;">FIRST NAME</th>
    <th  style="padding: 10px;" >WHATSAPP NUMBER</th>
    <th  style="padding: 5px;">E.MAIL</th>
    <th style="padding: 10px;" >CITY</th>
    <th  style="padding: 10px;">GENDER</th>
    <th  style="padding: 10px;">MOBILE NUMBER</th>
    <th style="padding: 5px;" >ADDRESS</th>
    <th  style="padding: 10px;">PAYMENT METHOD</th>
    <th  style="padding: 10px;">POSTAL CODE</th>
    <th  style="padding: 10px;"> UPLOAD FILE</th>
    <th  style="padding: 5px;">COUNTRY</th>
    <th  style="padding: 10px;">STATE</th>
    <th  style="padding: 10px;">ORDER TYPE</th>
    <th  style="padding: 10px;">SIZE</th>
    <th  style="padding: 10px;">BRAND</th>
     <th  style="padding: 10px;">FEEDBACK</th>
     
   </tr>
 </thead>


<?php

$the = mysqli_query($con,"SELECT * FROM reg_form");
while($data = mysqli_fetch_array($the)){
?>
<tr>
<td ><?php echo $data["id"];?></td>
<td><?php echo $data["first_name"];?></td>
<td ><?php echo $data["whatsapp_no"];?></td>
<td ><?php echo $data["e_mail"];?></td>
<td ><?php echo $data["city"];?></td>
<td ><?php echo $data["genders"];?></td>
<td ><?php echo $data["mobile_no"];?></td>
<td ><?php echo $data["address"];?></td>
<td ><?php echo $data["payment_method"];?></td>
<td ><?php echo $data["postal_code"];?></td>
<td >
  <img src="<?php echo $data["upload_file"];?>" style="height: 100px;width: 100px"></td>
<td ><?php echo $data["country"];?></td>
<td ><?php echo $data["sta"];?></td>
<td ><?php echo $data["order_type"];?></td>
<td ><?php echo $data["size"];?></td>
<td ><?php echo $data["brand"];?></td>
<td><?php echo $data["feedback"];?></td>

<td >
  <button class="btn btn-primary" style="margin:5px;"><a href="update.php?id=<?php echo $data["id"];?>" style="color: white;">UPDATE</a></button></td>
  <td>
  <button class="btn btn-primary" style="margin:5px;"><a href="delete.php?id=<?php echo $data["id"];?>" style="color: white;">DELETE</a></button>
</td>
</tr>
<?php }
?>
</table>
  </div>

  
</body>
</html>