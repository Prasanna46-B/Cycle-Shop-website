<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
     <title> </title>
	<link rel="stylesheet" type="text/css" href="search.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	 
	 <div class="container">

                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">
                        <form method="GET" action="">

                        <div class="search">
                          <i class="fa fa-search"></i>
                          <input type="text" name="search" value="<?php if(isset($_GET['Search'])){echo $_GET['Search'];}?>" class="form-control" placeholder="Search data">
                          <button class="btn btn-primary">Search</button>
                        </div>
                        </form>
                      </div>


                      <div class="col-md-12">
                        <div class="card mt-4">
                          <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>FIRST NAME</th>
                                  <th>WHATSAPP NO</th>
                                  <th>EMAIL</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                      <?php

                                $con = mysqli_connect("localhost","root","","form");

                                if (isset($_GET['search'])) {
                                  $id = $_GET['search'];
                                  $query = "SELECT * FROM reg_form WHERE CONCAT(first_name,whatsapp_no,email) LIKE '%$id%' ";
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
                                    <td><?= $items ['email']; ?></td>
                                    </tr>


                                      <?php

                                    }
                                  }
                                  else
                                  {
                                    ?>


                                    <tr>
                                    <td colspan="4">No Record Found</td>
                                    </tr>



                                    <?php
                                  }
                                }
                                

                                ?>
                                
                              </tbody>
                              
                            </table>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                </div>


















</body>
</html>
