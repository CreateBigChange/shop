<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index()
	{
		$this->display();
	}
	public function login()
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql="
			select 
				*
			from
				user_info
			where
				username='".$username."' and password='".$password."'";
		
		$model =M();
		$p=$model->query($sql);
		if($p!=false)
		{
				$_SESSION['id']=$p[0]['id'];
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$this->success("登陆成功！",U('index/index'));
		}
		else
		{
			$this->error("账号或者密码错误！");
		}
	}
}
?>