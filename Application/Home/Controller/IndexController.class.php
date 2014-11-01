<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function index(){
       echo "开始php学习之旅！"."<br/>";
       //C函数读取的配置文件是------项目下的优先级最高的配置项
       $model=C('URL_MODEL');
       var_dump($model);

       $type=C('USER_CONFIG.USER_TYPE');
       var_dump($type);
       
       C('DATA_CACHE_TIME',60);
       echo C('DATA_CACHE_TIME');

    }
      //前置操作方法
    public function _before_test(){
          echo 'test---before<br/>';  
            }

    public function test(){
    	echo 'test<br/>';
      var_dump(I('server.PATH'));
    }

    //后置操作方法    
    public function _after_test(){      
      echo 'test-----after<br/>';    
    }
}