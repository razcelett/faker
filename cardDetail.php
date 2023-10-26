<?php
  
require 'vendor/autoload.php';
$faker = Faker\Factory::create();
$conn = mysqli_connect("127.0.0.1", "root", "@Czarlett3", "practice11");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 20; $i++){   
$sql = "INSERT INTO cardDetail(ccid, creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) 
values('".$faker->ccid."','".$faker->creditCardType."', '".$faker->creditCardNumber."', '".$faker->creditCardExpirationDate."', '".$faker->userIdNumber(0, 100)."')";     

mysqli_query($conn, $sql);

}



?>