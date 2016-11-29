<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function main(){
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

    	$this->display();
    }

    public function userMes()
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

        $p = I('p',1,int);
        $limit = 25;//每页数据

        $name = $_GET['name'];
        $forum = M('forum');
        $count = $forum->where("autherid = '$name'")->count();
        $result = $forum -> where("autherid = '$name'")->page("$p,$limit")->select();
        $page = new \Think\Page($count,$limit);
        $page_show = $page -> show();
        $this->assign('pageshow',$page_show);
        $this->assign('result',$result);

        $this->display();
    }
}