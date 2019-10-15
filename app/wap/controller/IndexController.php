<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/10/15
 * Time: 9:16
 */
namespace app\wap\controller;

use cmf\controller\HomeBaseController;
use think\Db;

class IndexController extends HomeBaseController
{
    public function index()
    {
        $aryUser=Db::name('role')->where('1=1')->select();;
        $this->assign("list",$aryUser);
        return $this->fetch();
    }
}