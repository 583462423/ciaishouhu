<?php
namespace Home\Controller;
use Think\Controller;
class CampController extends Controller {

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

        
        $camp = M('camp');
        $p = I('p',1,int);
        $limit = 5;//每页数据
        $list = $camp->distinct(true)->order('uploaddate DESC')->where("type=1")->page("$p,$limit")->select();
        $count = $camp-> count();
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


    public function future()
    {
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

        
        $camp = M('camp');
        $p = I('p',1,int);
        $limit = 5;//每页数据
        $list = $camp->distinct(true)->order('uploaddate DESC')->where("type=0")->page("$p,$limit")->select();
        $count = $camp-> count();
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