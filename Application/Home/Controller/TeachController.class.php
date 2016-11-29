<?php
namespace Home\Controller;
use Think\Controller;
class TeachController extends Controller {
    public function smallcourse(){

    	$this->check();
        $course = M('course');
        $p = I('p',1,int);
        $limit = 8;//每页数据

        $small_list = $course->order('subject')->where("edulevel = '小学'")->page("$p,$limit")->select();//小学数据
        

        // foreach($list as $key=>$val)
        // {
        //     $list[$key]['goodsdes'] = htmlspecialchars_decode($val['goodsdes']);
        //     $list[$key]['goodsdes'] = str_replace("\\\"", '"', $list[$key]['goodsdes']);
        //     $list[$key]['goodsdes'] = str_replace("\\'", "'", $list[$key]['goodsdes']);
        // }

        $small_count = $course->where("edulevel = '小学'")->count();        
        $small_Page = new \Think\Page($small_count,$limit);
        $small_show = $small_Page->show();
        $this->assign('small_page',$small_show); 
        $this->assign('small_list',$small_list);
        

        $this->display();
    }

    public function middlecourse()
    {
        $this->check();
        $course = M('course');
        $p = I('p',1,int);
        $limit = 8;//每页数据
        $middle_list = $course->order('subject')->where("edulevel = '初中'")->page("$p,$limit")->select();//初中数据
        $middle_count = $course->where("edulevel = '初中'")->count();
        $middle_Page = new \Think\Page($middle_count,$limit);
        $middle_show = $middle_Page->show();
        $this->assign('middle_page',$middle_show); 
        $this->assign('middle_list',$middle_list);
        
        $this->display();
    }

    public function service(){
        $this->check();
    	$this->display();
    }

    public function teach(){
        $this->check();
        $this->display();
    }

    public function recommend(){
        $this->display();
    }

    public function check(){
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
    }
    public function subInfo()
    {
        $id = $_GET['id'];
        if($id == 1)
        {
            $data['type'] = "上门服务";
        }else
        {
            $data['type'] = "远程教育";
        }
        $server = M('server');
        $data['name'] = I('name');
        $data['age'] = I('age');
        $data['phoneNumber'] = I('phoneNumber');
        $data['grade'] = I('grade');
        $data['qq'] = I('qq');
        $data['province'] = I('province');
        $data['village'] = I('village');
        $data['country'] = I('country');

        if(($server-> where("name='{$data['name']}' and qq='{$data['qq']}'")->find())){
            echo '您已上交过，不要着急哦~';
        }else{
            $server->data($data)->add();
            echo "上交成功，请保持手机畅通，方便官方人士与您联系~";
        }
    }
}