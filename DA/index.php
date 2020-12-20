<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<title>VKGK mobile</title>
	<link rel="stylesheet" href="CSS/style.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
	<!-- import icon font awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Import thư viện JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
// kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
var offset = 500;
// thời gian di trượt 0.75s ( 1000 = 1s )
var duration = 750;
$(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > offset)
$('#top-up').fadeIn(duration);else
$('#top-up').fadeOut(duration);
});
$('#top-up').click(function () {
$('body,html').animate({scrollTop: 0}, duration);
});
});
</script>
<div title="Về đầu trang" onmouseover="this.style.color='#590059'" onmouseout="this.style.color='#004993'" id="top-up">
<img src="Images/vedau.png" width="35px" height="auto"></img></div>
<style>
#top-up {
background:none;
font-size: 3em;
text-shadow:0px 0px 5px #c0c0c0;
cursor: pointer;
position: fixed;
z-index: 9999;
color:#004993;
bottom: 20px;
right: 15px;
display: none;
}
</style>
</head>

<div id='chiase'>
	<div class="fb-like" data-href="https://www.facebook.com/UngDungHaySinhVien/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

    <div style="margin:4px;">

        <div class='nut' id='google'>
     <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
     </script>
        <g:plusone size="tall"></g:plusone>
        </div>

    </div>
    <center>
    <div style="margin-bottom:2px;" class="fb-send" data-href="https://www.facebook.com/UngDungHaySinhVien/"></div></center>
</div>

<body>
<div class="Khungchua">
	<?php 
		include('admin/config.php');
		include('Code/header.php');
		include('Code/Menu.php');
		include('Code/content.php');
		include('Code/footer.php');
	 ?>	
</div>
<span style="cursor:pointer"></span><br>
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=0798820986f9b146f9f90b4192bd3eb3&data=eyJzc29faWQiOjUwMjk0NDIsImhhc2giOiI2MGRlZmYyYmZjMGVlMTBhMzA4MjRmMWQzYWUwMzQ5NSJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>	
<script>
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
</script>


</body>
</html>
