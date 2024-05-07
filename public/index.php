<?php
require_once './bootstrap.php';
require_once './Customer.php';

$title = 'Home Page';
$heading1 = '';

$customer = new Customer($mysqlConnection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?> </title>
</head>
<body>
    <?php
        try {
            $heading1 = 'Connected to the database';
            echo "<h1> $heading1 </h1>";
            $customers = $customer->getCustomers();
            foreach ($customers as $customer) {
                echo "<h2> {$customer['customerName']} </h2>";
            }
        } catch (PDOException $e) {
            $message = $e->getMessage();
            echo "<h1>Connection failed: $message </h1>";
        }
    ?>
</body>
</html>