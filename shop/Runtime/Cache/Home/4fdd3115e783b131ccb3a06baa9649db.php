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
	</head>
	<body>
		<center>
			<h3>
				货物信息管理中心
			</h3>	
		</center>
		<center>
		<div style="width:300px;height:300px;">
			<form enctype="multipart/form-data" method="post" action="<?php echo U('add');?>">
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label">商品名</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="name"  name="name"
						placeholder="商品名">
					</div>
				</div>
								<div class="form-group">
					<label for="price" class="col-sm-4 control-label">价格</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="price"  name="price"
						placeholder="价格">
					</div>
				</div>
				<div class="form-group">
					<label for="remain" class="col-sm-4 control-label">库存</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="remain"  name="remain"
						placeholder="库存">
					</div>
				</div>
								<div class="form-group">
					<label for="discription" class="col-sm-4 control-label">描述</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="discription"  name="discription"
						placeholder="描述说">
					</div>
				</div>
					<div class="form-group">
					<label for="kind" class="col-sm-4 control-label">类别</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="kind"  name="kind"
						placeholder="商品名">
					</div>
				</div>
				<div class="form-group">
					<label for="pic" class="col-sm-4 control-label">图片</label>
					<div class="col-sm-8">
						<input type="file" class="form-control" id="pic"  name="photo"
						placeholder="商品名">
					</div>
				</div>
				<button class="btn btn-success" type="submit" style="color:#ffffff;">提交
				</button>
			</form>
			</div>
		</center>
	</body>
</html>