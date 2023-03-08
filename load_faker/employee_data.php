<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$load_faker = Faker\Factory::create();

for ($i = 1; $i <= 200; $i++) {

    $lastname = mysqli_real_escape_string($connection, $load_faker->lastName);
    $firstname = mysqli_real_escape_string($connection, $load_faker->firstName);
    $address = mysqli_real_escape_string($connection, $load_faker->streetAddress);
    $office = mysqli_real_escape_string($connection, $load_faker->company);


    $insert = "INSERT INTO `employees`(`last_name`, `first_name`, `address`, `office`) VALUES ('$lastname','$firstname','$address','$office')";
    if (mysqli_query($connection, $insert)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }


}
