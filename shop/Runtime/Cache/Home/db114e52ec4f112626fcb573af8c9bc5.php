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
		<link rel="stylesheet" type="text/css" href="/shop/Public/css/findpw.css">
	</head>
	<body>
		<div class="findpw">
	<form class="form-horizontal form" role="form">
   <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">邮箱</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="firstname" 
				placeholder="请输入邮箱">
		</div>
	</div>


   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
		 <button type="submit" class="btn btn-default">提交</button>
      </div>
   </div>

	</form>
		</div>
	</body>
</html>