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
		
		<!--uikit前端框架的导入-->
			

			<link type="text/css" rel="stylesheet" href="/shop/Public/uikit/css/uikit.min.css" />
			<link type="text/css" rel="stylesheet" href="/shop/Public/uikit/css/uikit.almost-flat.min.css" />
			<link type="text/css" rel="stylesheet" href="/shop/Public/uikit/css/uikit.gradient.min.css" />
		<!--uikit前端框架的导入-->
		
		<!--首页css导入-->
			<link type="text/css" rel="stylesheet" href="/shop/Public/css/detail.css" />
		<!--首页css导入-->
		
		<!--首页js导入-->
			<script src="/shop/Public/js/detail.js"></script>
		<!--首页js导入-->
		
	</head>
	<script>
		var app="/shop/index.php"; 
	</script>
	<body>
		<div class="head">
			<div class="login"><a href="<?php echo U('Login/index');?>">登陆</a></div>
			<div class="register"><a href="<?php echo U('Register/index');?>">注册</a></div>
			<div class="bage"><a href="<?php echo U('Shop/index');?>">我的购物车</div>
		</div>
		<div class="body">
			<div class="left">
				<img src="/shop/Public/img/TB12ud2HpXXXXXRXXXXXXXXXXXX_!!889117682-0-tejia.jpg">
			</div>
			<div class="right">
				<div class="price">
					<span><h3>单价</h3><div class="juti_price"><?php echo ($goods[0]["price"]); ?></span></div>
				</div>
			
				<div class="data">
					<span><h3>库存</h3><div class="juti_data"><?php echo ($goods[0]["remain"]); ?></span></div>
				</div>
				<div>
				<span>数量</span></br>
					<div class="shuliang">
						<a href="javascript:void(0)" class="reduce">	
							-&nbsp;&nbsp;&nbsp;&nbsp;
						</a>
						<span id="data">5</span>
						<a href="javascript:void(0)" class="add">
							&nbsp;&nbsp;&nbsp;&nbsp;+
						</a>
					</div>
				</div>

				<div class="button">
					<button id="addToBage">加入购物车</button> <button href="<?php echo U('Shop/index');?>">支付</button>
			
				</div>
			
					

			</div>
			
		</div>
		<div class="footer">
			
		</div>
	</body>
</html>