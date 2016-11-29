<?php
namespace Home\Controller;
use Think\Controller;
class ForumController extends Controller {

    public  function index(){
    	$this->check();

        $notice = M('notice');
        $notice_list =$notice -> order('id DESC')->select();
        $new_notice = $notice_list[0];
        $this->assign('notice',$new_notice);

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

    public function send(){
        $cookie = cookie('username');
        $session = session('username');

        if($session == NULL && $cookie == NULL){
            echo 2;
        }else{
            $forum = M('forum');
            $data['subject'] = I('subject');
            $data['title'] = I('title');
            $data['content'] = I('content');
            $data['autherid'] = $cookie==NULL ? $session : $cookie;
            $data['replynum'] = 0;
            $data['senddate'] = date("Y-m-d H:i:s", time());
            $data['lastdate'] = $data['senddate'];
            $data['viewnum'] = 0;
            $forum->data($data)->add();
            echo 1;
        }
    }

    
    public function foruminfo(){
        $this->check();
        $p = I('p',1,int);
        $limit = 9;//每页数据

        $id = $_GET['id'];
        $forum = M('forum');
        $reply = M('reply');
        $forum_list = $forum->where("id = ".$id)->select();
        $forum_list[0]['viewnum']++;
        $forum->save($forum_list[0]);
        $reply_list = $reply->order('floor')->where("forumid = ".$id)->page("$p,$limit") ->select();
        $count = $reply->where("forumid = ".$id)-> count();
        $page = new \Think\Page($count,$limit);
        $page_show = $page -> show();
        foreach($forum_list as $key=>$val)
        {
            //$reply_list[$key]['content'] = htmlspecialchars_decode($val['content']);
            $forum_list[$key]['content'] = str_replace("\n", "<br>", $forum_list[$key]['content']);
            $forum_list[$key]['content'] = str_replace(' ', "&nbsp;", $forum_list[$key]['content']);
        }

        foreach($reply_list as $key=>$val)
        {
            //$reply_list[$key]['content'] = htmlspecialchars_decode($val['content']);
            $reply_list[$key]['content'] = str_replace("\n", "<br>", $reply_list[$key]['content']);
            $reply_list[$key]['content'] = str_replace(' ', "&nbsp;", $reply_list[$key]['content']);

            $forumid = $reply_list[$key]['forumid'];
            $floor = $reply_list[$key]['floor'];
            
            $rtr = M('rtr');
            $rtr_list = $rtr -> order('date')->where("forumid='".$forumid."' and toFloor ='".$floor."'")->select();

            $reply_list[$key]['rtrlist'] = $rtr_list;
            
            //$reply_list[$key]['name'] = md5("forumid".$forumid."floor".$floor);
            //$this->assign($reply_list[$key]['name'],$rtr_list);
        }
        $this->assign('pageshow',$page_show);
        $this->assign('forumlist',$forum_list); 
        $this->assign('replylist',$reply_list); 
        $this->display();
    }

    public function recommend(){
        $this->check();

        $notice = M('notice');
        $notice_list =$notice -> order('id DESC')->select();
        $new_notice = $notice_list[0];
        $this->assign('notice',$new_notice);

        $forum = M('forum');
        $p = I('p',1,int);
        $limit = 9;//每页数据
        $list = $forum->order('replynum DESC')->page("$p,$limit")->select();
        $count = $forum-> count();
        $page = new \Think\Page($count,$limit);
        $page_show = $page -> show();
        $this->assign('pageshow',$page_show);
        $this->assign('list',$list);
        $this->display();
    }

    public function hot(){
        $this->check();
        
        $notice = M('notice');
        $notice_list =$notice -> order('id DESC')->select();
        $new_notice = $notice_list[0];
        $this->assign('notice',$new_notice);



        $forum = M('forum');
        $p = I('p',1,int);
        $limit = 9;//每页数据
        $list = $forum->order('viewnum DESC')->page("$p,$limit")->select();
        $count = $forum-> count();
        $page = new \Think\Page($count,$limit);
        $page_show = $page -> show();
        $this->assign('pageshow',$page_show);
        $this->assign('list',$list);
        $this->display();
    }

    public function rtr()
    {
        $cookie = cookie('username');
        $session = session('username');
       
        if($cookie ==null && $session == null)
        {
            $this->redirect('Home/Login/login','',2, '请先登录，页面跳转中...');
        }else{
            //向某人回复的界面
            $list[0] = array('forumid'=>I('forumid'),'floor'=>I('floor'),'toAuther'=>I('toAuther'));
            $this->assign('list',$list);
            $this->display();
        }
    }

    public function rtr_reply()
    {
        $cookie = cookie('username');
        $session = session('username');
        if($cookie ==NULL && session == NULL)
        {
            echo 2;
        }
        else if($cookie != NULL)
        {
            $reply['autherid'] = $cookie;
        }else{
            $reply['autherid'] = $session;
        }
        
        $RTR = M('rtr'); //reply to reply
        $reply['forumid'] = $_GET['forumid'];
        $reply['toFloor'] = $_GET['floor'];
        $reply['date'] = date("Y-m-d H:i:s", time());
        $reply['content'] = I('content');
        $reply['toAuther'] = $_GET['toAuther'];
        $RTR ->data($reply) ->add();
        echo 1;
    }

    public  function reply(){
        $cookie = cookie('username');
        $session = session('username');

        if($session == NULL && $cookie == NULL){
            echo 2;
        }else{
            $id = $_GET['id'];
            $forum = M('forum');
            $chose_forum = $forum->where("id = ".$id)->find();

            $reply = M('reply');
            $data['forumid'] = $_GET['id'];
            $chose_forum['replynum']++;
            $chose_forum['lastdate'] = date("Y-m-d H:i:s", time());
            $data['floor'] = $chose_forum['replynum'];
            $data['autherid'] = $cookie==NULL ? $session : $cookie;
            $data['content'] = I('content');
            $data['replydate'] = $chose_forum['lastdate'];


            $reply->data($data)->add();
            $forum ->save($chose_forum);
            echo 1;
            // $data['title'] = I('title');
            // $data['content'] = I('content');
            // $data['autherid'] = $cookie==NULL ? $session : $cookie;
            // $data['replynum'] = 0;
            // $data['senddate'] = date("Y-m-d H:i:s", time());
            // $data['lastdate'] = $data['senddate'];
            // $data['viewnum'] = 0;
            // $forum->data($data)->add();
            // echo 1;
        }
    }


    private function check(){
        $cookie = cookie('username');
        $session = session('username');

        if($cookie!=NULL){

            $this->assign('first',"<a href=" .'"'. "/index.php/Home/Index/userMes" .'"'. ">"."{$cookie}"."</a>");
            $this->assign('second',"<a href=" .'"' . "/index.php/Home/Login/quit" .'"'. ">"."退出"."</a>");
        }else if($session != NULL){
            $this->assign('first',"<a href=" .'"'. "/index.php/Home/Index/userMes" .'"'. ">"."{$session}"."</a>");
            $this->assign('second',"<a href=" .'"' . "/index.php/Home/Login/quit" .'"'. ">"."退出"."</a>");
        }else{
            $this->assign('first',"<a href=" . "/index.php/Home/Login/login" . ">"."登录"."</a>");
            $this->assign('second',"<a href=" . "/index.php/Home/Login/register" . ">"."注册"."</a>");
        }
    }
}