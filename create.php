<?php
include './db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  echo  $name1 = $_POST['name'];
  echo  $phone = $_POST['phone'];
  echo  $location = $_POST['location'];
  
  $sql = "INSERT INTO `vendor` (`name`, `location`, `phone`) VALUES ('$name1', '$location', '$phone')";
  
  $result = mysqli_query($conn, $sql);
//   var_dump($sql);
//   exit();

    header("location:./index.php");
}
?>
<div class="container">
    <h1 class="text-center text-success">Add Vendor</h1>
    <form method="POST" action="./create.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
            <input type="text" class="form-control" name="location" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">phone</label>
            <input type="phone" class="form-control" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>