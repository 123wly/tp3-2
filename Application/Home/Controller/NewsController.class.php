<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller{
	public function read(){
		$New=M('New');
		if(isset($_GET['id'])){
			//
			$data=$New->find($_GET['id']);
		}elseif(isset($_GET['neme'])){
			//
			$data=$Nwe->getByName($_GET['name']);

		}
		$this->data=$data;
		$this->display();
	}
}