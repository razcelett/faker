<?php

require 'vendor/autoload.php';
$faker = Faker\Factory::create();
$conn = mysqli_connect("127.0.0.1", "root", "@Czarlett3", "practice11");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 100; $i++){   
$query = "INSERT INTO userAccount(id, email, lastname, firstname, username, password) 
values('".$faker->id."','".$faker->email."', '".$faker->lastname."', '".$faker->firstname."', '".$faker->username."', '".$faker->password."')";     

mysqli_query($conn, $query);

}



?>