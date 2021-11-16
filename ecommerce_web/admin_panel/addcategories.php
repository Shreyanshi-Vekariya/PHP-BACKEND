<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <style>
        form {
            margin: auto;
            border: 1px solid transparent;
            padding: 30px;
            border-radius: 0px;
            box-shadow: 0 0 20px black;
        }
        a{
            font-size:14px;
            color:black;
            
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
    <title>Login </title>
</head>
<body>
<form class="w-50 mt-5" method="POST">
        <h2 class="text-center">Add Category</h2>
        <div class="form-group mt-5">
            
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="addcategory"  id="c_add" aria-describedby="emailHelp"
                placeholder="Enter category to add" required>
            </div>

            
		
	</div>
            
            
        </div>
        <button type="submit" class="btn btn-primary mt-5" name="submit" >Submit</button>
        
    </form>

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
        $name=$_POST['addcategory'];
        

        $insert_query="Insert into categories(c_name) values 
        ('$name')";

        $res=mysqli_query($con,$insert_query);

        if($res){
            header("Location:viewcategories.php");
        }else{
            echo "data not inserted";
        }
    }

    mysqli_close($con);


?>