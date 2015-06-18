$(document).ready(function(){
	$(".reduce").click(function(){
	var data=$("#data").text();
	if(data==1)
	{
		alert("数目不能为负数!");
		exit();
	}
	$("#data").text(data-1);
	})
	$(".add").click(function(){
		var data=$("#data").text();
		if(data>=100)
		{
			alert("库存不够")
			exit();
		}
			$("#data").text(parseInt(data)+1);
	})
	$("#addToBage").click(function(){
	
		good_id=window.location.search.match(/\d+/g);
		goods_num_id="goods"+good_id;
		//获取商品的cookie名字
		 num=$("#data").text();
		
		if($.cookie(goods_num_id))
		{
			$.cookie(goods_num_id,parseInt($.cookie(goods_num_id))+parseInt(num));	
		}
		else
		{
			$.cookie(goods_num_id,"1");
		}
			url=app+"/home/Index/shop";
			
		//异步存一份到session
		/**/
		$.ajax({
			type:"post",
			data:{id:good_id,num:$.cookie(goods_num_id)},
			url:url,
			success:function(data){
				alert(data);
			},
			error:function()
			{
				alert("error!");
			}
		})
		
	})
})