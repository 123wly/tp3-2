<?php
return array(
	'URL_PARAMS_BIND'       =>  true,
	'URL_ROUTER_ON'   => true,
     
     
     //URL_DENY_SUFFIX=> 'pdf|ico|png|gif|jpg',
	
	//设置伪静态
	'URL_HTML_SUFFIX'=>'shtml',

	//定义路由规则----如没有特别定义则按照定义的顺序匹配路由规则
	'URL_ROUTE_RULES'=>array(   

	   //浏览器url上显示出来的=》实际上应该对应的地址内容 
	   //必须三个参数才能匹配
      'blog/:year\d/:month\d/:day\d' => array('Blog/archive', 'status=1'),  

       //完全匹配功能----------规则最后加上$符号之后，表示完整匹配当前的路由规则
       'blog/:id\d$'               => 'Blog/read'
       ),
	
	
);