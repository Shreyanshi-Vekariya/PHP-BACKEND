    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
        <style>
        .table {
            margin: auto;
            border: 1px solid transparent;
            border-radius: 0px;
            box-shadow: 0 0 20px black;
        }
        table td, table th {
            padding: 10px;
        }
        a{
            text-decoration:none;
            border:1px solid #000000;
            padding:5px 15px 5px 15px;
            color:#ffffff;
            background-color: black;
            border-radius: 0px;
            font-weight:bold;
        }
        a:hover{
            box-shadow: 0 0 15px blue;
            color:#ffffff;
        }
        h5{
            
        }
        </style>
    </head>
    <body>
        
    <table class="table w-50">
    <thead>
       
        
            <div class="container text-end mt-5">
            <a href="dashboard.php">Back</a>
                <a href="Logout.php">LOGOUT</a>
            </div>

            
            
            
            
            <div class="text-center my-5"><h2>View Categories</h2></div>
            
      <tr>
        <th scope="col">Category_ID</th>
        <th scope="col">Category_NAME</th>
        
        <th scope="col" colspan='2'>ACTION</th>
      </tr>
    </thead>
  

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=" Bootstrap/js/jquery.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
<?php

session_start();
include 'connection.php';

if($_SESSION['email']==''){
header('Location:Login.php');
}
    $sql="select * from categories";

    $query=mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($query)){
        $sid=$row['c_id'];
        echo "<tr>";
        echo "<td>".$sid."</td>";
        echo "<td>".$row['c_name']."</td>";
        echo "<td><a href=updatecat.php?sid=$sid >Edit</a></td>";
        echo "<td><a href=deletcat.php?sid=$sid >Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($con);



?>    
    
