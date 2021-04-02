<?php
$connect = mysqli_connect("localhost:3306","root","1234","hw") or die("fail");

$query ="select * from users order by number desc";
$result = $connect->query($query);
session_start();
?>

<!DOCTYPE html>
<html>
<title>Funny</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<style>

    #jwdiv{
        margin: 0 auto;
    }

    .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        letter-spacing: 5px;
        background-color: #ffffff;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: #343434 !important;
    }
    .navbar-inverse .navbar-brand {
        color: #343434;
    }

    .navbar-right {
        float: right!important;
        margin-right: 60px;
    }
    .navbar-nav li a:hover {
        color: #d5d5d5 !important;
    }
    .mybtn{
        margin-top: 8px;
        font-size: 12px;

    }
    .mybtn:hover{
        background-color: #ffffff;
    }
    .F_Y{
        color: #f8d347;
    }
    .forhov:hover{
        color: #d5d5d5;
    }
    .jo_navbar {
        padding-top: 20px;
        padding-bottom: 150px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 15px;
        letter-spacing: 8px;
        background-color: #fdfaf2;
    }

    .jo_navbar ul{
        list-style: none;
        padding-left:10px;
    }
    .jo_list{
        padding-left:50px;
    }

    .jo_navbar li a:hover {
        color: #d5d5d5;
    }
    .jo_navbar li a{
        color:gray;
        text-decoration:none;
    }

    .bg-furniture-1 {
        background-color: #ffffff;
        color: #343434;
        text-align: right;
    }
    .bg-furniture-2 {
        background-color: #fdfaf2;
        color: #343434;
        text-align: right;
    }
    .bg-furniture-1 h1 {
        font-family: 'Helvetica';
        line-height: 1.4;
        word-spacing: 3px;
        max-width: 45rem;
        text-shadow: 0px 1px 0px white;
        letter-spacing: -1px;
    }
    .bg-furniture-1 .highlight {
        display: inline-block;
        color: #343434;
        -webkit-transition: color 250ms, text-shadow 250ms;
        transition: color 250ms, text-shadow 250ms;
        text-decoration: none;
        text-shadow: 0px 1px 0px white;
        position: relative;
        z-index: 0;
    }
    .bg-furniture-1 .highlight::after {
        position: absolute;
        z-index: -1;
        bottom: -5px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        content: '';
        width: 100%;
        height: 3px;
        background-color: #343434;
        -webkit-transition: all 250ms;
        transition: all 250ms;
    }
    .bg-furniture-1 .highlight:hover {
        color: white;
        text-shadow: 0px 1px 0px black;
    }
    .bg-furniture-1 .highlight:hover::after {
        height: 105%;
        width: 105%;
    }
    .bg-furniture-1-fluid {
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .bg-furniture-2 h1 {
        font-family: 'Helvetica';
        line-height: 1.4;
        word-spacing: 3px;
        max-width: 45rem;
        text-shadow: 0px 1px 0px white;
        letter-spacing: -1px;
    }
    .bg-furniture-2 .highlight {
        display: inline-block;
        color: #343434;
        -webkit-transition: color 250ms, text-shadow 250ms;
        transition: color 250ms, text-shadow 250ms;
        text-decoration: none;
        text-shadow: 0px 1px 0px white;
        position: relative;
        z-index: 0;
    }
    .bg-furniture-2 .highlight::after {
        position: absolute;
        z-index: -1;
        bottom: -5px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        content: '';
        width: 100%;
        height: 3px;
        background-color: #343434;
        -webkit-transition: all 250ms;
        transition: all 250ms;
    }
    .bg-furniture-2 .highlight:hover {
        color: white;
        text-shadow: 0px 1px 0px black;
    }
    .bg-furniture-2 .highlight:hover::after {
        height: 105%;
        width: 105%;
    }
    .bg-furniture-2-fluid {
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .row {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .pleasemiddle {
        display: inline-block;
        vertical-align: middle;
        height: 100%;
        padding-top: 100px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #585858;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #585858;
        text-decoration: underline;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }


    .jo_teamdefault {
        text-align: center;
        color : white;
        text-decoration: underline;
    }
    .jo_center{
        text-align: center;
        padding-left: 20%;
    }

    .dropdownz{
        z-index:5000;
    }

</style>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand forhov" style="background-color: #f8d347; border-radius: 15px; test-align:center;"title="Funny 메인 페이지" href="Funny.php"><span>Funny</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="info.html"><span class="">소</span><span class="">개</span></a></li>

                <li class="dropdown"><a href="#" class="dropbtn"><span class="">가</span><span class="">구</span></a>
                    <div class="dropdown-content">
                        <a href="chair_list.html"><span class="F_Y">의</span><span>자</span></a>
                        <a href="desk_list.html"><span class="F_Y">책</span><span>상</span></a>
                        <a href="bed_list.html"><span class="F_Y">침</span><span>대</span></a>
                    </div>
                </li>
                <li><a href="layout.html"><span class=" ">배</span><span class="">치</span></a></li>
                <?php
                if(isset($_SESSION['id'])) {
                    echo $_SESSION['id'];?>

                    님 안녕하세요

                    <button onclick="location.href='logout.php'" class="btn btn-darklight mybtn sm "><span class="">로</span><span>그아웃</span></button>
                    <br />

                    <?php
                }
                else {
                    ?>
                    <li><button onclick="location.href='login.php'" class="btn btn-darklight mybtn sm "type="button" ><span class="">로</span><span>그인</span></button></li>
                <?php   }
                ?>

            </ul>

        </div>
    </div>
</nav>
<!-- 여기까지한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔한솔-->

<div id="jwdiv" style="max-width:1000px">
    <img class="slide" src="F1.jpg" style="width:1000px;height:300px">
    <img class="slide" src="F2.jpg" style="width:1000px;height:300px">
    <img class="slide" src="F3.jpg" style="width:1000px;height:300px">
    <img class="slide" src="F4.jpg" style="width:1000px;height:300px">
    <img class="slide" src="F5.jpg" style="width:1000px;height:300px">
</div>


<!--여기까지 종우종우종우종우종우종우종우종우종우종우종우종우종우종우종우종우종우종우종우-->

<body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script> AOS.init(); </script>

<div id="">
    <div class="container-fluid bg-furniture-1 text-center">
        <div class="row">
            <div class="col-sm-6" data-aos="fade-right">
                <img src="chair.png" class="img-responsive center-block" alt="Image">
            </div>
            <div class="col-sm-6 pleasemiddle" data-aos="fade-left">
                <h1>당신을 위한 편안함, <a class="highlight" href="chair_list.html">
                        <span>Go to chair</span></a></h1>
            </div>

        </div>
    </div>
</div>
<div id="">
    <div class="container-fluid bg-furniture-2 text-center">
        <div class="row">
            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="1200">
                <img src="desk.png" class="img-responsive center-block" alt="Image">
            </div>
            <div class="col-sm-6 pleasemiddle" data-aos="fade-left" data-aos-duration="1800">
                <h1>새로운 학기를 위하여 <a class="highlight" href="desk_list.html">
                        <span>Go to desk</span></a></h1>
            </div>
        </div>
    </div>
</div>
<div id="">
    <div class="container-fluid bg-furniture-1 text-center">
        <div class="row">
            <div class="col-sm-6" data-aos="fade-right">
                <img src="bed.png" class="img-responsive center-block" alt="Image">
            </div>
            <div class="col-sm-6 pleasemiddle" data-aos="fade-left">
                <h1>편안한 잠자리를 위해서 <a class="highlight" href="bed_list.html">
                        <span>Go to bed</span></a></h1>
            </div>

        </div>
    </div>
</div>



<!-- 여기까지 현성현성현성현성현성현성현성현성현성현성현성현성현성현성현성현성현성현성-->

<nav class="jo_navbar navbar-inverse">
    <div class="container-fluid jo_center">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#jo_Navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="jo_Navbar">
            <div class="">
                <ul class="nav navbar-nav navbar-center" >

                    <li class="jo_list">
                        <a id="bnav">Information</a>
                        <ul>
                            <li><a id="bnav" href="info.html">Funny란</a></li>
                            <li><a id="bnav" href="Termsofservice.html">이용약관</a></li>
                            <li><a id="bnav" href="privacypolicy.html">개인정보 취급방침</a></li>
                        </ul>
                    </li>

                    <li class="jo_list">
                        <a id="bnav">Contact Us</a>
                        <ul>
                            <li><a id="bnav" href="CBUloc.html">충북대학교 S4-1</a></li>
                            <li><a id="bnav" href="#">010-1234-1234</a></li>
                            <li><a id="bnav" href="#">이메일@naver.com</a></li>
                        </ul>
                    </li>


                    <li class="jo_list">
                        <a id="bnav" style="color:yellow;">For Customer</a>
                        <ul>
                            <li><a id="bnav" href="ask.html">자주 묻는 질문</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <br>
    <br>
    <hr>
    <br>
    <br>
    <div class="jo_teamdefault">
        <h3 style="text-align:center; color:gray;">Team default</h3><br>
        <h4 style="text-align:center; color:gray;">
            Opensource Web Software Project<br>
            김종우 전현성 신한솔 조광식
        </h4>
    </div>

</nav>
<!--여기까지 광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식광식-->
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

</body>
</html>
