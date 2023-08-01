<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $reference = $_POST['reference'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $current_datetime = date('Y-m-d H:i:s');

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `reference` ,`phone`, `email`, `created_at`) VALUES (NULL,'$first_name','$last_name','$reference', '$phone','$email','$current_datetime')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: add-new.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>RK Enterprise</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="Backg.png" alt="" width="1300" height="200" >
        </a>
      </div>
</nav>


   <div class="container">
      <div class="text-center mb-4">
         <h3>Customer Registration</h3>
         <p class="text-muted">Complete the form below to add a new customer</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input required type="text" class="form-control" name="first_name" placeholder="">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input required type="text" class="form-control" name="last_name" placeholder="">
               </div>
               <div class="col">
                  <label class="form-label">Reference:</label>
                  <input type="text" class="form-control" name="reference" placeholder="">
               </div>
            </div>

           
               <div class="mb-4">
                  <label class="form-label">Phone Number:</label>
                  <input required type="phone" class="form-control" name="phone" placeholder="" minlength = "10" maxlength="10" pattern="\d{10}">
               </div>

               <div class="mb-4">
                  <label class="form-label">Email:</label>
                  <input  type="email" class="form-control" name="email" placeholder="" >
               </div>
            

            

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger" style="float: right">Cancel</a>
               <a href="add-new.php" class="btn btn-primary" style="float: right;margin-right:5px">Show Data</a>
            </div>
         </form>
      </div>
   </div>
   <div class="text-center mb-4" style="margin-top:100px">
       <h4 >
       <a href="https://maps.app.goo.gl/vYZSb3FaN5yfwxjdA">Address</a>
       </h4>
       <p class="text-muted" >FF103, Shivalik Arcade, Beside Camps Corner 2, Near Pralhad Nagar Garden, Anand Nagar Road, Satellite Ahmedabad, Gujarat 380015.</p>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>