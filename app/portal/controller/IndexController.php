<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/10/15
 * Time: 10:55
 */
namespace app\portal\controller;

use \cmf\controller\HomeBaseController;
use think\cache\driver\Redis;

class IndexController extends HomeBaseController
{
    public function index()
    {
        $rs=new Redis();
        //$rs->set("test","OK");
        echo $rs->get("test","test");
        //echo phpinfo();
        return $this->fetch();
    }
}