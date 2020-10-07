
<html lang="en">

<head>
    <title>Giriş Yap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
    <link href="login/css/styles.css" rel="stylesheet" />
    <!--===============================================================================================-->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
</head>


<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="" class="login100-form validate-form" style="background-color: #303033;">
                    <span class="login100-form-title p-b-34" style="color: white;">
						Kullanıcı Girişi
					</span>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Kullanıcı Adı*">
                        <input id="username" class="input100" type="text" name="username" placeholder="Kullanıcı Adı*">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Şifre*">
                        <input class="input100" id="password" type="password" name="password" placeholder="Şifre*">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <a class="btn btn-xl btn-outline-light"  name="login-btn" style="width: inherit;" onclick="loginConnect()"> 
                            <i class="fas fa-sign-in-alt mr-2"></i> Giriş Yap
                        </a>
                        
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('login/images/banner.png');"></div>
            </div>
        </div>
    </div>
    <script>
        function loginConnect(){
            var username = $("#username").val();
            var password = $("#password").val();
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange= function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if(this.responseText == "true"){
                            
                            window.location.href = "findcitys.html";
                        }else{
                            alert("Kullanıcı adınız veya şifreniz yanlış.");
                        }
                        

                    }
                };
                xhttp.open("POST", "loginCorrect.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("username=" + username + "&password=" + password );
        }
    </script>

    <!--===============================================================================================-->
    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/daterangepicker/moment.min.js"></script>
    <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="login/js/main.js"></script>

</body>

</html>