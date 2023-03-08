<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$rem = array('Signed', 'For approval','');
$actions = array('IN', 'OUT', 'COMPLETE');

$show_faker = Faker\Factory::create();

for ($i = 1; $i <= 200; $i++) {

    $datelog = mysqli_real_escape_string($connection, date("Y-m-d H:i:s"));
    $documentcode = mysqli_real_escape_string($connection, $show_faker->numberBetween($min = 100, $max = 105));
    $action = mysqli_real_escape_string($connection, $actions[rand(0, 2)]);
    $office = mysqli_real_escape_string($connection, $show_faker->company);
    $employee = mysqli_real_escape_string($connection, $show_faker->name);
    $remark = mysqli_real_escape_string($connection, $remarks[rand(0, 2)]);


    $i_transaction = "INSERT INTO `transactions`(`date_log`, `document_code`, `action`, `office`, `employee`, `remarks`) VALUES ('$datelog','$documentcode','$action','$office','$employee','$remark')";
    if(mysqli_query($connection, $i_transactionmt)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $i_transaction. " . mysqli_error($connection);
    }
}
?>
