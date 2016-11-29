<?php
namespace Home\Controller;
use Think\Controller;
class DesController extends Controller {
    public function des(){

        $cookie = cookie('username');
        $session = session('username');
    

        if($cookie!=NULL){

            $this->assign('first',"<a href=" .'"'. "/index.php/Home/Index/userMesname={$cookie}" .'"'. ">"."{$cookie}"."</a>");
            $this->assign('second',"<a href=" .'"' . "/index.php/Home/Login/quit" .'"'. ">"."退出"."</a>");
        }else if($session != NULL){
            $this->assign('first',"<a href=" .'"'. "/index.php/Home/Index/userMes?name={$session}" .'"'. ">"."{$session}"."</a>");
            $this->assign('second',"<a href=" .'"' . "/index.php/Home/Login/quit" .'"'. ">"."退出"."</a>");
        }else{
            $this->assign('first',"<a href=" . "/index.php/Home/Login/login" . ">"."登录"."</a>");
            $this->assign('second',"<a href=" . "/index.php/Home/Login/register" . ">"."注册"."</a>");
        }
        



    	$id = I('id');
        $goods = M('goods');
        $list = $goods->distinct(true)->table(array('cww_goods'=>'g','cww_user'=>'u'))->field('g.goodsId,g.goodsTitle,g.goodsDes,g.goodsOwner,g.goodsSavename,u.username,u.phone')->where("goodsId= {$id}")->find();
    	$list['goodsdes'] = htmlspecialchars_decode($list['goodsdes']);
    	$list['goodsdes'] = str_replace("\\\"", '"', $list['goodsdes']);
    	$list['goodsdes'] = str_replace("\\'", "'", $list['goodsdes']);
        $this->assign('list',$list);
        $this->display();
    }
}
