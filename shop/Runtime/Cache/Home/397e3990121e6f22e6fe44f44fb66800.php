<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<!--导入jquery-->
			<script src="/shop/Public/jquery/jquery.min.js">
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
			<link type="text/css" rel="stylesheet" href="/shop/Public/css/index.css" />
		<!--首页css导入-->
		<!--首页js导入-->
			<script src="/shop/Public/js/index.js"></script>
		<!--首页js导入-->
	</head>
	<script>
		var app="/shop/index.php"; 
		var public_url="/shop/Public";
		var pic_url="/shop/index.php/Home/Index";
	</script>
	<body>
	<div id="ok"></div>
	<!--登陆的模态框-->
	<div class="login-model modal fade" id="login" aria-hidden="true">
		<div class="login-title">
			<div class="login-head-title"><h3>登陆</h3></div>
			<div class="close main-close" data-dismiss="modal"><h3>X</h3></div>
			
		</div>
		<div class="login-input">
			<form>
				<input class="email" type="text"/>
				</br>
				<input class="psw" type="password">
				</br>
				<button class="btn btn-primary btn-login">登陆</button>
			</form>
		</div>
	</div>
	<!--登陆的模态框-->
	
	<!--注册的模态框-->
		<div id="register" class="register-modal modal fade" aria-hidden="true">
			<div aria-labelledby="myModalLabel" class="modal-header">
				<h3>用户注册</h3>
				<div class="close main-close" data-dismiss="modal"><h3>X</h3></div>
			</div>
			<div class="modal-body">
				<table>
					<form>
						<tr>
							<td>邮箱</td><td><input type="text" name="real_email" class="register_mail" /></td>
						</tr>
						<tr>
							<td>账号</td><td><input type="text" name="email" class="register_username" /></td>
						</tr>
						<tr>
							<td>密码</td><td><input type="password"  name="passwd1" class="register_pws1"/></td>
						</tr> 
						<tr>
							<td>密码确认</td><td><input type="password"  name="passwd2" class="register_pws2"/></td>
						</tr>
					</form>
						<tr>
							<td colspan="2"><button class="btn btn-primary btn-register">提交</button></td>
						</tr>
				</table>
				
			</div>
		</div>
	<!--注册的模态框-->
	
	<?php if(empty($username)): ?><div class="head">
			<div class="login" data-toggle="modal" data-target="#login">
				<a href="javascript:(void)">亲,请登陆</a>
			</div>
			<div class="register" data-toggle="modal" data-target="#register">
				免费注册
			</div>
			<div class="link">
				联系客服
			</div>
			<div class="bage" style="background:url(/shop/Public/img/shop.jpg) no-repeat;">
				<a href="<?php echo U('Shop/index');?>">我的购物车
			</div>		
		</div>
	<?php else: ?>
				<div class="head">
			<div class="login">
				亲,欢迎您的到来！<?php echo ($username); ?>
			</div>
			<div class="link">
				联系客服
			</div>
			<div class="bage" style="background:url(/shop/Public/img/shop.jpg) no-repeat;">
				我的购物车
			</div>		
		</div><?php endif; ?>

		
		
		<div id="mid">
			<div class="mid-top">
				<div class="logo"><img class="logo-img" src="/shop/Public/img/logo.jpg"></div>
				<div class="search" data-uk-dropdown>
					<div class="uk-autocomplete" data-uk-autocomplete="{source:'/shop/Public/search.json'}">
						<form class="uk-search" data-uk-search="" >
						<input class="uk-search-field search_input"  type="search" placeholder="search" name="search"/> 
						<button id="search" class="btn btn-primary " type="button">搜索</button>
						</form>
						
					</div>
					<div class="uk-dropdown">
					
					</div>
				</div>
			</div>
			<div class="mid-mid-top">
				<div class="small-mid-top">
					<div class="all">全部商品分类</div>
					<div class="other">
						<div class="sy">首页</div>
						<div class="food">食品</div>
						<div class="clother">服装</div>
						<div class="tuan">团购</div>
					</div>
				</div>
				<div class="mid-left">
					<ul>
						<span kind="1" class="book mouse"><li><h3><a href="javascript:void(0)">图书</a><s></s></h3></li></span>
						<span kind="2" class="phone mouse"><li><h3><a href="javascript:void(0)">手机家电</a><s></s></h3></li></span>
						<span kind="3" class="jiaju mouse"><li><h3><a href="javascript:void(0)">电脑办公</a><s></s></h3></li></span>
						<span kind="4" class="home mouse"><li><h3><a href="javascript:void(0)">家具,家居</a><s></s></h3></li></span>
						<span kind="5" class="cloth mouse"><li><h3><a href="javascript:void(0)">男装,女装</a><s></s></h3></li></span>
						<span kind="6" class="women mouse"><li><h3><a href="javascript:void(0)">个性化妆</a><s></s></h3></li></span>
						<span kind="7" class="footer mouse"><li><h3><a href="javascript:void(0)">鞋靴,女装</a><s></s></h3></li></span>
						<span kind="8" class="car mouse"><li><h3><a href="javascript:void(0)">整车,汽车用品</a><s></s></h3></li></span>
						<span kind="9" class="mother mouse"><li><h3><a href="javascript:void(0)">母婴</a><s></s></h3></li></span>
						<span kind="10" class="yingyang mouse"><li><h3><a href="javascript:void(0)">营养保健</a><s></s></h3></li></span>
					</ul>
				</div>
				<div class="mid-z">
<div id="myCarousel" class="carousel slide">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="/shop/Public/img/test.png" alt="First slide">
      </div>  
      <div class="item">
         <img src="/shop/Public/img/test.png" alt="Second slide">
      </div>
      <div class="item">
         <img src="/shop/Public/img/test.png" alt="Third slide"> 
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
				</div>
				<div class="mid-right">
					<div>
						<img src="/shop/Public/img/test1.jpg">
					</div>
					<div class="info">
						<div class="title">
							<h3>新闻中心</h3>
						</div>
						<div class="contetn">
							<ul>
								<li>新闻试例</li>
								<li>新闻试例</li>
								<li>新闻试例</li>
								<li>新闻试例</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="mid-button">
			
	<?php
 for($i=1;$i<=4;$i++) { ?>
			<div>
					<span>
						<h3>
						<?php  switch($i) { case 1:echo "1F通用家电"; break; case 2:echo "2F 书籍";break; case 3:echo "3F 服装";break; case 4:echo "4F 食品";break; } ?>
						</h3>
					</span>
			</div>
			<div class="good">
			<?php
 for($j=0;$j<count($goods[$i]);$j++) { ?>
					<div class="goods">
							<div class="goods-img">
								<a href="/shop/index.php/Home/Index/detail.html?id=<?php echo $goods[$i][$j]['id']?>"><img class="goods_pic" src="/shop/Public/img/<?php echo $goods[$i][$j]['pic']?>" /></a>
							</div >
							<div class="goods-discription">
								<?php echo $goods[$i][$j]['title']?>
							</div>
							<span class="price">
								￥<span class="money"><?php echo $goods[$i][$j]['price']?></span>
							</span>
					</div>
			<?php } ?>
			</div>
		<?php } ?>
			
		</div>
		<div id="footer">
			
		</div>
	</body>
</html>