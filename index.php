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
        }

        form {
            align-items: center;
        }

        .form-data {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 15px;
        }

        span,
        input {
            font-size: 20px;
        }

        .nameInput {
            margin-right: 152px;
        }

        .jobInput {
            margin-top: 10px;
            margin-right: 120px;
        }

        button {
            margin-top: 50px;
            margin-right: 220px;

            color: #fff;
            background-color: #4285f4 !important;
            border: 0;
            width: 150px;
            height: 50px;
            font-size: 19px;
            border-radius: 20px;

        }

        @media (max-width:600px) {
            form {
                margin-right: 11px;

            }

            .nameInput {
                margin-right: 52px;
            }

            .jobInput {
                margin-right: 20px;
                margin-top: 10;
            }

            button {
                margin-bottom: 20px;
            }
        }
    </style>

</head>

<body>

    <img src="img/logo.jpg" width="100%" height="400px">
    <div class="form-data">
        <form action="end.php" method="POST">
            <span> اسم</span><input type="text" name="name" class="nameInput" /><br>
            <span> المنصب</span> </span><input type="text" name="job" class="jobInput" /><br>
            <button>حصول علي معايدة</button>
        </form>
    </div>
    <img src="img/footer.jpg" width="100%" alt="">
</body>

</html>