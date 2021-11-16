<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <title>Add Products </title>
    <style>
        form {
            margin: auto;
            border: 1px solid transparent;
            padding: 30px;
            border-radius: 0px;
            box-shadow: 0 0 20px black;
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
    <form class="w-50 mt-5" enctype="multipart/form-data" method="POST">
        <h2 class="text-center">Add Product</h2>
        <div class="form-group mt-5">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="pname" id="pname" placeholder="Enter Product Name" required>
            </div>
            
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="pprice"  id="pprice" aria-describedby="emailHelp"
                placeholder="Enter Product Price" required>
            </div>

            <div class="form-group  mt-3">
                <textarea class="form-control" name="pdesc" id="pdesc" placeholder="Enter Product Descripton" required></textarea>
            </div>

            <div class="form-group  mt-3">
                
                <input type="file" name="file" class="form-control" placeholder="choose file" required>
            </div>
            
    </div>
    <div class="form-group  mt-3">
    <label class = "form-control" for="cat">Choose category:</label>

<select class = "form-control"  name="cat" id="cat">
  <option value="men">men</option>
  <option value="women">Women</option>
  <option value="kids">Kids</option>
  <option value="kids">Accessories</option>
  </div>
  
</select>
            
            

        <button type="submit" class="btn btn-primary mt-5" name="submit" >Submit</button>
        
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" Bootstrap/js/jquery.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

    include 'connection.php';

    
    if(isset($_POST['submit'])){
        $name=$_POST['pname'];
        $price=$_POST['pprice'];
        $desc=$_POST['pdesc'];
        $filepath = "./Images/" . $_FILES["file"]["name"];
        $selectc=$_POST['cat'];

        
        $insert_query="Insert into product(p_name,p_price,p_description,p_img,c_name) values 
        ('$name','$price','$desc','$filepath','$selectc')";

        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);


        $res=mysqli_query($con,$insert_query);

        if($res){
            header("Location:dashboard.php");
        }else{
            echo "data not inserted";
        }
    }


    mysqli_close($con);


?>