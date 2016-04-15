
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>找回密码</title>
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('js/man.js') }}"></script>
</head>
<body>
<header class="public-header">
        <a href="javascript:history.go(-1);" class="a-back"><</a>
            <h2>找回密码</h2>
</header>
<form class="public-form clearfix" id="forgeform" method="post" action="forgetpwd">
    <ul>
        <li>
            <span class="input-box"><input type="text" name="username" id="username" value="" placeholder="请输入注册时所使用的手机号码" maxlength="11"></span>
        </li>
        <li>
            <span class="input-box"><input type="text" name="usertype" id="usertype" placeholder="请输入短信验证码"></span>
        </li>
         <li>
            <span class="input-box"><input type="password" name="password" id="password" placeholder="英文或数字6-20个字符" maxlength="20"></span>
        </li>
         <li>
            <span class="input-box"><input type="password" name="pwd" id="pwd" placeholder="请再次输入新密码" maxlength="20"></span>
            <div class="pt5 red" id="wron">{{ $users or '' }}</div>
        </li>
        <li><a href="javascript:forget();" id="loginSubmit" class="blue-btn">提交</a></li>
    </ul>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>
</body>
</html>