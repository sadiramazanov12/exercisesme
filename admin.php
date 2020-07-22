<!DOCTYPE html>
<html>
<head>
<title>Execise.me Admin panel</title>
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
  </header>
  <section id="Banner">
    <div class="logo">
      <img src="images/logo.png" height="130" width="150"><br/>
        <h1 style="position:absoulute; top:-130px; color:black;">Exercise.<br>me</h1>
    </div>
    <div class="blacksection">
      <h1 style="color:#e64741;">admin<br>panel</h1>
    </div>
  </section>
  <a href="#Services" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>
  <section id="Services" class="services">
    <?php
        require_once("conn.php");
        @$title = $_POST['title'];
        @$image = $_POST['image'];
        @$data = $_POST['data'];
        @$addwhere = $_POST['base'];
        echo '
        <h1> Add Data </h1>
        <form action="admin.php" method="post">
            Which base: <input type="text" name="base" /><br /><br /><br />
            Title:  <input type="text" name="title" /><br /><br /><br />
            Image name:  <input type="text" name="image" /><br /><br /><br />
            Data: <textarea name="data"></textarea><br /><br /><br />

            <hr style="width:100%;text-align:left;margin-left:0">
            <input type="submit" name="submit" value="Send Data!" />
        </form>';

        if( isset($_POST['title']) )
        {
          $sql = "INSERT INTO $addwhere (title, image, text ) VALUES ('$title','$image','$data')";
          if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
          } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

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
