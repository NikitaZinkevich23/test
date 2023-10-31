<!DOCTYPE html>
<html>
<head>
    <title>Система бронирования</title>
</head>
<body>
    <h1>Система бронирования</h1>
    <p>Ошибка при бронировании. Пожалуйста, попробуйте еще раз.</p>
    <a href="index.php">Назад</a>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Подключение к базе данных
    $conn = mysqli_connect('localhost', 'root', '', 'booking_system');

    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO bookings (name, email, date, time) VALUES ('$name', '$email', '$date', '$time')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header('Location: success.php');
    exit();
}
?>
