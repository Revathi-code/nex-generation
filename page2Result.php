<?php
session_start();
$captcha = $_POST['captcha'];
$check = false;
if(isset($_SESSION['captcha']))
{
        if ($captcha == $_SESSION['captcha'])
        {
            $check = true;
        }
        unset($_SESSION['captcha']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTP-8">
    <title> Captcha Generation </title>
    
    <!--Bootstrap 4 -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body style ="margin-top: 100px;">
    <div class ="container">
        <div class ="row">
            <div class="col-md-6 offset-md-3">
                <div class ="panel">
                    <hr>
                    <div style="text-align: center;">
                    <?php if ($check): ?>
                   <video width="300" height="300" autoplay>
                    <source src="human.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                    <div><h3>Hurray!! You are qualified Human</h3></div>
                    <?php else: ?>
                    <video width="300" height="300" autoplay>
                    <source src="BOT.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                    <div><h3>Oh No!! You are a BOT</h3></div>
                    <?php endif ?>
                    <br>
                    <h4><a href ="phpEx.php">Check Again</a></h4>
                    <br><br><hr><br>
                    <p style ="font-size : 80%; text-align : center;">Brought to you by Revathi</p>
                </div>
            </div>
        </div>    
    </div>



</body>
</html>