<?php
date_default_timezone_set("Asia/Kolkata");
?>

<!DOCTYPE html>
<html>
<head>
    <title>AWS LAMP Hosting</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            text-align:center;
            margin-top:100px;
        }
        .box{
            background:white;
            padding:30px;
            width:50%;
            margin:auto;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }
    </style>
</head>

<body>

<div class="box">
    <h1>AWS LAMP Stack Project</h1>

    <p>Web Application Hosted Successfully on AWS EC2</p>

    <h3>Technologies Used</h3>

    <p>Apache | PHP | MySQL | Linux | AWS EC2</p>

    <h3>Server Time</h3>

    <p><?php echo date("d-m-Y h:i:s A"); ?></p>
</div>

</body>
</html>