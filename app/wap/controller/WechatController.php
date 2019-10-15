<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/10/15
 * Time: 10:13
 */
namespace app\wap\controller;

use cmf\controller\HomeBaseController;

class WechatController extends HomeBaseController
{
    public function index()
    {
        $aryGet=$this->request->get();
        var_dump($aryGet);
        //Test11111
    }
    public function genWechatHandler(){
        $aryOptions=[];
        $aryOptions["token"]     = $this->mToken;
        $aryOptions["appid"]=$this->mAppId;
        $aryOptions["appsecret"]=$this->mAppSecret;
        $aryOptions['debug']=false;
        $aryOptions['logcallback']=false;
        $wechatHandler = new Wechat($aryOptions);
        return $wechatHandler;
    }

    public function createMenu(){
        $hmResult=["Result"=>false,"Msg"=>"菜单创建失败"];
        $strFileName=PHPCMS_PATH."caches/configs/mpMenu.txt";
        $strParam=file_get_contents($strFileName);
        $wechatHandler = $this->genWechatHandler();
        if (!empty($strParam)){
            $aryMenu=json_decode($strParam,true);
            if ($wechatHandler->createMenu($aryMenu)){
                $hmResult["Result"]=true;
                $hmResult["Msg"]="菜单创建成功";
            }
        }
        exit(json_encode($hmResult,JSON_UNESCAPED_UNICODE));
    }

    public  function getPageUrl(){
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $strUrl = "{$protocol}$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $strUrl;
    }
}