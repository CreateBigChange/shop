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
		<center><h3>我的购物清单</h3></center>
		<center>
			<table>
				<tr>
					<td>商品名</td>
					<td>单价</td>
					<td>数量</td>
					<td>总价</td>
				</tr>
					<?php
 for($i=0;$i<count($goods);$i++) { ?>
							<tr>
								<td>
									<?php echo $goods[$i][0]["name"];?>
								</td>
								<td>
									<?php echo $goods[$i][0]["price"];?>
								</td>
								<td>
									<?php echo $goodsnum[$i];?>
								</td>
								<td>
									<?php echo $goods[$i][0]["price"]*$goodsnum[$i];?>
								</td>
							</tr>
						<?php } ?>
			</table>
			<button class="btn btn-success" style="color:#ffffff">支付</button>
		</center>
	</body>
</html>