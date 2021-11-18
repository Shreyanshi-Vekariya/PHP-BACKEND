<?php

session_start();
include 'connection.php';

if($_SESSION['email']==''){
    header('Location:Login.php');
}
else{

    $id=$_GET['p_id'];
    $email=$_SESSION['a_email'];
    
    $query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die('Error in query');

    $row1=mysqli_fetch_array($query1);
    // echo "Hello ".$row1['stud_name'];

    $query2=mysqli_query($con," select * from product where p_id='$id' ") or die("Error in query");
    $row2=mysqli_fetch_array($query2);
    $img=$row2['p_img'];
    $name=$row2['p_name'];
    $price=$row2['p_price'];
    $desc=$row2['p_description'];
    $cname=$row2['c_name'];
    
}
?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
      <title>Update Data</title>
      <style>
        form {
            margin: auto;
            border: 1px solid transparent;
            box-shadow: 0 0 20px black;
            padding: 30px;
            border-radius: 0px;
        }

        h2 {
            background-color: black;
            padding: 5px;
            color: #fff;
            border-radius: 0px;
        }

        .btn {
            width: 100%;
            display: block;
            background-color: black;
            color: #fff;
            font-weight:bold;
        }

    </style>
  </head>
  <body>
  <div class="container text-center mt-5">
            <h5><?php
                echo "Hello ".$row1['a_name'];
            ?></h5>
            </div>
  
  <form class="w-50 mt-5" method="POST">
      
        <h2 class="text-center">Update Details</h2>
        <div class="form-group mt-5">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="pname" id="pname" value="<?php echo $name?>" placeholder="Enter Product Name" required>
            </div>
            
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="pprice"  id="pprice" value="<?php echo $price?>" aria-describedby="emailHelp"
                placeholder="Enter Product Price" required>
            </div>

            <div class="form-group  mt-3">
            <textarea class="form-control" name="desc" id="desc" value="<?php echo $desc ?>" placeholder="Enter Product Descripton" required><?php echo $desc ?></textarea>
                <!-- <textarea class="form-control" name="pdesc" id="pdesc" value="<?php echo $desc?>" placeholder="Enter Product Descripton" required></textarea> -->
            </div>

            <!-- <div class="form-group  mt-3">
                
                <input type="file" name="file" class="form-control" value="<?php echo $img?>"placeholder="choose file" required>
            </div> -->

            <div class="form-group mt-3">
<label for="formFile" class="form-label">Add Product Image</label>
<input class="form-control" type="file" name="file" id="formFile">

<img src="<?php echo $img ?>"height=70; width=100 />

</div>
            
    </div>
   


  <div class="form-group mt-3">
<label class="form-control" for="categories">Choose a Categories:</label>
<select name="cname" id="categories" value="<?php echo $cname ?>">
<option value="<?php echo $cname ?>"><?php echo $cname ?></option>
<option value="women">women</option>
<option value="men">men</option>
<option value="kids">kids</option>
<option value="kids">Accessories</option>
</select>
</div>
            
            

        <button type="submit" class="btn btn-primary mt-5" name="update" >Submit</button>
    </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=" Bootstrap/js/jquery.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>

<?php

if(isset($_POST['update'])){
        
    $name=$_POST['pname'];
    $p_price=$_POST['pprice'];
    $p_desc=$_POST['desc'];
    //$filepath = "./Images/" . $_FILES["file"]["name"];
    $selected=$_POST['cname'];

    if($_FILES["file"]["size"]==0){
        $filepath=$img;
    }else{
        $filepath = "./images/" . $_FILES["file"]["name"];
    }

    include 'connection.php';
    move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);


    $sql="update product set p_name='$name', p_price='$p_price', p_description='$p_desc', p_img='$filepath', c_name='$selected' where p_id=$id";
    print_r($sql);
    $query=mysqli_query($con,$sql) or die("Error in Query");
        
        if($query){
            // echo "data update";
            header('Location:dashboard.php');
        }else{
            echo "Error in update";
        }
        
        mysqli_close($con);
    }

?>