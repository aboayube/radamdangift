<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $job = $_POST['job'];
} else {
    header("Location: index.php");
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body {
            direction: rtl;
            overflow-x: hidden;
            background-color: #fbfbfb;
        }

        form {
            align-items: center;
        }

        .form-data {
            margin-right: 250px;
            margin-top: 15px;
        }

        span,
        input {
            color: #00847a;
            font-size: 36px;
        }

        .dataName {
            margin-right: 320px;
            color: #02365e;
        }

        .dataJob {
            margin-right: 320px;
            color: #02365e;
            margin-bottom: 20px;
        }

        @media (max-width:600px) {


            .dataName {
                margin-right: -115px;
            }

            .dataJob {
                margin-right: -105px;
                margin-top: 10;
                margin-bottom: 30px;
            }
        }
    </style>

</head>

<body>

    <img src="img/logo.jpg" width="100%" height="400px">
    <div class="form-data">
        <span class="dataName"><?php echo $name ?></span><br><br>
        <span class="dataJob"><?php echo $job ?></span><br>

    </div>
    <img src="img/footer.jpg" width="100%" alt="">
</body>

</html>