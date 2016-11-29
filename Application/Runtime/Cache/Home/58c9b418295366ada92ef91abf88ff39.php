<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱天使守护团</title>
  
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Index/main.css" rel="stylesheet">	
  <link href="/Public/Css/footer.css" rel="stylesheet">
  <link href="/Public/Css/base.css" rel="stylesheet">
  <link href="/Public/Css/Shop/index.css" rel="stylesheet">
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


    <div class="container" style="margin-top:50px;">
        <div class="row">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 item">
                    <div style="padding:10px 0">
                            <img src="/Public/GoodsImgs/<?php echo ($vo["goodssavename"]); ?>" style="width: 100%;height: 250px;">
                            <h2 style="height:60px"><?php echo ($vo["goodstitle"]); ?></h2>
                            <div class="goodsdes"><?php echo ($vo["goodsdes"]); ?></div>
                            <div class="input-group cost col-xs-offset-1 col-xs-10">
                              <span class="input-group-addon cost_item">价格</span>
                              <input type="text" class="form-control cost_item" aria-label="Amount (to the nearest dollar)" value="<?php echo ($vo["goodsprice"]); ?>" readonly>
                              <span class="input-group-addon cost_item">￥</span>
                            </div>

                            <div class="input-group cost" style="margin-top:10px;width: 100%">
                                <a class="btn btn-primary btn-my" href="<?php echo U('Home/Des/des');?>?id=<?php echo ($vo["goodsid"]); ?>" style="width: 100%">详情及购买方式</a>
                            </div>
                    </div>
                </div><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
            <div style="clear:both;text-align: center;position: relative;top:30px"><?php echo ($page); ?></div>
        </div>
    </div>

    

  <footer class="footer">
	<div class="myContainer">

		<div class="footerInfor row">
			<div class="footeritem info1 col-md-4">
				<p>关注我们</p>
				<hr>
				<ul>
					<li>微博:山威瓷爱天使守护团队 </li>
					<li><a href=""><img style="width:110px"src="/Public/Img/footer/二维码.jpg"/></a></li>
				</ul>
			</div>
			<div class="footeritem info2 col-md-4">
				<p>友情链接</p>
				<hr>
					<ul>
						<li><a href="http://www.chinadolls.org.cn/" target="_Blank">瓷娃娃罕见病关爱中心</a></li>
						<li><a href="http://weihai.sddpf.org.cn" target="_Blank">威海市残疾人联合会</a></li>
						<li><a href="http://www.qdpf.org.cn/index.htm" target="_Blank">青岛市残疾人联合会</a></li>
						<li><a href="http://ytcl.yantai.gov.cn/web/Index.aspx" target="_Blank">烟台残疾人联合会</a></li>
					</ul>
			</div>
			<div class="footeritem info3 col-md-4">
				<p>加入我们</p>
				<hr>
					<ul>
						<li>瓷爱天使守护团志愿者总群:128961470</li>
						<li>Q群2：xxxxxxxx</li>
						<li>Q群3：xxxxxxxx</li>
						<li>Q群4：xxxxxxxx</li>
					</ul>
			</div>
		</div>
			<hr>
			<p class="pull-right"><a href="#top">回到顶部</a></p> 
			<p class="myInfo">©瓷爱天使守护团&nbsp;&nbsp;|&nbsp;&nbsp;山东大学(威海)&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Home/Manager/managerLogin');?>">管理员入口</a></p>
			<br><br>
	</div>
</footer>


	<script src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
	<script src="/Public/Js/bstraplang/zh_CN.js"></script>
</body>
</html>