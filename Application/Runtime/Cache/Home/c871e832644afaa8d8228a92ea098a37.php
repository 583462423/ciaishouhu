<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱天使守护团</title>
  
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Camp/index.css" rel="stylesheet">	
  <link href="/Public/Css/footer.css" rel="stylesheet">
  <link href="/Public/Css/base.css" rel="stylesheet">
</head>

<body>

<!--导航栏-->
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教育 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Home/Teach/service');?>?id=1">上门服务</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Teach/smallcourse');?>">课件精选</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Teach/teach');?>?id=2">远程教育</a></li>
          </ul>
        </li>

        <li><a href="<?php echo U('Home/Forum/index');?>">社区论坛</a></li>
        <li><a href="<?php echo U('Home/Star/index');?>">明星论坛</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">同城活动 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Home/Camp/index');?>">往期活动回顾</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Home/Camp/future');?>">预期活动展望</a></li>
          </ul>
        </li>
        <li><a href="<?php echo U('Home/Picture/index');?>">群友相册</a></li>
        <li><a href="<?php echo U('Home/Shop/index');?>">瓷爱商城</a></li>
      </ul>




      <ul class="nav navbar-nav right-nav">
        <li><?php echo ($first); ?></li>
        <li><?php echo ($second); ?></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



	<div class="container">
		<h1 style="text-align: center"><?php echo ($list["goodstitle"]); ?></h1>
		<hr>
		<img class="img-thumbnail" src="/Public/GoodsImgs/<?php echo ($list["goodssavename"]); ?>" style="float:left;width:50%;">		
		<div style="margin-left: 52%;overflow: hidden;"><?php echo ($list["goodsdes"]); ?></div>
		<hr>
	</div>


	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/Js/base.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrapValidator.js"></script>
	<script src="/Public/Js/bstraplang/zh_CN.js"></script>


</body>
</html>