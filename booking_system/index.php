<!DOCTYPE html>
<html>
<head>
    <title>Система бронирования</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: auto;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type=text], input[type=email], input[type=date], input[type=time] {
            width: 100%;
        }

        button[type=submit] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
    
</head>
<body>
    <h1>Система бронирования</h1>
    <form method="POST" action="booking.php">
        <label for="name">Имя:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="date">Дата бронирования:</label>
        <input type="date" name="date" required><br>

        <label for="time">Время бронирования:</label>
        <input type="time" name="time" required><br>

        <button type="submit" name="submit">Забронировать</button>
    </form>
</body>
</html>
