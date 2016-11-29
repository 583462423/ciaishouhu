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
    <link href="/Public/Css/Forum/index.css" rel="stylesheet">
    <link href="/Public/Css/bootstrapValidator.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Editor/themes/default/default.css" />
    <link rel="stylesheet" href="/Public/Editor/plugins/code/prettify.css" />
</head>

<body style="background-color: #ccc;">


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
    <div class="container">
      <div class="mainforum">
        <div class="left">
            <div class="main">

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="main_li"><a href="<?php echo U('Home/Manager/delForum');?>?id=<?php echo ($vo["id"]); ?>" class="btn btn-warning">删除</a><a>[<?php echo ($vo["subject"]); ?>]</a> <a class="main_a" href="<?php echo U('Home/Forum/foruminfo');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?> <span><?php echo ($vo["senddate"]); ?></span></a>

                    </li><hr><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
              <div style="text-align: center;"><?php echo ($pageshow); ?></div>
            </div>
        </div>
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
    <script src="/Public/Js/bootstrapValidator.js"></script>
    <script charset="utf-8" src="/Public/Editor/kindeditor.js"></script>
    <script charset="utf-8" src="/Public/Editor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="/Public/Editor/plugins/code/prettify.js"></script>
  	<script type="text/javascript">

     // KindEditor.ready(function(K) {
     //            var editor = K.create('#editor_id',{
     //              cssPath : '/Public/Editor/plugins/code/prettify.css',
     //              width:"100%",
     //              height:'200px',
     //              items:[
     //                   'emoticons'
     //                  ],
     //              afterChange:function() {
     //                 $('.word_count1').html(this.count()); //字数统计包含HTML代码
     //                 $('.word_count2').html(this.count('text'));  //字数统计包含纯文本、IMG、EMBED，不包含换行符，IMG和EMBED算一个文字
     //                 var limitNum = 100;  //设定限制字数
     //                 var pattern = '还可以输入' + limitNum + '字'; 
     //                 $('.word_surplus').html(pattern); //输入显示
     //                 if(this.count('text') > limitNum) {

     //                  $('button.send').addClass("disabled");
     //                  pattern = ('字数超过限制，请适当删除部分内容');
     //                  //超过字数限制自动截取
     //                  var strValue = editor.text();
     //                  strValue = strValue.substring(0,limitNum);
     //                  editor.text(strValue);  
     //                  } else {

     //                  //计算剩余字数
     //                  var result = limitNum - this.count('text'); 
     //                  pattern = '还可以输入' +  result + '字'; 
     //                  }

     //                  $('.word_surplus').html(pattern); //输入显示
     //                 ////////
     //                } 
                  

     //                  /*'preview', 
     //                  'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
     //                  'justifyfull',   'indent', 'outdent', 
     //                  '|', 'fullscreen', 'image', 'multiimage','/',
     //                  'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
     //                  'italic', 'underline',  'lineheight',  '|',  
     //                 'hr', 'emoticons', 'baidumap'*/
     //            });
     //            prettyPrint();
     //  });

     $(document).ready(function() {

        $('button.post').click(function(){
            $('#myModal').modal({
              show:true,
              keyboard:false,
              backdrop:'static'
            });
        });


        $('#sendForm')
            .bootstrapValidator({
                    live:'disabled',  
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    title: {
                        message: '请输入标题',
                            threshold: 6,
                        validators: {
                            notEmpty: {
                                message: '请输入标题'
                            },
                            stringLength: {
                                max: 50,
                                message: '标题长度最多50字'
                            }
                        }
                  },
                  content:{
                    message: '请输入内容',
                            threshold: 6,
                        validators: {
                            notEmpty: {
                                message: '请输入内容'
                            },
                            stringLength: {
                                max: 500,
                                message: '内容超过500字，过长，请修改'
                            }
                        }
                  }
              }
          })
          .on('success.form.bv', function(e) {
              // Prevent form submission
              e.preventDefault();
              $('button.close_btn').addClass('disabled');
              $('button.send').addClass('disabled');

              // Get the form instance
              var $form = $(e.target);
              // Get the BootstrapValidator instance
              var bv = $form.data('bootstrapValidator');
              // Use Ajax to submit form data

              $.post($form.attr('action'), $form.serialize(), function(result) {
                  if(result == 1){
                      
                      $('.word_surplus').html('发帖成功！');
                      setTimeout(function(){
                        $('#myModal').modal({
                        show:false,
                      });
                      window.location.href="/index.php/Home/Forum/index.html";
                      },2000);        
                  }else if(result == 2)
                  {
                    alert('请先登录！');
                    window.location.href="/index.php/Home/Login/login.html";
                  }
                  else{
                      $('button.close_btn').removeClass('disabled');
                      $('button.send').removeClass('disabled');
                      alert(result);
                  }
              });
          });
     });
    </script>
</body>
</html>