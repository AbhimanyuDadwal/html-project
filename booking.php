<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Thanks for Booking
    </h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date_and_time = $_POST['date_and_time'];
    $phone_number = $_POST['phone_number'];
    $days = $_POST['days'];
    $nights = $_POST['nights'];
    $breakfast_included = isset($_POST['breakfast_included']) ? true : false;

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Date and Time: " . $date_and_time . "<br>";
    echo "Phone Number: " . $phone_number . "<br>";
    echo "Days: " . $days . "<br>";
    echo "Nights: " . $nights . "<br>";
    echo "Breakfast Included: " . ($breakfast_included ? "Yes" : "No") . "<br>";
}
?>

</body>
</html>
