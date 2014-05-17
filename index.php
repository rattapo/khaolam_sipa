
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Khaolam</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
    	<style type="text/css">
		.photo {
	margin: 30px;
	
	position: relative;
	width: 170px;
	height: 190px;
	float: left;
}
.photo img {
	background: #fff;
	border: solid 1px #ccc;
	padding: 4px;
}
.photo span {
	width: 20px;
	height: 18px;
	display: block;
	position: absolute;
	top: 12px;
	left: 12px;
	background: url(images/digg-style.gif) no-repeat;
}
.photo a {
	text-decoration: none;
}
	</style>
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
<?php 

// server config
$db_uname = "khaolam"; // khaolam root
$db_upass = "khaolam";//  1234
$db_host = "localhost"; //
$db_name = "khaolam"; //  kaolam


/*
// local config
$db_uname = "root"; // khaolam 
$db_upass = "1234";//  1234
$db_host = "localhost"; //
$db_name = "kaolam"; //  kaolam
*/


$link = mysql_connect($db_host, $db_uname, $db_upass);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db($db_name, $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

mysql_query("Set names 'utf8'");
$query = "SELECT * FROM master_comment";
//$result = mysql_query($link,"SELECT * FROM master_comment");
$result = mysql_query($query);
$new_array[] = $row;

?>
	<!--==============================header=================================-->
    <header>

        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="index.html">socce<strong>r</strong></a>
                            <span>commentator</span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" method="post" enctype="multipart/form-data">
                            <fieldset>	
                                <div class="search-field">
                                    <input name="search" type="text" />
                                    <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>	
                                </div>						
                            </fieldset>
                        </form>
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="gallery p3">
                            	<div class="wrapper indent-bot">
                                    <div id="gallery" class="content">
                                       <div class="wrapper">
                                           <div class="slideshow-container">
                                                <div id="slideshow" class="slideshow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div >
 <?php 
 	while ($row = mysql_fetch_array($result)) {
	//echo $row['c_id'];
	//echo $row['c_name'];
	//echo $row['c_pict']; 
?>
 <div class="photo">
	<a href="#"><span></span><img src="picture/<?php echo $row['c_pict'];?>" alt="image" /></a><h4><?php echo $row['c_name'];?><br/>
   	ฉายา/ชื่อเล่น : <?php echo $row['c_nick'];?></h4>
</div>
<?php }?>                        
</div>
                                </div>
                                <div class="inner">
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12">
                	
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
   
    
</body>
</html>

