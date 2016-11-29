<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->display();
    }

    public function testLogin(){

        $user = M('user');
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
        			cookie('username',$username,3600*24*7);
        		}
        		session('username',$username);
        		echo 1;
        	}else{
        		echo '密码错误';
        	}
        }
    }

    public function quit(){
    	cookie('username',null);
    	session('username',null);
    	$this->redirect('Home/Index/main');    
    }

    public function register(){
    	$this->display();
    }

    public function subRegister(){
    	$user = M('user');
    	$data['username'] = I('username');
    	$data['password'] = md5(I('password'));
    	$data['phone'] = I('phoneNumber');
    	if(($user-> where("username='{$data['username']}'")->find())){
    		echo '帐号已被注册';
    	}else if(($user->where("phone='{$data['phone']}'")->find())){
    		echo '该手机号已被注册';
    	}else{
    		$user->data($data)->add();
    		echo "注册成功";
    	}
    }
}