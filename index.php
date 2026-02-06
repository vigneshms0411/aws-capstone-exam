<!DOCTYPE html>
<html>
<head>
    <title>StreamLine Corp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to StreamLine - v1</h1>
        <p>Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
        <p>Hostname: <?php echo gethostname(); ?></p>
    </div>
</body>
</html>
