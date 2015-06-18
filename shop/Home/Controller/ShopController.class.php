<?php
	namespace Home\Controller;
	use Think\Controller;
	class ShopController extends Controller
	{
		public function index()
		{
			$model=M();
		//	dump ($_SESSION['goods_id']);	
			for($i=0;$i<count($_SESSION['goods_id']);$i++)
			{
				
				$sql="select * from shop where id=".$_SESSION['goods_id'][$i][0];
				
				$goods[$i]=$model->query($sql);
				$goodsnum[$i]=$_SESSION["goods_num"]["num".$_SESSION['goods_id'][$i][0]];
			
				//echo $_SESSION["goods_num"]["num".$_SESSION['goods_id'][$i][0]];
				//echo "--------";
			}
			
			$this->assign("goods",$goods);
			$this->assign("goodsnum",$goodsnum);
			//dump($goods);
			//echo "------------------------------------";
			//dump($goodsnum);	
			$this->display();
		}
	}
?>