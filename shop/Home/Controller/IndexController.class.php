<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	
	
	  if($_SESSION['username']!="")
	  {
		$username=$_SESSION['username'];
		$this->assign("username",$username);
	  }
	  //罗列商品5类
	  $model=M();
	  for($i=1;$i<=5;$i++)
	  {
				$sql="select * from shop where remain>0 and kind=".$i;
				$goods[$i]=$model->query($sql);
	  }	
		$this->assign("goods",$goods);
      $this->display();
    }
	public function check()
	{
		//注册时的函数
		$userName=$_POST['username'];
		$passWord=$_POST['password'];
		$email=$_POST["email"];	
		
		$Model=M();
		$sql="
			select
				* 
			from 
				user_info 
			where 
				username='".$userName."' and password =".$passWord;
		$p=$Model->query($sql);
		if($p==true)
		{
			$data="1";//表示失败，账号已存在
		}
		else
		{
			$data="0";//表示成功
			$sql="insert into user_info(username,password,email)values('".$userName."','".$passWord."','".$email."')";
			$p=$Model->execute($sql);
			
			
			//注册之后不需要在登陆
			
			$sql="
			select
				* 
			from 
				user_info 
			where 
				username=1 and password =1";
				
			$p=$Model->query($sql);
			
			$_SESSION['id']=$p[0]['id'];
			$_SESSION['username']=$userName;
			$_SESSION['password']=$passWord;
				
		}
		$this->ajaxReturn($data,"json");
	}
	public function login()
	{

		//登陆时的函数
		$userName=$_POST['username'];
		
		$passWord=$_POST['password'];

		
		$Model=M();
		
		$sql="
			select
				* 
			from 
				user_info 
			where 
				username=1 and password =1";
		$p=$Model->query($sql);
		
		if($p!=false)
		{		
				$data="1";//表示成功，账号存在
				$_SESSION['id']=$p[0]['id'];
				$_SESSION['username']=$userName;
				$_SESSION['password']=$passWord;
		}
		else
		{
			$data="0";//表示失败
		}

		$this->ajaxReturn($data,'json');
		
	}
	public function detail()
	{
		
		$goodsId=$_GET["id"];
		
		$Model=M();
		$sql = "select 
						*
				from	
						shop	
				where id=".$goodsId;
		$good=$Model->query($sql);
		$this->assign("goods",$good);
		$this->display();
	}  
	public function kind()
	{
		$kind=$_POST['kind'];
		$model=M();
		$sql="
			select 
				* 
			from 
				shop
			where kind=".$kind;
		
		$goods=$model->query($sql);
		$data=$goods;
		$this->ajaxReturn($data,'json');
	}
	public function search()
	{
		$model = M();
		$info=$_POST["search_content"];
		$sql="select * from shop where  title like '%".$info."%'";
		
		$goods=$model->query($sql);
		
		$data=$goods;
		$this->ajaxReturn($data,'json');
	}
	public function shop()
	{
		
		$id=$_POST['id'];
		$num=$_POST['num'];
		$i=0;
		for(;$i<count($_SESSION["goods_id"]);$i++)
		{
			if($_SESSION["goods_id"][$i]==$id)
			{
				
				break;
			}
		}
		if($i>=count($_SESSION["goods_id"]))
		{
			$_SESSION["goods_id"][$i]=$id;
			
		}
		$id="num".$id[0];
		
		$_SESSION['goods_num'][$id]=$num;
		
		$data=$id;
		
		$this->ajaxReturn($data,'json');
		//购物车在session上的存储
	}
	public function admin()
	{
		 $this->display();
	}
}