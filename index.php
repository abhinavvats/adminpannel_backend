<?php
include'./db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./dataTable.css">
    <script src="./jquery-2.2.4.min.js"></script>
    <script src="./dataTable.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">

            <div class="sidebar-header">
                <h3>Admin Pannel</h3>
            </div>
            <ul class="lisst-unstyled components">

                <p>Krash It Services</p>
                <li class="active">
                    <ul class="lisst-unstyled components">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                <li><a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Vendors</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">

                        <li>
                            <a href="#">Lorem, ipsum.
                            </a>
                        </li>
                        <li>
                            <a href="#">Lorem, ipsum.</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Buyer</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Buyer 1</a>
                        </li>
                        <li>
                            <a href="#">Buyer 2</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Policy</a>
                </li>

                <li>
                    <a href="#">Contact Us</a>
                </li>

            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>
                            Toggle Sidebar
                        </span>

                    </button>
                </div>
            </nav>
            <br><br>
            <h2>Dashboard</h2>
            <div class="vendor-buyer">
                <div class="image">
                    <img src="./market-store.svg" alt="" srcset="">
                    <h2 class="text-success text-center">Total Vendor</h2>
                </div>
                <div class="image">
                    <img src="./client.png" alt="" srcset="">
                    <h2 class="text-success text-center">Total Buyer</h2>
                </div>
            </div>
            <div class="line">

            </div>
            <div class="container">
                
                   <a class="btn-btn-primary" href="create.php"> <button class="btn btn-primary"> ADD VENDOR +</button></a> 
                
                <!-- Modal -->

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">S.NO</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Location</th>
                            <th colspan="2" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
$sql =  "SELECT * FROM `vendor` ";

$result = mysqli_query($conn,$sql);
// var_dump($result);
// exit();
$number=1;
while($row=mysqli_fetch_assoc($result)){
    // var_dump($row);

    // exit();
$id=$row['id'];
$name=$row['name'];
$phone=$row['phone'];
$location=$row['location'];
// echo $name,$email,$id;

    echo '
    <tr>
    <td>'.$number.'</td>
    <td>'.$name.'</td>
    <td>'.$phone.'</td>
    <td>'.$location.'</td>
    <td><a href="" class="btn btn-success">Edit</a></td>
    <td><a href="" class="btn btn-danger">Delete</a></td>
    
  </tr>';
  $number++;
}
    
?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>






    <!-- 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>