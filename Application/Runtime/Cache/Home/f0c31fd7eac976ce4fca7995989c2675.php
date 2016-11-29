<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱天使守护团</title>
  <link href="/Public/Css/footer.css" rel="stylesheet">
  <link href="/Public/Css/base.css" rel="stylesheet">
    <link href="/Public/Css/Index/main.css" rel="stylesheet">  
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Index/main.css" rel="stylesheet">	
  <link href="/Public/Css/Manager/addGood.css" rel="stylesheet">
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

    <div class="row donate_mainbody" >

        <div class="login_box img-rounded col-md-offset-4 col-md-4 ">
          <form class="form-horizontal login_form" id="donateForm" enctype="multipart/form-data" role="form" method="post" action="<?php echo U('Home/Manager/uploadGood');?>">
            <div class="form-group">
              <label  class="col-xs-2 control-label">图片上传</label>
              <input id="lefile" class="col-xs-2" type="file" name="goodsImg" style="display:none">
              <div class="input-append col-xs-10">
                <input id="photoCover" class="input-large" type="text" style="height:33px;border-radius:3px;margin-right: -10px;" placeholder="   仅支持JPG格式"  readonly>
                <a class="btn btn-default" style="margin-left:0px;"onclick="$('input[id=lefile]').click();">选择文件</a>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-xs-2 control-label">商品名称</label>
              <div class="col-xs-6">
                <input type="text" class="form-control password" placeholder="12个字以内" name="goodsTitle" style="padding-left:11px"/>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-xs-2 control-label">商品简述</label>
              <div class="col-xs-10">
                <textarea id="editor_id" class="form-control gooddes" rows="3" placeholder="1000字以内,友情提示：请在word或者txt文档中编写好的复制到此处~" name="goodsDes" style=""></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-xs-2 control-label">商品价格</label>
              <div class="col-xs-10">
                <input  class="form-control" rows="3" name="goodsPrice" style=""></textarea>
              </div>
            </div>


            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10 loginbtn">
                <button type="submit" class="btn btn-default" >上传</button>
              </div>
            </div>
          </form>
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
			<p class="myInfo">©瓷爱助残团&nbsp;&nbsp;|&nbsp;&nbsp;山东大学(威海)&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Home/Manager/managerLogin');?>">管理员入口</a></p>
			<br><br>
	</div>
</footer>




<script src="/Public/Js/jquery.min.js"></script>
<script charset="utf-8" src="/Public/Editor/kindeditor.js"></script>
<script charset="utf-8" src="/Public/Editor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
<script src="/Public/Js/bootstrapValidator.js"></script>
<script charset="utf-8" src="/Public/Editor/plugins/code/prettify.js"></script>

<script type="text/javascript">  

 KindEditor.ready(function(K) {
                var editor = K.create('#editor_id',{
                  cssPath : '/Public/Editor/plugins/code/prettify.css',
                  width:"100%",
                  height:'200px',
                  items:[
                      'preview', 
                      'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                      'justifyfull',   'indent', 'outdent', 
                      '|', 'fullscreen', 'image', 'multiimage','/',
                      'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                      'italic', 'underline',  'lineheight',  '|',  
                     'hr', 'emoticons', 'baidumap'
                      ]
                });
                prettyPrint();
        });
  $(document).ready(function(){
     //begin
     $('input[id=lefile]').change(function() {  
        $('#photoCover').val($(this).val()); 
      });  
    $('#donateForm').bootstrapValidator({
            live:'disabled',  
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                      goodsTitle: {
                          message: '非法名称',
                          validators: {
                              notEmpty: {
                                  message: '商品名称不能为空'
                              },
                              stringLength: {
                                  max: 12,
                                  message:'名称限制在12字之内'
                              }
                          }
                      },
                      goodsDes: {
                          validators: {
                              notEmpty: {
                                  message: '不能为空'
                              },
                              stringLength:{
                                max:1000,
                                message:'亲,您已经超过了1000字~稍微留点情吧^_^'
                              }
                          }
                      },
                      goodsPrice: {
                          validators: {
                              notEmpty: {
                                  message: '不能为空'
                              }
                          }
                      }

                  }
    });


      //end
  });
  
</script>  
</body>
</html>