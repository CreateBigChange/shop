<?php
	namespace Home\Controller;
	use Think\Controller;
	class AdminController extends Controller
	{
		
		
		Public function verify(){
		$config = array(
		'fontSize' => 15, // 验证码字体大小
		'length' => 4, // 验证码位数
		'useNoise' => false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
		
		}
		public function index()
		{
			
			$this->display();
			
		}
		
		public function check()
		{
			if(check_verify($_POST["verify"]))
			{
				if($_POST['username']=='1' and $_POST["password"]="1")
				{
					$_SESSION["admin"]="1";//判断管理员的登陆
					$this->success("登陆成功","manager");
				}
				else
				{
					$this->error("密码或者账号错误!");
				}
			}
			else
			{
				$this->error("验证码错误!");
			}
			
		}
		public function manager()
		{
			if(!$_SESSION["admin"]==1)
			{
				$this->error("请先登陆哦！",'index');
			}
			$this->display();
		}
		public function add()
		{
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3145728 ;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = './Public/'; // 设置附件上传根目录
			$upload->savePath = 'img/'; // 设置附件上传（子）目录
			$upload->autoSub = false;
			$upload->saveName = 'time';
			// 上传文件
			$info = $upload->upload();
			if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
			}else{// 上传成功
			
			dump($_POST);
			//dump ($info);
			//echo $info['savepath'];
			//echo $info['photo']['savename'];
			
			$price=$_POST['price'];
			$remain=$_POST['remain'];
			$name=$_POST['name'];
			$title=$_POST['discription'];
			$pic=$info['photo']['savename'];
			$kind=$_POST['kind'];
			
			//echo $pirce.$remain.$name.$title.$pic.$kind;
			
			$model=M();
			$sql="insert into shop(price,remain,pic,title,kind,name)value('".$price."','".$remain."','".$pic."','".$title."','".$kind."','".$name."')";
			$p=$model->execute($sql);
			if($p!=false)
			{
				$this->success('上传成功！');
			}
			else
			{
				$this->success('上传失败！');
			}
			}
		}

	}
?>