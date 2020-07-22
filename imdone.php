  <section id="container">
    <?php
    require_once("conn.php");
    @$ad = $_POST['ad'];
    @$soyad = $_POST['soyad'];
    @$dersad = $_POST['dersad'];
    @$fad = $_POST['fad'];
    echo '
    <style>
    .css-input {
         padding: 3px;
         font-size: 34px;
         border-width: 1px;
         border-color: #ffffff;
         background-color: #FFFFFF;
         color: #000000;
         border-style: hidden;
         border-radius: 38px;
         box-shadow: 0px 0px 14px rgba(233,37,106,.62);
         text-shadow: -50px 0px 0px rgba(255,255,255,.75);
    }
     .css-input:focus {
         outline:none;
    }
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
	font-family:arial;
	font-size:15px;
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
}
</style>

    <br /><br /><h1 style="color: #e6275c;"> Send your project! </h1><br /><br /><br />
    <form action="?get=imdone#container" method="post">
        <h4 style="color: #e6275c;">Name: 	&nbsp;	&nbsp; <input type="text" name="ad" class="css-input"  style="position:relative; left:30px;"/></h4><br /><br /><br />
        <h4 style="color: #e6275c;">Surname: 	&nbsp;	&nbsp; <input type="text" name="soyad" class="css-input" style="position:relative; left:20px;" /></h4><br /><br /><br />
        <h4 style="color: #e6275c;">Exercise title:	&nbsp;	&nbsp; <textarea name="dersad" class="css-input"></textarea><br /><br /><br /></h4>
        <h4 style="color: #e6275c;">File: 	&nbsp;	&nbsp;<input type="file" name="fad"  style="position:relative; left:120px;" /><br /><br /></h4>
        <input type="submit" name="submit" class="classname" value="Send us!" /><br /><br />
    </form>';

    if( empty($_POST['ad'])|| empty($_POST['soyad'])
    || empty($_POST['dersad']) || empty($_POST['fad']) )
    {
      echo "<h5 style='color: #e6275c'>*Dont forget to fill every box!</h5>";

      } else {
        $sql = "INSERT INTO depo (ad, sad, dersad,fad ) VALUES ('$ad','$soyad','$dersad','$fad')";
        if (mysqli_query($conn, $sql)) {
              echo "<h5 style='color: #e6275c'>New record created successfully</h5>";
      }

    }

     ?>
   </section>
