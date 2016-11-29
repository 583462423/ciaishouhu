<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱天使守护团</title>
    <link href="/Public/Css/base.css" rel="stylesheet">
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Index/main.css" rel="stylesheet">	
  <link href="/Public/Css/Login/login.css" rel="stylesheet">
  <link href="/Public/Css/bootstrapValidator.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img style="width:50px;margin-top:-15px"src="/Public/Img/tab.png"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="header-nav">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo U('Home/Index/main');?>">主页 <span class="sr-only">(current)</span></a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">课件管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Home/Manager/addCourse');?>">添加课件</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Manager/deleteCourse');?>">删除课件</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">明星管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Home/Manager/starManager');?>">添加明星</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Manager/deleteStar');?>">删除明星</a></li>
          </ul>
        </li>

        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">活动添加 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Home/Manager/addCamp');?>">往期活动添加</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Manager/changeCamp');?>">往期活动修改</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Manager/futureCamp');?>">预期活动添加</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Manager/futureChange');?>">预期活动修改</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">相册管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Home/Manager/addPicture');?>">添加照片</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Manager/delPic');?>">删除照片</a></li>
          </ul>
        </li>

        <li><a href="<?php echo U('Home/Manager/forumMan');?>">论坛管理</a></li>
        <li><a href="<?php echo U('Home/Manager/addMan');?>">添加管理员</a></li>
        <li><a href="<?php echo U('Home/Manager/addGood');?>">添加商品</a></li>

      </ul>




      <ul class="nav navbar-nav right-nav">
        <li><?php echo ($first); ?></li>
        <li><?php echo ($second); ?></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="main_panel">

	<div class="login_logo">
		<img style="width:100px"src="/Public/Img/tab.png" />
	</div>
	<div class="login_panel">
		
			<form class="form-horizontal login_form" id="loginForm" role="form" action="<?php echo U('Home/Manager/addManager');?>">
			  
				<div class="form-group">
					<p><b>帐号</b></p>
					<input type="text" class="form-control " placeholder="请输入帐号" name="username" />
				</div>
				<div class="form-group">	
				    <p><b>密码</b></p>
				    <input type="password" class="form-control password" placeholder="请输入密码" name="password" />
				</div>

                <div class="form-group">    
                    <p><b>再输一次</b></p>
                    <input type="password" class="form-control password" placeholder="请输入密码" name="password2" />
                </div>

				<div class="form-group">
			    	<button type="submit" class="btn btn-warning" style="width:100%;margin-top: 10px">添加</button>
			    </div>
			</form>


	</div>
</div>

	<script src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
	<script src="/Public/Js/bstraplang/zh_CN.js"></script>
	<script src="/Public/Js/bootstrapValidator.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#loginForm')
		        .bootstrapValidator({
                    live:'disabled',  
		            message: 'This value is not valid',
		            feedbackIcons: {
		                valid: 'glyphicon glyphicon-ok',
		                invalid: 'glyphicon glyphicon-remove',
		                validating: 'glyphicon glyphicon-refresh'
		            },
		            fields: {
		                username: {
		                    message: 'The username is not valid',
                            threshold: 6,
		                    validators: {
		                        notEmpty: {
		                            message: '帐号不能为空'
		                        },
		                        stringLength: {
		                            min: 6,
		                            max: 16,
		                            message: '帐号长度必须为6~16位'
		                        },
		                        /*remote: {
		                            url: 'remote.php',
		                            message: 'The username is not available'
		                        },*/
		                        regexp: {
		                            regexp: /^[a-zA-Z0-9_]+$/,
		                            message: '帐号必须为字母数字或下划线'
		                        }
		                    }
		                },
		                password: {
		                    validators: {
		                        notEmpty: {
		                            message: '密码不能为空'
		                        },
                                identical: {
                                field: 'password2',
                                message: '两次密码不一致'
                                }
		                    }
		                },
                        password2:{
                        validators:{
                            notEmpty:{
                                message:'亲不要粗心~'
                            },
                            identical: {
                                field: 'password',
                                message: '两次密码不一致'
                                }
                            }
                        }

		            }
		        })
                .on('success.form.bv', function(e) {
                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);
                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');
                    // Use Ajax to submit form data

                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        if(result == 1){
                            alert('添加成功');
                            $('.password').val('');
                        }
                        else{
                            alert(result);
                            $('.password').val('');
                        }
                    });
                });


		});
	</script>
</body>
</html>