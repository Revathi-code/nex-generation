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
                    <div class="panel-heading">
                        <h1> Check if you are a human? </h1>
                    </div>
                    <hr>
                    <form action ="page2Result.php" method ="post" autocomplete ="off"
                        <div>
                            <img src="captcha.php" alt="Captcha Image"><br><br>
                            <input type ="text" name ="captcha"><br><br>
                            <input type= "submit" value = "Submit Form" class="btn btn-danger btn-sn">
                        </div>
                    </form>
                    <br><br><hr><br>
                    <p style ="font-size : 80%; text-align : center;">Brought to you by Revathi</p>
                </div>
            </div>
        </div>    
    </div>



</body>
</html>