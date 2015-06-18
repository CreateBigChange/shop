$(document).ready(function(){

	$(".btn-register").click(function(){
		var  email=$(".register_mail").val();
		var  userName=$(".register_username").val();
		var  passWord=$(".register_pws1").val();
		var  passWordAgain=$(".register_pws2").val();
		var  ajax_url=app+"/home/Index/check";
		//记住 1 获取表单内容的方法 用val()
		//记住 2 thinkphp里面的绝对路径的问题 在shop的外面
		//注册的输入检测		
		if(userName==""||passWord==""||passWordAgain=="")
		{
			alert("输入不能为空！！");
			exit();
		}
		else
		{
			if(passWord!=passWordAgain)
			{
				alert("两次密码输入不同！！");
				exit();
			}
		}
		//ajax的形成
		$.ajax({
		type:"POST",
		url:ajax_url,
		data:{username:userName,password:passWord,email:email},
		success:function(data){
			if(data=="1")
			{
				alert("失败");
				$(".close").click();
				
			}
			else
			{
				alert("成功");
				$(".close").click();
				window.location.reload();
			}
		}
		})
	})

	//用户登陆的ajax
	$(".btn-login").click(function(){
	
		var useName = $(".email").val()
		
		var passWord = $(".psw").val();
		var ajax_url = app+"/home/Index/login";
		//判断输入不可以为空
		if(useName==""||passWord=="")
		{
			alert("输入不可以为空!");
			exit();
		}
		//ajax判断登陆的密码是不是正确
		$.ajax({
		type:"POST",
		url:ajax_url,
		data:{username:useName,password:passWord},
		success:function(data){
			if(data=="1")
			{
				alert("登陆成功");
				$(".close").click();
			}
			else
			{
				alert("失败，账号不存在");
				$(".close").click();
			}
		}
		})
	})
	//分类的js
	$(".mouse").mouseover(function(){
		var kind=$(this).attr("kind");
		url=app+"/home/Index/kind";
		
		$.ajax({
			type:"post",
			data:{kind:kind},
			url:url,
			success:function(data)
			{
				
				var str="";
				str+='<div class="good">';
				for(var i=0;i<data.length;i++)
				{
					str+='<div class="goods"><div class="goods-img"><a href="'+pic_url+'/detail.html?id='+data[i].id+'"><img class="goods_pic" src="'+public_url+'/img/'+data[i].pic+'" /></a></div ><div class="goods-discription"> '+data[i].title+'</div> <span class="price"> '+data[i].price+'￥<span class="money"></span></span></div>';
				}
				str+='</div>';
				$(".mid-z").html(str);
				
				
			},
			error:function(){
				alert("error");
			}
		})
		
		
	})
	//搜索
	$("#search").click(function(){
		search_content=$(".search_input").val();
		url=app+"/home/Index/search";
		$.ajax({
			type:"post",
			data:{search_content:search_content},
			url:url,
			success:function(data){
				var str="";
				str+='<div class="good">';
				for(var i=0;i<data.length;i++)
				{
					str+='<div class="goods"><div class="goods-img"><a href="'+pic_url+'/detail.html?id='+data[i].id+'"><img class="goods_pic" src="'+public_url+'/img/'+data[i].pic+'" /></a></div ><div class="goods-discription"> '+data[i].title+'</div> <span class="price"> '+data[i].price+'￥<span class="money"></span></span></div>';
				}
				str+='</div>';
				$(".mid-z").html(str);
			},
			error:function()
			{
				
			}
		})
	})
})