<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
			<link type="text/css" rel="stylesheet" href="/shop/Public/css/login.css">
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
	</head>
	<body>
	<div class="log">
	<form class="form-horizontal form" role="form" method="post" action="<?php echo U('login');?>">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">璐﹀彿</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="firstname" name="username"
            placeholder="璇疯緭鍏ヨ处鍙�">
      </div>
   </div>
   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">瀵嗙爜</label>
      <div class="col-sm-10">
         <input type="password" class="form-control" id="lastname" 
       name="password"     placeholder="璇疯緭鍏ュ瘑鐮�">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <div class="checkbox">
            <label>
               <input type="checkbox"> 璇疯浣忔垜
            </label>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-default">鐧诲綍</button>
		 <button type="submit" class="btn btn-default">娉ㄥ唽</button>
      </div>
   </div>
   <div style="float:right;margin-right:100px;">
   <a href="">蹇樿瀵嗙爜</a>
   </div>
</form>
		</div>
	</body>
</html>