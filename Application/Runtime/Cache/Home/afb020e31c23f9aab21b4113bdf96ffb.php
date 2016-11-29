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
<?php if(is_array($forumlist)): $i = 0; $__LIST__ = $forumlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?><form class="form-horizontal send_form" id="sendForm" role="form" action="<?php echo U('Home/Forum/reply');?>?id=<?php echo ($forum["id"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>

  <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <p><b>请输入回复内容</b></p>
        </div>
          <div class="modal-body forum_body">
         
          <div class="form-group" style="width:100%">
            <p><b>内容</b></p>
            <textarea id="" class="form-control" raw="8" name="content" style="height:100px;resize: none;"></textarea>
          </div>

          <div class="word_surplus"></div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default close_btn" data-dismiss="modal">关闭</button>
          <button type="submit" class="btn btn-primary send">发送</button>
        </div>
      </div>
    </div>
  </div>

</form>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
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
      <div class="mainforum row">
        <div class="left col-md-8">
            <div class="menu">
                <ul>
                    <li class="active"><a href="<?php echo U('Home/Forum/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Home/Forum/recommend');?>">推荐</a></li>
                    <li><a href="<?php echo U('Home/Forum/hot');?>">热门</a></li>
                </ul>

                <button class="post">回复</button>
            </div>
            <div class="reply_main">
                <?php if(is_array($forumlist)): $i = 0; $__LIST__ = $forumlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?><div class="main_info">
                    <a style="color:white;background: #F44336;border-radius: 2px;padding:2px;"><?php echo ($forum["subject"]); ?></a>
                    <p style="border-bottom: 1px solid gray;"><b style="font-size: 25px;"><?php echo ($forum["title"]); ?> </b><span style="float:right;">作者:<?php echo ($forum["autherid"]); ?></span></p>
                    <p><?php echo ($forum["content"]); ?></p>
                    <span style="float:right;color:#ccc;font-size: 12px"><?php echo ($forum["senddate"]); ?></span>
    
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php if(is_array($replylist)): $i = 0; $__LIST__ = $replylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="main_info">
                    <div style="border-bottom: 1px solid #ccc;">
                        <a style="color:black"><b><?php echo ($vo["autherid"]); ?></b></a> <p style="float:right"><?php echo ($vo["floor"]); ?>楼</p>
                    </div>
                    <p style="padding-top:20px"><?php echo ($vo["content"]); ?></p> 
                    <a class="" href="<?php echo U('Home/Forum/rtr');?>?forumid=<?php echo ($vo["forumid"]); ?>&floor=<?php echo ($vo["floor"]); ?>&toAuther=<?php echo ($vo["autherid"]); ?>" style="float:right">回复</a>
                    <p style="font-size: 12px;color: #ccc;"><?php echo ($vo["replydate"]); ?></p>
                    <hr>
                    <?php if(is_array($vo['rtrlist'])): $i = 0; $__LIST__ = $vo['rtrlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="rtr" style="border-bottom: 1px solid #ddd;margin-top: 10px;margin-left: 50px">
                            <p><span class="auther"><b><?php echo ($item["autherid"]); ?></b></span> &nbsp回复 &nbsp<span><b><?php echo ($item["toauther"]); ?>:</b></span>
                            <span><?php echo ($item["content"]); ?></span></p>
                            <a class="" href="<?php echo U('Home/Forum/rtr');?>?forumid=<?php echo ($vo["forumid"]); ?>&floor=<?php echo ($vo["floor"]); ?>&toAuther=<?php echo ($item["autherid"]); ?>" style="float:right">回复</a>

                            <p style="font-size: 12px;color: #ccc;"><?php echo ($item["date"]); ?></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <div style="text-align: center;"><?php echo ($pageshow); ?></div>
            </div>
        </div>
        <div class="right col-md-3">
            <div class="ads">
              <h4><b>瓷爱吉祥物</b></h4>
                <img src="/Public/Img/cixiaoai.png" style="width:100%;"/>
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
                    reply: {
                        message: '请输入回复内容',
                            threshold: 6,
                        validators: {
                            notEmpty: {
                                message: '请输入回复内容'
                            },
                            stringLength: {
                                max: 500,
                                message: '回复内容最多500字，您的内容过长'
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
                      
                      $('.word_surplus').html('回复成功！');
                      setTimeout(function(){
                        $('#myModal').modal({
                        show:false,
                      });
                      window.location.href="";
                      },500);        
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