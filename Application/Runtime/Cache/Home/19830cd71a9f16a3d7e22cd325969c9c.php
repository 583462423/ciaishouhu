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

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "没有数据？" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form class="form-horizontal send_form" id="sendForm" role="form" action="<?php echo U('Home/Forum/rtr_reply');?>?forumid=<?php echo ($vo["forumid"]); ?>&floor=<?php echo ($vo["floor"]); ?>&toAuther=<?php echo ($vo["toAuther"]); ?>">
    <div class="modal fade bs-example-modal-lg" id="rtrModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
          <p><b>回复：<?php echo ($vo["toAuther"]); ?></b></p>
          </div>
            <div class="modal-body forum_body">
           
            <div class="form-group" style="width:100%">
                
              <p><b>内容</b></p>
              <textarea id="" class="form-control" raw="8" name="content" style="height:100px;resize: none;"></textarea>
            
            </div>
            <div class="word_surplus"></div>
          </div>
          

          <div class="modal-footer">
            <button type="button" class="btn btn-default " id="close_btn" data-dismiss="modal">返回</button>
            <button type="submit" class="btn btn-primary send">发送</button>
          </div>
        </div>
      </div>
    </div>

  </form><?php endforeach; endif; else: echo "没有数据？" ;endif; ?>


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

        $('#close_btn').click(function(){
          window.history.back();
        });

        $('#rtrModal').modal({
              show:true,
              keyboard:false,
              backdrop:'static'
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
                        window.history.back();
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