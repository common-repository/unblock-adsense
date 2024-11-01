<style>
h1 {
color:#cc4c4c !important; 
text-align:center !important; 
margin:50px 0px 30px 0px !important; 
font-size:30px !important;
}
h3 {
color:#cc4c4c !important; 
}
*:focus {
outline: 0;
}
.asub00TXT {
padding:10px 0px 20px 0px;
width:calc(100% - 20px);
font-weight:bold !important;
border-bottom:1px #ccc dashed !important;
margin-bottom:20px;
}
.asub00_b1, .asub00_b2 {
text-align:center !important; 
display:inline-block !important;
width:49% !important;
}
div.asub00_b1 > form > textarea, div.asub00_b2 > form > textarea {
width:98% !important;
height:500px !important;
}
.asub00_b1 input, .asub00_b2 input {
	width:90px !important;
	text-align:center !important;
	display:inline-block !important;
	margin:10px 4px !important;
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff !important;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff !important;
	box-shadow:inset 0px 1px 0px 0px #ffffff !important;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9)) !important;
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%) !important;
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%) !important;
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%) !important;
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%) !important;
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0) !important;
	background-color:#f9f9f9 !important;
	-moz-border-radius:6px !important;
	-webkit-border-radius:6px !important;
	border-radius:6px !important;
	border:1px solid #dcdcdc !important;
	display:inline-block !important;
	cursor:pointer !important;
	color:#666666 !important;
	font-family:Trebuchet MS !important;
	font-size:12px !important;
	font-weight:bold !important;
	padding:6px 24px !important;
	text-decoration:none !important;
	text-shadow:0px 1px 0px #ffffff !important;
}
.asub00_b1 input:hover, .asub00_b2 input:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9)) !important;
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%) !important;
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%) !important;
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%) !important;
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%) !important;
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%) !important;
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0) !important;
	background-color:#e9e9e9 !important;
}
.asub00_b1 input:active, .asub00_b2 input:active {
	position:relative !important;
	top:1px !important;
}
#credit {text-align:center; font-weight:bold; margin:110px 0px 20px 0px;}
</style>

<h1>AdSense Unblocker Settings</h1>
<div class="asub00TXT">
<p>This page allows you to modify the appearance of the message that is displayed to AdBlock users.</p>
<p>The original CSS and HTML can be restored at any time with the click of a button, so don't be afraid to experiment.</p>
</div>
<div class="asub00_b1">
<h3>CSS</h3>
<?php


$edits = $_POST['text_1'];


if(isset($_POST['submit_1']))
{
    $file = fopen('../wp-content/plugins/adsenseunblock/css/adunblock.css','w+');
    fwrite($file,$edits);
    fclose($file); 
    print_r(error_get_last());
}

$originalCSS = file_get_contents(plugins_url('css/original.txt',__FILE__ ));

if(isset($_POST['restore_1']))
{
    $file = fopen('../wp-content/plugins/adsenseunblock/css/adunblock.css','w+');
    fwrite($file,$originalCSS);
    fclose($file); 
    print_r(error_get_last());
}

$text_1 = file_get_contents(plugins_url('css/adunblock.css',__FILE__ ));

?>


<form action= "" method="post" name="form">
<textarea name="text_1"><?php echo htmlspecialchars($text_1) ?></textarea>
<br>
<input type="submit" name="submit_1" value="Submit">
<input type="reset" name="reset_1" value="Reset">
<input type="submit" name="restore_1" value="Restore">
</form>



</div>


<div class="asub00_b2">
<h3>HTML</h3>
<?php


$edits_2 = $_POST['text_2'];


if(isset($_POST['submit_2']))
{
    $file_2 = fopen('../wp-content/plugins/adsenseunblock/html/HTML.php','w+');
    fwrite($file_2,$edits_2);
    fclose($file_2); 
    print_r(error_get_last());
}

$originalHTML = file_get_contents(plugins_url('html/original.txt',__FILE__ ));

if(isset($_POST['restore_2']))
{
    $file_2 = fopen('../wp-content/plugins/adsenseunblock/html/HTML.php','w+');
    fwrite($file_2,$originalHTML);
    fclose($file_2); 
    print_r(error_get_last());
}

$text_2 = file_get_contents(plugins_url('html/HTML.php',__FILE__ ));

?>


<form action= "" method="post" name="form">
<textarea name="text_2"><?php echo htmlspecialchars($text_2) ?></textarea>
<br>
<input type="submit" name="submit_2" value="Submit">
<input type="reset" name="reset_2" value="Reset">
<input type="submit" name="restore_2" value="Restore">
</form>



</div>

<div id="credit">
<p>Developed by <a href="http://www.joeltbennett.com/" target="_blank">Joel T. Bennett</a><p>
<p>Design & feature suggestions or bug/conflict reports can be sent <a href="mailto:me@joeltbennett.com?subject=RE: AdSense Unblocker Plugin">here</a>.</p>
</div>