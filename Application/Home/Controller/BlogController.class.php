<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller{
	public function read($id){
		echo 'id='.$id;
		
	}
	public function archive($year='2014',$month='10',$day='24'){
		echo 'year='.$year.'&mouth='.$month.'&day='.$day;
	}
	public function test(){
		echo "test<br/>";
		$url=U('Index/index@blog.thinkphp.cn',array('cate_id'=>1,'status'=>1),'xml');
		var_dump($url);
        //var_dump($_SERVER);
		$this->redirect('Index/test',null, 5, '页面跳转中...');
	}
}