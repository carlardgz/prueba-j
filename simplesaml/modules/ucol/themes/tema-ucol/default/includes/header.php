<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
<style>
/*#iniciosesion h2 {font-size:13px;}
.contiene {width:500px;}
*/
</style>
<link href="/simplesaml/imglogin/login.css" rel="stylesheet" type="text/css"> 
<link rel="icon"  type="image/png"  href="/favicon.ico">
<script type="text/javascript" src="/simplesaml/imglogin/jquery.js" ></script> 
<script type="text/javascript" src="/simplesaml/imglogin/md5.js" ></script> 
<link rel="stylesheet" type="text/css" href="/simplesaml/imglogin/jquery-ui-1.8.5.custom.css" media="screen" />
<script src="/simplesaml/imglogin/jquery-ui-1.8.5.custom.min.js"  type="text/javascript"></script>
<script src="/simplesaml/imglogin/federacion.js"  type="text/javascript"></script>
<?php if(strpos( $_SERVER['PHP_SELF'],"loginuserpass.php")>0 && !isset($_GET["pass"]) ){ ?>
<script type="text/javascript"> 
 $(document).ready(function(){
	$('.login td:nth-child(1),.login td:nth-child(4)').hide();
	$('.numero td:nth-child(2)').hide();
   	$('.login').append('<tr><td><input type="submit" tabindex="4" class="btn" value="Iniciar sesi&oacute;n" /></td></tr>');	
	$('form[name="f"]').submit(function() {			
		if ($("#username").attr("value") == "") {alert("Debe indicar su correo de UCOL (incluido @ucol.mx)");return false;}
		if ($("#password").attr("value") == "") {alert("Debe indicar contraseña de su correo @ucol.mx");return false;}
		$("#password").attr("value",hex_md5($("#password").attr("value")))
		return true;
	});
});
</script>
<?php }?> 
</head>
<body><div class="logosined"> 
<div class="contiene"> 
<div class="barralogo"><img src="/simplesaml/imglogin/UdClog.png"></div> 
<div id="iniciosesion">
<div class="reducir">