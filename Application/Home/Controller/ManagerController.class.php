<?php
namespace Home\Controller;
use Think\Controller;
class ManagerController extends Controller {
    public function manager(){
    	$this->check();

    	$this->display();
    }

    public function addGood()
    {
        $this->check();

        $this->display();
    }


    public function quit(){
    	cookie('manager_username',NULL);
    	session('manager_username',NULL);
    	$this->redirect('/Home/Index/main');
    }

    public function testLogin(){
    	$user = M('manager');
        $username = I('username');
        $password = md5(I('password'));
        $checked = I('check');
        $result = $user->where("username='{$username}'")->find();
        if(!$result){
        	echo '帐号不存在';
        }else{
        	if($result['password'] == $password)
        	{
        		if($checked == 'on'){
        			cookie('manager_username',$username,3600*24*7);
        		}
        		session('manager_username',$username);
        		echo 1;
        	}else{
        		echo '密码错误';
        	}
        }
    }

    public function managerLogin(){
    	$this->display();
    }

    public function addPicture(){
        $this->check();
        $this->display();
    }

    public function deletePic()
    {
        $this->check();
        $id = $_GET['id'];
        $pictures = M('pictures');
        $pictures -> where("id = $id") ->delete();
        $this->redirect('/Home/Manager/delPic');
    }
    public function delPic()
    {
        $this->check();
        $pictures = M('pictures');
        $p = I('p',1,int);
        $limit = 8;//每页数据
        $list = $pictures->distinct(true)->order('uploaddate DESC')->page("$p,$limit")->select();
        $count = $pictures-> count();
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

    public function addCourse(){
        $this->check();
       $this->display();
    }

    public function delete()
    {
        $this->check();
        $id = $_GET['id'];
        $course = M('course');
        $course -> where("id = $id") ->delete();
        $this->redirect('/Home/Manager/deleteCourse');
    }

    public function addCamp()
    {
        $this->check();
        $this->display();
    }

    public function changeCamp()
    {
        $this->check();

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

    public function futureChange()
    {
        $this->check();

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


    public function deleteCamp()
    {
        $this->check();
        $id = $_GET['id'];
        $camp = M('camp');
        $camp -> where("id = $id") ->delete();
        $this->redirect('/Home/Manager/changeCamp');
    }

    public function futureCamp()
    {
        $this->check();
        $this->display();
    }

    public function changePass()
    {
        $this->check();
        $id = $_GET['id'];
        $camp = M('camp');
        $data['type'] = 1;
        $camp -> where("id = $id") -> save($data);
        $this->redirect('/Home/Manager/futureChange');
    }

    public function changeFuture()
    {
        $this->check();
        $id = $_GET['id'];
        $camp = M('camp');
        $data['type'] = 0;
        $camp -> where("id = $id") -> save($data);
        $this->redirect('/Home/Manager/changeCamp');
    }

    public function deleteCourse(){
        $this->check();

        $course = M('course');
        $p = I('p',1,int);
        $limit = 10;//每页数据

        $list = $course->order('subject')->page("$p,$limit")->select();

        $count = $course->count();        
        $page = new \Think\Page($count,$limit);
        $show = $page->show();
        $this->assign('page',$show); 
        $this->assign('list',$list);
        $this->display();

    }

    public function subCourse(){
        $this->check();

        $user = M('course');
        $data['bookname'] = I('bookname');
        $data['booklink'] = I('booklink');
        $data['grade'] = I('grade');
        $data['subject'] = I('subject');
        $data['edulevel'] = I('edulevel');
        $user->data($data)->add();
        echo 添加成功;
    }

    public function starManager(){
        $this->check();
        $this->display();
    }

    public function delStar()
    {
        $this->check();
        $id = $_GET['id'];
        $star = M('star');
        $star -> where("id = $id") ->delete();
        $this->redirect('/Home/Manager/deleteStar');
    }

    public function deleteStar()
    {
        $this->check();
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


    

    public function pictureUpload(){
        $this->check();
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'png', 'jpeg', 'gif');// 设置附件上传类型
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->autoSub = false;   //自动使用子目录保存上传文件 默认为true
        $upload->hash = false;   //是否生成文件的hash编码 默认为true
        $upload->rootPath  =     'Public/pictures/'; // 设置附件上传根目录
        $info   =   $upload->uploadOne($_FILES['picture']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            $pictures = M('pictures');
            $data['des'] = I('des');
            $data['savename'] = $info['savename'];
            $data['uploaddate'] = date('Y-m-d H:i:s');
            $pictures -> add($data);
            $this->success('上传成功！');
        }
    }

    public function uploadFuture()
    {
        $this->check();
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'png', 'jpeg', 'gif');// 设置附件上传类型
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->autoSub = false;   //自动使用子目录保存上传文件 默认为true
        $upload->hash = false;   //是否生成文件的hash编码 默认为true
        $upload->rootPath  =     'Public/campimgs/'; // 设置附件上传根目录
        $info   =   $upload->uploadOne($_FILES['campimg']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            $camp = M('camp');
            $data['name'] = I('name');
            $data['des'] = I('des');
            $data['savename'] = $info['savename'];
            $data['uploaddate'] = date('Y-m-d H:i:s');
            $data['type'] = 0;
            $camp -> add($data);
            $this->success('上传成功！');
        }

    }

    public function upload(){
        $this->check();

        $id = $_GET['id'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'png', 'jpeg', 'gif');// 设置附件上传类型
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->autoSub = false;   //自动使用子目录保存上传文件 默认为true
        $upload->hash = false;   //是否生成文件的hash编码 默认为true
        // 上传文件
        if($id == 2){
             $upload->rootPath  =     'Public/campimgs/'; // 设置附件上传根目录
             $info   =   $upload->uploadOne($_FILES['campimg']);
         }else{
            $upload->rootPath  =     'Public/starimgs/'; // 设置附件上传根目录
            $info   =   $upload->uploadOne($_FILES['starimg']);
         }
        
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else if($id == 2){// 上传成功
            $camp = M('camp');
            $data['name'] = I('name');
            $data['des'] = I('des');
            $data['savename'] = $info['savename'];
            $data['uploaddate'] = date('Y-m-d H:i:s');
            $data['type'] = 1;
            $camp -> add($data);
            $this->success('上传成功！');
        }else{

            $star = M('star');
            $data['name'] = I('name');
            $data['des'] = I('des');
            $data['savename'] = $info['savename'];
            $data['uploaddate'] = date('Y-m-d H:i:s');
            $star -> add($data);
            $this->success('上传成功！');
        }
    }

    public function addMan()
    {
        $this->check();
        $this->display();
    }

    public function addManager()
    {
        $this->check();
        $manager = M('manager');
        $data['username'] = I('username');
        $data['password'] = md5(I('password'));

        $username= $data['username'];

        if($manager -> where("username = '$username'")->find()){
            echo '该帐号已被添加';
        }else{
            $manager -> add($data);
            echo 1;
        }


    }

    public function forumMan()
    {
        $this->check();

        $forum = M('forum');
        $p = I('p',1,int);
        $limit = 9;//每页数据
        $list = $forum->order('lastdate DESC')->page("$p,$limit")->select();
        $count = $forum-> count();
        $page = new \Think\Page($count,$limit);
        $page_show = $page -> show();
        $this->assign('pageshow',$page_show);
        $this->assign('list',$list);
        $this->display();

    }


    public function delForum()
    {

        /*$this->check();
        $id = $_GET['id'];
        $pictures = M('pictures');
        $pictures -> where("id = $id") ->delete();
        $this->redirect('/Home/Manager/delPic');*/
        $this->check();
        $id = $_GET['id'];
        $forum = M('forum');
        $reply = M('reply');

        $forum -> where("id = $id") ->delete();
        $reply -> where("forumid = '$id'") ->delete();
        $this->redirect('/Home/Manager/forumMan');
    }

    public function check(){
        $cookie = cookie('manager_username');
        $session = session('manager_username');

        if($cookie!=NULL){

            $this->assign('first',"<a href=" .'"'. "/index.php/Home/Index/userMes" .'"'. ">"."{$cookie}"."</a>");
            $this->assign('second',"<a href=" .'"' . "/index.php/Home/Manager/quit" .'"'. ">"."退出"."</a>");
        }else if($session != NULL){
            $this->assign('first',"<a href=" .'"'. "/index.php/Home/Index/userMes" .'"'. ">"."{$session}"."</a>");
            $this->assign('second',"<a href=" .'"' . "/index.php/Home/Manager/quit" .'"'. ">"."退出"."</a>");
        }else{
            $this->redirect('/Home/Manager/managerLogin','',3,'请先登陆!3秒自动跳转');
        }
    }



    public function uploadGood(){
        $cookie = cookie('manager_username');
        $session = session('manager_username');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'png', 'jpeg', 'gif');// 设置附件上传类型
        $upload->rootPath  =     'Public/GoodsImgs/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->autoSub = false;   //自动使用子目录保存上传文件 默认为true
        $upload->hash = false;   //是否生成文件的hash编码 默认为true
        // 上传文件
        $info   =   $upload->uploadOne($_FILES['goodsImg']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            
            $goods = M('goods');
            $data['goodsTitle'] = I('goodsTitle');
            $data['goodsDes'] = I('goodsDes');
            $data['goodsPrice'] = I('goodsPrice');
            $data['goodsSavename'] = $info['savename'];
            $data['goodsCheck'] = 0;
            $data['goodsTime'] = date('Y-m-d H:i:s');
            if($session != NULL){
                $data['goodsOwner'] = $session;
            }else if($cookie != NULL){
                $data['goodsOwner'] = $cookie;
            }
            $goods -> add($data);
            $this->success('上传成功！');
        }
    }

}