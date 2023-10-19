<!DOCTYPE html>
<html>
<head>
    <title>latihan3</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo "Input angka tadi adalah: " . $number;
    }
    ?>
</body>
</html>
