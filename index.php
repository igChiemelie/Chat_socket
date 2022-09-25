<?php
session_start();
if (isset($_SESSION['loggedIn'])) {
    require './conn.php';
    header('location: ./chatApp');

}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <title>DreamsChatsApp</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/framework7.bundle.min.css">
    <link rel="stylesheet" href="assets/css/framework7-icons.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <style>
        .mobile-number .mobile-number-code {
            width: 100%;
            padding-left: 0;
        }
        .hide{
            display: none;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="splash-screen">
            <div class="splash-logo">
                <img src="assets/img/logo.png" alt="">
            </div>
        </div>
        <div class="view view-main view-init ios-edges" data-url="/">
        <!-- <div class="view view-main view-init ios-edges"> -->
            <div class="page" data-name="index">
                <div class="page-content login-page">
                    <div class="block">
                        <div class="login-icon">
                            <div class="login-top-icon">
                                <div class="inner-top-icon">
                                    <img src="assets/img/icons/login-icon.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="login-title">
                            <span>Enter your mobile number to login or register</span>
                        </div>
                        <div class="login-form reg-div hide">
                            <form class="drop-down-col" id="reg-form_data" method="POST">

                                <ul>
                                    <li class="select-language">
                                        <div class="item-content item-input">
                                            <div class="item-inner">
                                                <div class="item-title item-label">Username*</div>
                                                <div class="item-input-wrap mobile-number">
                                                    <span class="" style="width: 100%">
                                                        <input type="text" name="username" id="username"
                                                            placeholder="I.G Chiemelie" required>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="select-language">
                                        <div class="item-link smart-select smart-select-init" data-open-in="sheet">
                                            <select name="country" id="country">
                                                <option value="">Select Country 👇</option>
                                                <option value="canada">Canada</option>
                                                <option value="australia">Australia</option>
                                                <option value="nigeria">Nigeria</option>
                                                <option value="india"> India</option>
                                                <option value="ghana"> Ghana</option>
                                                <option value="usa">United States of America</option>
                                                <option value="uk">United Kingdom</option>
                                            </select>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title">Country <i class="fas fa-angle-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="select-language">
                                        <div class="item-content item-input">
                                            <div class="item-inner">
                                                <div class="item-title item-label">Your Mobile Number*</div>
                                                <div class="item-input-wrap mobile-number">
                                                    <!-- <span class="country-code">
                                                        <input type="tel" name="code" id="code" placeholder="+55" maxlength="4"
                                                            onKeyPress="if(this.value.length == 4) return false;" value="" >
                                                    </span> -->
                                                    <span class="mobile-number-code">
                                                        <input type="number" name="mobile" id="mobile" placeholder="925-888-2837"
                                                            maxlength="10"
                                                            onKeyPress="if(this.value.length==10) return false;" required>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bottom-submit">
                                    <div class="left">
                                        <ul>
                                            <li class="active"><a href="#" id="toLogin">Sign In</a></li>
                                            <li></li>
                                            
                                        </ul>

                                        
                                    </div>
                                    <div class="right">
                                        <button type="submit" class="submit-btn" name="reg">
                                            <img src="assets/img/icons/arrow.png"alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="login-form login-div">
                            <form class="drop-down-col" id="login-form_data" method="POST">

                                <ul>
                                    <li class="select-language">
                                        <div class="item-content item-input">
                                            <div class="item-inner">
                                                <div class="item-title item-label">Username*</div>
                                                <div class="item-input-wrap mobile-number">
                                                    <span class="" style="width: 100%">
                                                        <input type="text" name="uName" id="uName"
                                                            placeholder="I.G Chiemelie" required>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                 
                                    <li class="select-language">
                                        <div class="item-content item-input">
                                            <div class="item-inner">
                                                <div class="item-title item-label">Your Mobile Number*</div>
                                                <div class="item-input-wrap mobile-number">
                                                    <!-- <span class="country-code">
                                                        <input type="tel" name="code" id="code" placeholder="+55" maxlength="4"
                                                            onKeyPress="if(this.value.length == 4) return false;" value="" >
                                                    </span> -->
                                                    <span class="mobile-number-code">
                                                        <input type="number" name="mobileNo" id="mobileNo" placeholder="925-888-2837"
                                                            maxlength="10"
                                                            onKeyPress="if(this.value.length==10) return false;" required>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bottom-submit">
                                    <div class="left">
                                        <ul>
                                            <li class="active"><a href="#" id="toRegister">Sign Up</a></li>
                                            <li></li>
                                            
                                        </ul>

                                        
                                    </div>
                                    <div class="right">
                                        <button type="submit" class="submit-btn" name="login">
                                            <img src="assets/img/icons/arrow.png"alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/framework7.bundle.min.js"></script>
    <script src="assets/js/routes.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/chatApp.js"></script>
    <script>
        $('#reg-form_data').on('submit', function (e) {
            e.preventDefault();
            let username = $('#username').val();
            let code = $('#code').val();
            let mobile = $('#mobile').val();
            let country = $('#country').val();
            let reg = true;
            

            let Data = {
                username:username,
                mobile:mobile,
                country:country,
                reg:reg
            }
            console.log(Data);
            if (username != "" && code != "" && mobile != "" && country != "") {
                // console.log(mobile);
                let status = 'online';
                console.log(status);
               

                // window.localStorage.setItem('users', JSON.stringify(userInfo));
                
                $.ajax({
                    url:"./controller/auth",
                    method: "POST",
                    data: Data,
                    success:(response)=>{
                        console.log(response);
                        if (response == 200) {
                            alert('Thanks for signing up, We hope you enjoy our App 👨‍💻👏');
                            window.location.href = "./chatApp";
                            
                        }else if(response == '401'){
                            alert('Username already exist');
                        }
                        
                    
                    },
                    error:(err)=>{
                        console.log(err);
                    }
                });

            }else if(username == ""){

                alert('Username empty !!');
            
            }else if(code == ""){

                alert('Code field empty !!');

            
            }else if(mobile == ""){

                alert('Mobile field empty !!');

            }else if(country == ""){

                alert('Country field empty !!');

            }else{
                alert('Please fill in the required fields !!');
            }

        });


        $('#login-form_data').on('submit', function (e) {
            e.preventDefault();
            let uName = $('#uName').val();
            let mobileNo = $('#mobileNo').val();
            let login = true;
            

            let Data = {
                uName:uName,
                mobileNo:mobileNo,
                login:login
            }
            console.log(Data);

            if (uName != "" && mobileNo != "") {
            
                $.ajax({
                    url:"./controller/auth",
                    method: "POST",
                    data: Data,
                    success:(response)=>{
                        console.log(response);
                        if (response == 200) {
                            
                            alert('Thanks for signing up, We hope you enjoy our App 👨‍💻👏');
                            window.location.href = "./chatApp";
                            
                        }else if(response == 501){
                            alert('Incorrect Username or phone number');
                        }
                        
                   
                    },
                    error:(err)=>{
                        console.log(err);
                    }
                });

            }else if(uName == ""){

                alert('Username empty !!');
            
           
            }else if(mobileNo == ""){

                alert('Mobile field empty !!');

            }else{
                alert('Please fill in the required fields !!');
            }

        });
    </script>
</body>


</html>