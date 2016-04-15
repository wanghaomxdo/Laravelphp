function login(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if (username != '' && password != '') {
		console.log(username,password);
		document.getElementById("form").submit();
	}
}

function register(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var city = document.getElementById("city").value;
	var age = document.getElementById("age").value;
	var checkbox = document.getElementById('potoco_check');
	if (username != '' && password != '' && city != '' && age != '' && checkbox.checked) {
		console.log(username,password,city,age);
		document.getElementById("regform").submit();
	}
}

function forget(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var pwd = document.getElementById("pwd").value;
	var checkbox = document.getElementById('potoco_check');
	if (username != '' && password != '') {
		if (password != pwd) {
			document.getElementById("wron").innerHTML = "两次密码输入不一致";
		}else{
			console.log(username,password);
			document.getElementById("wron").innerHTML = "";
			document.getElementById("forgeform").submit();
		}
	}

}