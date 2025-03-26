<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amirabolfazle's Wallet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/VazirFD" rel="stylesheet">
    <style>
        * {
            font-family: Vazir FD, sans-serif
        }

        .card {
            border-radius: 10%
        }
    </style>
    <?php
    $name = $_GET['name'];
    $connect = mysqli_connect('localhost', 'root', '', 'wallet');
    if ($connect->connect_error) {
        die("connection error: " . $connect->connect_error);
    }
    $sql = "SELECT * FROM wallet JOIN user ON wallet.user = user.id WHERE user.name = '$name'";
    $result = mysqli_query($connect, $sql);
    $result2 = mysqli_query($connect, $sql);
    ?>
</head>

<body class="bg-dark">
    <center>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">invertory</h5>
                    <p class="card-text">
                    <ol class='list-group list-group-numbered'></ol>
                    <li class='list-group-item d-flex justify-content-between align-items-start'>
                        <div class='ms-2 me-auto'>
                            <div class='fw-bold'><img src="https://s2.coinmarketcap.com/static/img/coins/200x200/28850.png" class="rounded-circle" alt="Notcoin" width="25"> NOT</div>
                        </div>
                        <span class='badge bg-secondary rounded-pill'><?php if (mysqli_num_rows($result) > 0) {
                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                echo $row['count'];
                                                                            }
                                                                        } ?></span>
                    </li>
                    <br>
                    </ol>
                    </p>
                </div>
            </div>
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <img class="card-img-top rounded-circle" src="https://cravatar.eu/helmhead/<?php echo $name; ?>" alt="Avatar">
                    <pre></pre>
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text">Amirabolfazle's Wallet</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transactions</h5>
                    <p class="card-text">
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['wcount'] > 0) {
                                    $color = 'success';
                                } else {
                                    $color = 'danger';
                                }
                                echo "<li class='list-group-item d-flex justify-content-between align-items-start'>
                                        <div class='ms-2 me-auto'>
                                          <div class='fw-bold'><img src='" . $row['wname'] . ".png' class='rounded-circle' alt='" . $row['wname'] . "' width='25'> " . $row['wname'] . "</div>
                                        </div>
                                        <span class='badge  rounded-pill text-success'>" . $row['wcount'] . "</span>
                                      </li>";
                            }
                        } else {
                            echo "<span class='text-danger'>No Transactions Here!</span>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </center>
</body>

</html>