<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<!--导入jquery-->
			<script src="/shop/Public/jquery/jquery.min.js">
			</script>
			<script src="/shop/Public/jquery/jquery.cookie.js">
			</script>
		<!--导入jquery-->
		
		<!--导入boostrap框架-->
			<script src="/shop/Public/bootstrap/js/bootstrap.min.js">
			</script>
			<link type="text/css" rel="stylesheet" href="/shop/Public/bootstrap/css/bootstrap.min.css" />
		<!--导入boostrap框架-->	
		<link rel="stylesheet" type="text/css" href="/shop/Public/css/register.css">
	</head>
	<body>
		<div class="register">
<form class="form-horizontal form" role="form" method="post" action="<?php echo U('reg');?>">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">用户名</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="firstname"  name="username"
            placeholder="输入账号">
      </div>
   </div>   
   <div class="form-group">
      <label for="email" class="col-sm-2 control-label">邮箱</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="email"  name="email"
            placeholder="输入邮箱">
      </div>
   </div>
   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
         <input type="password" class="form-control" id="lastname"  name="password"
            placeholder="输入密码">
      </div>
   </div>
   
   <div class="form-group">
      <label for="lastNameAgain" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
         <input type="password" class="form-control" id="lastnameagain"  name="passwordagain"
            placeholder="输入密码">
      </div>
   </div>
  
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
		 <button type="submit" class="btn btn-default">注册</button>
      </div>
   </div>
   
</form>
		</div>
	</body>
</html>