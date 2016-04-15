
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>注册</title>
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('js/man.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/calendar.js') }}"></script>
</head>
<body>
<header class="public-header">
        <a href="javascript:history.go(-1);" class="a-back"><</a>
            <h2>注册</h2>
</header>
<form class="public-form clearfix" id="regform" method="post" action="register">
    <ul>
        <li>
            <span class="input-box"><input type="text" name="username" id="username" placeholder="请输入手机号码" maxlength="11"></span>
        </li>
        <li>
            <span class="input-box"><input type="text" name="usertype" id="usertype" placeholder="请输入短信验证码"></span>
        </li>
        <li>
            <span class="input-box"><input type="password" name="password" id="password" placeholder="英文或数字6-20个字符"></span>
        </li>
        <li>
            <span class="input-box"><input type="text" name="city" id="city" placeholder="请选择城市"></span>
        </li>
        <li>
            <span class="input-box"><input type="text" onClick="new Calendar().show(this);" name="age" id="age" placeholder="请选择你的生日" readonly></span>
            <div class="pt5 red">{{ $users or '' }}</div>
        </li>
        <li>
            <div class="tbl-type"><span class="tbl-cell w50">
            <span class="checkbox-box clr6"><label><input type="checkbox" name="auto_login" id="potoco_check">我已阅读并同意接受<a href="javascript:;" id="potoco" class="blue">会员协议</a></label></span></span>
        <li><a href="javascript:register();" id="registerSubmit" class="blue-btn">提交</a></li>
    </ul>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>
</body>
</html>