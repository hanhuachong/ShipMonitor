<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/10/15
 * Time: 11:23
 */
namespace app\portal\controller;
use cmf\controller\AdminBaseController;
/**
 * Class AdminIndexController
 * @package app\portal\controller
 * @adminMenuRoot(
 *     'name'   =>'网站门户管理',
 *     'action' =>'default',
 *     'parent' =>'',
 *     'display'=> true,
 *     'order'  => 30,
 *     'icon'   =>'th',
 *     'remark' =>'站门户管理'
 * )
 */
class AdminIndexController extends AdminBaseController
{
    /*
     * 无需要登录
     * public function initialize()
    {
        //Override default
    }*/
    public function index(){
        return $this->fetch();
    }
}