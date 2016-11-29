<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<script type="text/javascript">
	(function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))window.location=b})(navigator.userAgent||navigator.vendor||window.opera,'http://www.baidu.com');
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱天使守护团</title>
  
  <link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
  <link href="/Public/Css/Manager/index.css" rel="stylesheet">	
  <link href="/Public/Css/footer.css" rel="stylesheet">
  <link href="/Public/Css/base.css" rel="stylesheet">
  <link href="/Public/Css/bootstrapValidator.css" rel="stylesheet">
</head>

<body style="background-color: rgba(0,0,0,0.5);">



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

      </ul>




      <ul class="nav navbar-nav right-nav">
        <li><?php echo ($first); ?></li>
        <li><?php echo ($second); ?></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<h1 style="text-align: center;margin-bottom: 50px;color:yellow;">预期活动</h1>

<div style="height:700px;">
    <div class="upload">
        <form class="form-horizontal" id="uploadForm" enctype="multipart/form-data" role="form" method="post" action="<?php echo U('Home/Manager/uploadFuture');?>">
            <div class="form-group">
              <label  class="col-xs-2 control-label">照片上传</label>
              <input id="lefile" class="col-xs-2" type="file" name="campimg" style="display:none">
              <div class="input-append col-xs-10">
                <input id="photoCover" class="input-large" type="text" style="height:33px;border-radius:3px;margin-right: -10px;" placeholder="   仅支持JPG格式"  readonly>
                <a class="btn btn-default" style="margin-left:0px;"onclick="$('input[id=lefile]').click();">选择文件</a>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-2 control-label">活动名称</label>
              <div class="col-xs-6">
                <input type="text" class="form-control password" placeholder="请填写正确名字哦~" name="name" style="padding-left:11px"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-2 control-label">活动介绍</label>
              <div class="col-xs-10">
                <textarea id="editor_id" class="form-control gooddes" rows="5" placeholder="1000字以内,友情提示：请在word或者txt文档中编写好的复制到此处~" name="des" style="resize: none;"></textarea>
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
	<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
	<script src="/Public/Js/bstraplang/zh_CN.js"></script>
    <script src="/Public/Js/bootstrapValidator.js"></script>
    <script type="text/javascript">  
      $(document).ready(function(){
         //begin
         $('input[id=lefile]').change(function() {  
            $('#photoCover').val($(this).val()); 
          });  
        $('#uploadForm').bootstrapValidator({
                live:'disabled',  
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                          name: {
                              message: '非法名称',
                              validators: {
                                  notEmpty: {
                                      message: '商品名称不能为空'
                                  },
                                  stringLength: {
                                      max: 5,
                                      message:'名称限制在5字之内'
                                  }
                              }
                          },
                          des: {
                              validators: {
                                  notEmpty: {
                                      message: '不能为空'
                                  },
                                  stringLength:{
                                    max:1000,
                                    message:'亲,您已经超过了1000字~稍微留点情吧^_^'
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