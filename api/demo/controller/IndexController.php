<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: pl125 <xskjs888@163.com>
// +----------------------------------------------------------------------

namespace api\demo\controller;

use cmf\controller\RestBaseController;

class IndexController extends RestBaseController
{
    public function index()
    {
        $this->success('请求成功!', ['test'=>'test']);
    }
    public function other()
    {
        $htResult=["Result"=>false,"Msg"=>"数据搞定"];
       // $this->success('请求成功!', $htResult);
        $this->error("请求失败",$htResult);
    }
}
