<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <title>Sign Up </title>
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
    <form class="w-50 mt-5" method="POST">
        <h2 class="text-center">Sign Up Form</h2>
        <div class="form-group mt-5">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
            </div>
            
            <div class="form-group mt-3">
            <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp"
                placeholder="Enter email" required>
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required>
            </div>

            <div class="form-group  mt-3">
                <input type="password" class="form-control" name="conpwd" id="pwd" placeholder="Enter confirm Password" required>
            </div>
            
            <div class="form-group  mt-3 ">
                <input type="text" class="form-control" name="mobno" id="mobno" placeholder="Enter Contact No" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-5" name="submit" >Submit</button>
        <div class = "text-center">
            <h6 class="mt-3"><span>Already have an Account?</span>
            <a class = "reg"href="Login.php">LogIn here</a>
                </h6>
            
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" Bootstrap/js/jquery.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

    

    // if($_POST['pwd']==$_POST['conpwd']){
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        $cpassword=$_POST['conpwd'];
        $mobileno=$_POST['mobno'];

        try{

            
            $pdo = new PDO("mysql:host=localhost;dbname=Admin_Panel", "root", "");
            $insert_query="Insert into student(stud_name,stud_email,stud_password,stud_mobno) values 
        (:name,:email,:password,:mobileno)";

        $query = $pdo -> prepare($insert_query);
	$query -> bindParam(':name', $name, PDO::PARAM_STR);
	$query -> bindParam(':email', $email, PDO::PARAM_STR);
	$query -> bindParam(':password', $password, PDO::PARAM_STR);
	$query -> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
    $lastInsertId=$pdo->lastInsertId();    
    $query -> execute();
	// $lastInsertId=$pdo->lastInsertId();
	if($lastInsertId!="")
	{
		echo "Data Inserted Successfully";
	}
	else
	{
		echo "Error in Inserting";
	}

        
}
catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
        

  }        
    


    


?>