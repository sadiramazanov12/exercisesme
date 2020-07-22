<!DOCTYPE html>
<html>
<head>
<title>Execise Me</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- favicons -->
<link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
<!-- favicons -->
<link rel="stylesheet" type="text/css" href="css/ayar.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/plugin-active.js"></script>
</head>
<body >
  <header>
    <div class="mobile-logo">
    <a href=""><img src="images/logo.png"></a>
  </div>
  <a class="menu-toggle rounded" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Services">Exercise</a>
      </li>
      <li class="sidebar-nav-item">
        <a   href="index.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#Contact">Contact</a>
      </li>
    </ul>
  </nav>
  </header>
  <section id="Banner">
    <div class="logo">
      <img src="images/logo.png" height="130" width="150"><br/>
        <h1 style="position:absoulute; top:-130px; color:black;">Exercise.<br>me</h1>
    </div>
    <div class="blacksection">
      <h1 style="color:#e64741;">future?<br>with<br>you!</h1>
    </div>
  </section>
  <a href="#Services" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>
  <section id="Services">
    <?php
    echo "<style>
    .classname {
    background-color:#e6275c;
    -webkit-border-top-left-radius:28px;
    -moz-border-radius-topleft:28px;
    border-top-left-radius:28px;
    -webkit-border-top-right-radius:28px;
    -moz-border-radius-topright:28px;
    border-top-right-radius:28px;
    -webkit-border-bottom-right-radius:28px;
    -moz-border-radius-bottomright:28px;
    border-bottom-right-radius:28px;
    -webkit-border-bottom-left-radius:28px;
    -moz-border-radius-bottomleft:28px;
    border-bottom-left-radius:28px;
    text-indent:0;
    border:1px hidden #18ab29;
    display:inline-block;
    color:#ffffff;
    font-family:'Futura PT Heavy';
    font-size:35px;
    font-weight:bold;
    font-style:normal;
    height:50px;
    line-height:50px;
    width:350px;
    text-decoration:none;
    text-align:center;
    text-shadow:1px 1px 0px #2f6627;
    }.classname:hover {
    background-color:#e64741;
    }.classname:active {
    position:relative;
    top:1px;
  }</style>
    ";
        require_once("conn.php");
        $sql="SELECT * FROM phpex ORDER BY RAND() LIMIT 1";
        $sorgu=mysqli_query($conn,$sql);
        while( $sonuc=mysqli_fetch_assoc($sorgu) ){
          echo "<h3> Your exercise for:" . date("d/m/y") . "<h3/><br>";
          echo '<h1>'.$sonuc["title"]."</h1><br/><br/>" ;
          echo '<img src="test/'.$sonuc["image"].'" alt="Italian Trulli width="420" height="450" style="  right:470px""><br/><br/>';//title;
          echo '<h4 style="  right:200px;bottom:420px">'.$sonuc["text"]. "</h4><br><br><br><br>";
          echo '<a href="phpexercises.php?get=imdone#container"><input type="submit" name="submit" value="I am done!" class="classname""/></a>';
            }
          @$a=$_GET["get"];
            switch ($a) {
              case 'imdone':
              include("imdone.php");
              break;

              default:
              
              break;
            }
     ?>


  </section>
  <footer id="Contact">
    <div class="container">
      <p>If you have any question, feel <br>free to get in touch.</p>
      <a href="#" class="email-btn"><span><i class="fa fa-envelope-o" aria-hidden="true"></i> Email Me</span></a>
      <ul class="social-icons">
        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </footer>
   <div class="copyright"><p>Copyrights 2020-2021</p>
  </div>
  </body>
  </html>
