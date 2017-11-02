<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>中解英才网 &lsaquo; 后台登录</title>
	<link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' href='<?php echo (ACSS_URL); ?>/styles.css' type='text/css' media='all' />
    <script type="text/javascript" src="<?php echo (AJS_URL); ?>/jquery.js"></script>
    <script src="<?php echo (AJS_URL); ?>/jquery.backstretch.min.js"></script>
<script>
jQuery(function(){
var imgsrc = "<?php echo (AIMG_URL); ?>";
var listArr = [imgsrc+"/1.jpg",imgsrc+"/2.jpg",imgsrc+"/3.jpg",imgsrc+"/4.jpg"];
jQuery('.login').backstretch(listArr, {fade: 1000,duration: 5000});});</script><style type="text/css">
body { background: none; }
#login {width: 320px;margin: auto;background: #FFF;margin-top: 8%;padding: 20px;border-radius: 3px;box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.2);}
.login form {margin-top: 0;margin-left: 0;padding:6px 24px 10px;-webkit-box-shadow:none;box-shadow:none;}
.login form .forgetmenot{float:none}
.login .button-primary{float:none;background-color: #494949;font-weight: bold;color: #fff;width: 100%;height: 40px;border-width: 0;border-color:none}
#login form p.submit{padding: 20px 0 0;}
.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover{background:#1F1F1F}
.wp-core-ui .button.button-large{height:40px;line-height:38px;font-size:16px;}
input{outline:none!important}
</style>
<style type="text/css">
       .login h1 a { background-image:url(<?php echo (AIMG_URL); ?>/logo.png);background-size: 120px;width: 120px;height: 120px;margin: 20px auto 15px; }
 </style><meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login login-action-login wp-core-ui  locale-zh-cn">
		<div id="login">
		<h1><a href="http://wx.81zjyc.com" title="中解英才网" tabindex="-1">中解英才网</a></h1>
	
<form name="loginform" id="loginform" action="<?php echo U('Webadmin/index/login');?>" method="post">
	<p>
		<label for="user_login">用户名或电子邮件地址<br />
		<input type="text"id="user_login" name="username" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">密码<br />
		<input type="password" name="password" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<!-- <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 记住我的登录信息</label></p> -->
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" />
		<input type="hidden" name="redirect_to" value="http://wx.81zjyc.com/admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<!-- <p id="nav">
	<a href="#">忘记密码？</a>
</p> -->

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>