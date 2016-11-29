<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {

    public  function index(){


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


        
        $goods = M('goods');
        $p = I('p',1,int);
        $limit = 8;//每页数据
        $list = $goods->order('goodsTime')->page("$p,$limit")->select();
        foreach($list as $key=>$val)
        {
            $list[$key]['goodsdes'] = htmlspecialchars_decode($val['goodsdes']);
            $list[$key]['goodsdes'] = str_replace("\\\"", '"', $list[$key]['goodsdes']);
            $list[$key]['goodsdes'] = str_replace("\\'", "'", $list[$key]['goodsdes']);
        }
        $count = $goods->where("goodsCheck = '1'")->count();
        $Page = new \Think\Page($count,$limit);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }
}