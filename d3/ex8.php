<?php
if(isset($_POST['submit']))
{
$sub1 = $_POST['num1'];
$sub2 = $_POST['num2'];
$sub3 = $_POST['num3'];


$total = ($sub1 + $sub2 + $sub3);

$average = number_format($total/3); //compute the average of total marks
echo " Total marks of three subjects = ".$total ."<br>";
echo " Average marks of three subjects = ".$average ."<br>";
if($total<35)
{
echo "Fail";
}
else
if($average>=60 && $average<70)
{
echo "C Grade"."<br>";
}
else
if($average>=70 && $average<80)
{
echo "B Grade"."<br>";
}
else
if($average>=80 && $average<95)
{
echo "A Grade"."<br>";
}
else
{
echo "A+ Grade"."<br>";
}
return 0;
}
?>
</body>
</html>
