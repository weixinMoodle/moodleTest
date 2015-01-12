<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1" />
	</head>
	<title>
		账号绑定
	</title>

	<style type="text/css">
	  table{
	  	text-align: center;
	  }
	   .main {
      position:absolute;         
      margin-top:10px;
	  left:35%;    
      width:300px;
      height:200px;
     }
	</style>

	<body>
		<form id = "main" name = "main" class="main" action="validateUser.php" method="post">
			<h1 align="center">账号绑定</h1>
			<div id = "binding" name = "binding" align="center">
				<table id = "table">
					<tr>
						<th>微信号：</th>
						<td><input type="text" id = "weixin_num" name="weixin_num" placeholder = "请输入微信号" onblur="checkWeixin()"></td>
					</tr>
					<tr>
						<th>moodle:</th>
						<td><input type="text" id = "username" name = "username" placeholder = "请输入moodle用户名" onblur = "checkMoodle()"></td>
					</tr>
					<tr>
						<th>moodle密码：</th>
						<td><input type = "password" id = "password" name="password" onblur="checkpwd()"></td>
					</tr>
				</table>
			</div>

			<div id = "description" name = "description" style="height:20px;font-size:14px;margin-left:20px;font-style:italic; ">
				<span>
					<?php echo $description;?>
				</span>
			</div>

			<div id = "button" style="text-align:center">
				<input type="submit" id = "submit" value="绑定" >
			</div>

		</form>

		<script type="text/javascript">
		function checkWeixin(){
			var weixin_num = document.getElementById("weixin_num").value;
			var tip = document.getElementById("description");
			if (weixin_num == "") {
				tip.innerHTML = "<font color = 'red'>微信号不得为空</font>";
				return false;
			}
			return true;
		}

		function checkMoodle(){
			var moodle_name = document.getElementById("moodle_name").value;
			var tip = document.getElementById("description");
			if (moodle_name == "") {
				tip.innerHTML = "<font color = 'red'>moodle用户名不得为空</font>";
				return false;
			}
			return true;
		}

		function checkpwd(){
	        var password=document.getElementById("password").value;
	        var tip=document.getElementById("description");
	        if(password==""){
	        	tips.innerHTML="<font color='red'>密码不得为空！</font>";
		        return false;
		
		}
		return true;
	
	}


		</script>
	</body> 
</html>
