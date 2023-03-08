<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');


$load_faker = Faker\Factory::create();
for ($i = 1; $i <= 200; $i++) {

    $name =  mysqli_real_escape_string($connection, $load_faker->company);
    $contactnumber = mysqli_real_escape_string($connection, $load_faker->phoneNumber);
    $email = mysqli_real_escape_string($connection, $load_faker->companyEmail);
    $address = mysqli_real_escape_string($connection, $load_faker->streetAddress);
    $city =  mysqli_real_escape_string($connection, $load_faker->city);
    $country = mysqli_real_escape_string($connection, $load_faker->country);
    $postal = mysqli_real_escape_string($connection, $load_faker->postcode);

    $connect = "INSERT INTO `offices`(`name`, `contact_no`, `email`, `address`, `city`, `country`, `postal`) VALUES ('$name','$contactnumber','$email','$address','$city','$country','$postal')";
    if(mysqli_query($connection, $connect)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $connect. " . mysqli_error($connection);
    }


}
