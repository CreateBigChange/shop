<?php
	namespace Home\Controller;
	use Think\Controller;
	class RegisterController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		public function reg()
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$passwordagain=$_POST['passwordagain'];
			$email=$_POST['email'];
		
			$model = M();
			
			if($password!=$passwordagain)
			{
				$this->error("两次密码输入不同!");
			}
			else
			{
				$sql="select 
						*
					from 
						user_info
					where username=".$username." and password=".$password;

				$p=$model->query($sql);
				if($p!=false)
					{
						$this->error("用户已经存在!");
					}
					else
					{
						$sql="insert into user_info(username,password,email) value(".$username.",".$password.",'".$email."')";
						$p=$model->execute($sql);
						echo "qqq";
						if($p!=false)
						{
							$sql="select * from user_info where username=".$username;
							$p=$model->query($sql);
							$_SESSION["name"]=$p[0]['username'];
							$_SESSION["password"]=$p[0]['password'];
							$_SESSION["id"]=$p[0]['id'];
							$this->success("注册成功");
						}
					}
			}
			dump($_POST);
		}
	}
?>