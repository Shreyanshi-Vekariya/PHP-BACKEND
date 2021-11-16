    
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
                <a href="Logout.php">LOGOUT</a>
            </div>
            
            
            
            <div class="text-center my-5"><h2>View Products</h2></div>
            
      
      <tr>
        <th scope="col">P_ID</th>
        <th scope="col">P_Image</th>
        <th scope="col">P_NAME</th>
        <th scope="col">P_Price</th>
        <th scope="col">P_Desc.</th>
        <th scope="col">P_Category</th>
        
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


include 'connection.php';
session_start();

if($_SESSION['email']==''){
    header('Location:login.php');
}
else{
    $email=$_SESSION['email'];
    $query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die("error in query");
    
    $row1=mysqli_fetch_array($query1);
        echo "<center><h5>Welcome ".$row1['a_name']."</h5></center>";    
}




$sql="select * from product" or die("error in query");
echo 
$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query))
{
    $p_id=$row['p_id'];
    echo "<tr>";
    echo "<td>".$p_id."</td>";
    echo "<td><img src=".$row['p_img']." height='200px' width='200px'></td>";
    echo "<td>".$row['p_name']."</td>";
    echo "<td>".$row['p_price']."</td>";
    echo "<td>".$row['p_description']."</td>";
    
    echo "<td>".$row['c_name']."</td>";

    echo "<td><a href='update_product.php?p_id=$p_id'>EDIT</a></td>";
    echo "<td><a href='delete_product.php?p_id=$p_id'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table></center>";
?>


