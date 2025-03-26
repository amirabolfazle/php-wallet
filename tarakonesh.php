<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ولت صرافی گانمکس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/VazirFD" rel="stylesheet">
    <style>
        *{font-family: Vazir FD, sans-serif}
        .card{
            border-radius: 10%
        }
    </style>
    <?php
        $name=$_GET['name'];
        $connect = mysqli_connect('sql102.pcshared.com', 'pcsha_32728517', '44219173', 'pcsha_32728517_890');
        $sql="SELECT * FROM `wallet,user` where wallet.user = user.id and user.name = $name";
        $resault = mysqli_query($connect,$sql);
    ?>
</head>

<body class="bg-dark">
    
</body>
</html>