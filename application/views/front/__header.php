<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo $title ?></title>
  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php if($islogin==1){?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">第一营销</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo checkIfActive('home',$c)?>">
            <a href="/index.php/front"><span class="glyphicon glyphicon-home"></span> 个人首页</a>
          </li>

          <li class="<?php echo checkIfActive('order',$c)?>">
            <a href="/index.php/front/order"><span class="glyphicon glyphicon-th-list"></span> 我的订单</a>
          </li>
          <li class="<?php echo checkIfActive('apiorder',$c)?>">
            <a href="/index.php/front/apiorder"><span class="glyphicon glyphicon-lock"></span> 账号解封</a>
          </li>

		      <li class="<?php echo checkIfActive('acount',$c)?>">
            <a href="/index.php/front/acount"><span class="glyphicon glyphicon-usd"></span> 充值</a>
          </li>

          <li class="<?php echo checkIfActive('pdata',$c)?>">
            <a href="/index.php/front/edituser"><span class="glyphicon glyphicon-user"></span>个人资料</a>
          </li>


          <li><a href="/index.php/front/login/logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <?php } ?>


