
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>登陆</title>
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('js/man.js') }}"></script>
</head>
<body>
<header class="public-header">
        <a href="javascript:history.go(-1);" class="a-back"><</a>
            <h2>登陆</h2>
</header>
<form class="public-form clearfix" id="form" method="post" action="login">
    <ul>
        <li>
            <span class="input-box"><input type="text" class="new-input" name="username" id="username" placeholder="请输入手机号码" maxlength="11"></span>
            <div class="pt5 red"></div>
        </li>
        <li>
            <span class="input-box"><input type="password" name="password" id="password" placeholder="密码"></span>
            <div class="pt5 red">{{ $users or '' }}</div>
        </li>
        <li>
            <div class="tbl-type"><span class="tbl-cell w50">
            <span class="checkbox-box clr6"><label><input type="checkbox" name="auto_login" id="auto_login">30天免登陆</label></span></span>
            <span class="tbl-cell w50 ar"><a href="{{ URL::asset('forgetto') }}" class="blue"> 忘记密码？</a></span></div></li>
        <li><a href="javascript:login();" id="loginSubmit" class="red-btn">登陆</a></li>
        <li><a href="{{ URL::asset('registerto') }}" class="darkgray-btn">快速注册</a></li>
    </ul>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>
</body>
</html>