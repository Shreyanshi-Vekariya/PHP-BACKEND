<!-- WAP to read character and find out whether it is upper case latter, lower case latter, digit or special symbol. -->
<?php
$char1 = $_POST['char'];

function CharCheck($char1){

    if($char1 >= 'A' && $char1 <='Z'){
        echo $char1." is UpperCase Character"."<br>";
    }elseif($char1 >= 'a' && $char1 <= 'z'){
        echo $char1." is LowerCase Character"."<br>";
    }else{
        echo "Other";
    }
}

echo CharCheck($char1);


?>