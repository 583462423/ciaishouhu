<?php
namespace Home\Controller;
use Think\Controller;
class StarController extends Controller {

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

        
        $star = M('star');
        $p = I('p',1,int);
        $limit = 3;//每页数据
        $list = $star->distinct(true)->order('uploaddate DESC')->page("$p,$limit")->select();
        $count = $star-> count();
        $page = new \Think\Page($count,$limit);
        $page = $page -> show();
        foreach($list as $key=>$val)
        {
            //$reply_list[$key]['content'] = htmlspecialchars_decode($val['content']);
            $list[$key]['des'] = str_replace("\n", "<br>", $list[$key]['des']);
            $list[$key]['des'] = str_replace(' ', "&nbsp;", $list[$key]['des']);
        }
        $this->assign('page',$page);
        $this->assign('list',$list);
        $this->display();
    }
}