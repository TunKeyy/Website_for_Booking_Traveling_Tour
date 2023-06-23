<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!-- icon trong fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/b479d3cb73.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="/front/css/header.css">
        <link rel="stylesheet" href="/front/css/footer.css">
    <title>Home</title>
</head>

<body>
     <!-- HEADER -->
    <div id="header">

        <div class="nav-container">
            <div class="head-nav">
                <div class="nav-bar-left">
                        <ul>
                            <li class="phone">+84 375421xxx</li>
                            <li class="icon"><a href=""><i class="fa-brands fa-pinterest"></i></a></li>
                            <li class="icon"><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="icon"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="icon"><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                </div>
                @auth
                <div class="nav-bar-right">
                        <ul>
                            <li><a href="/logout" class="register"> LOG OUT</a></li>
                            @if (auth()->user()->level == true)
                            <li><a href="/admin" class="register"> ADMIN</a></li>
                            @endif
                        </ul>
                </div>
                @else
                <div class="nav-bar-right">
                        <ul>
                            <li><a href="/login" class="login">LOGIN</a></li>
                            <li><a href="register" class="register"> REGISTER</a></li>
                        </ul>
                </div>
                @endauth
            </div>
            <div class="main-nav-bar">
                <div class="logo">
                    <i class="bi bi-airplane-fill logo-icon"></i>
                    <span class="logo-head">TravelLong</span> 
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="/home">HOME</a>
                    <a href="/about-us">ABOUT US</a>
                    <a href="/offers">OFFERS</a>
                    <a href="/news">NEWS</a>
                    <a href="/contact">CONTACT</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="bi bi-list"></i>
                    </a>
                </div>

               
            </div>
        </div>
    </div>