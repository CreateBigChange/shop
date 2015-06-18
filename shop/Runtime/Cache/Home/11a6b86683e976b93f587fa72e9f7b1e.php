<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
			<link type="text/css" rel="stylesheet" href="/shop/Public/css/login.css">
				<!--����jquery-->
			<script src="/shop/Public/jquery/jquery.min.js">
			</script>
			<script src="/shop/Public/jquery/jquery.cookie.js">
			</script>
		<!--����jquery-->
		
		<!--����boostrap���-->
			<script src="/shop/Public/bootstrap/js/bootstrap.min.js">
			</script>
			<link type="text/css" rel="stylesheet" href="/shop/Public/bootstrap/css/bootstrap.min.css" />
		<!--����boostrap���-->
	</head>
	<body>
	<div class="log">
	<form class="form-horizontal form" role="form" method="post" action="<?php echo U('login');?>">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">账号</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="firstname" name="username"
            placeholder="请输入账号">
      </div>
   </div>
   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
         <input type="password" class="form-control" id="lastname" 
       name="password"     placeholder="请输入密码">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <div class="checkbox">
            <label>
               <input type="checkbox"> 请记住我
            </label>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-default">登录</button>
		 <button type="submit" class="btn btn-default">注册</button>
      </div>
   </div>
   <div style="float:right;margin-right:100px;">
   <a href="">忘记密码</a>
   </div>
</form>
		</div>
	</body>
</html>