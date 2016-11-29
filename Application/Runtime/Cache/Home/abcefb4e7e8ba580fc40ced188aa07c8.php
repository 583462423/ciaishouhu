<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱助残</title>
  
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Teach/service.css" rel="stylesheet">	
  <link href="/Public/Css/footer.css" rel="stylesheet">
  <link href="/Public/Css/base.css" rel="stylesheet">
  <link href="/Public/Css/bootstrapValidator.css" rel="stylesheet">
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

  <div class="mainbody">

    <div class="showdes">

      <h1>远程教育</h1>
      <p style="font-size:18px;">进行网上视频或者语音在线教育，但是需要等待服务员与您联系</p>
       <span style="font-size: 30px; background-color:rgba(238,97,131,0.7);padding:5px">如果您需要该服务，请填写下表并提交~</span>
    </div>
    <div class="describ"> 
      


        <div class="cin">
          <form class="form-horizontal sub_form" id="subForm" role="form" action="<?php echo U('Home/Teach/subInfo');?>">
            <div class="form-group">
              <p><b>姓名</b></p>
              <input type="text" class="form-control " placeholder="请输入您的姓名" name="name" />
            </div>
          
            <div class="form-group">
                <p><b>年龄</b></p>
                <input type="text" class="form-control age" placeholder="请输入您的年龄" name="age" /><b>&nbsp;&nbsp;岁</b>
            </div>

            <div class="form-group">
                <p><b>文化水平</b>></p>
                 <select  class="form-control"  name="grade">   
                  <option value="小学">小学</option>   
                  <option value="初中">初中</option>   
                  <option value="高中">高中</option>   

               </select>   
             </div>

             <div class="form-group">
                <p><b>QQ</b></p>
                  <input type="text" class="form-control"  placeholder="请输入QQ" name="qq">
             </div>

             <div class="form-group">
                <p><b>电话</b></p>
                  <input type="text" class="form-control"  placeholder="请输入您的手机号" name="phoneNumber">
             </div>

             <div class="form-group">
                <p><b>家庭住址</b></p>
                  <input type="text" class="form-control address province"  placeholder="省份" name="province">
                  <input type="text" class="form-control address country"  placeholder="县(市)" name="country">
                  <input type="text" class="form-control address village"  placeholder="镇(村/街道)" name="village">
             </div>
            

             <div class="form-group" style="margin-top:30px;">
                  <button type="submit" class="btn btn-warning" style="width:100%">上传</button>
              </div>

        </form>
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
  <script type="text/javascript">
    $(document).ready(function() {
        $('#subForm')
          .bootstrapValidator({
            live:'disabled', 
              message: 'message',
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  name: {
                      message: 'usernamemessage',
                      validators: {
                          notEmpty: {
                              message: '名字不能为空哦~'
                          },
                          stringLength: {
                              max: 6,
                              message: '如实回答哦小朋友~'
                          }
                      }
                  },
                  age: {

                      validators: {
                          notEmpty: {
                              message: '请告诉我您的年龄~'
                          },
                          regexp: {
                              regexp: /^[0-9]+$/,
                              message: '请使用小数字哦，如：13，不要写13岁，也不要写“十三”或“十三岁”~'
                          }
                      }
                  },
                  province:{
                    validators: {
                          notEmpty: {
                              message: '记得填写省份哦~'
                        }
                      }
                  },
                  country:{
                    validators: {
                          notEmpty: {
                              message: '还要填写县区哦~'
                        }
                      }
                  },
                  village:{
                    validators: {
                          notEmpty: {
                              message: '不要忘了镇村信息，不然怎么找到您呢？~'
                        }
                      }
                  },
                  phoneNumber:{
                    validators: {
                          notEmpty: {
                              message: '电话不能空哦，方便我们与您进行联系~  '
                        }
                      }
                  },

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
                        alert(result);
                    });
            });

      });
  </script>
</body>
</html>