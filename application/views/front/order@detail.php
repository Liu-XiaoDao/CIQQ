<?php include VIEWPATH.'front/__header.php';?>
<?php
if($islogin==1){}else exit("<script language='javascript'>window.location.href='/index.php/front/login';</script>");
function display_zt($zt){
	if($zt==1)
		return '<font color=green>已完成</font>';
	else
		return '<font color=blue>未付款</font>';
}
?>

 <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      	<div class="panel panel-primary">
        	<div class="panel-heading"><h3 class="panel-title">订单详情</h3></div>
          	<ul class="list-group">
				<li class="list-group-item">订单号：<?php echo $order['trade_no'];?></li>
				<li class="list-group-item">下单时间：<?php echo $order['addtime'];?></li>
				<li class="list-group-item">商品类别：<?php echo $order['name'];?></li>
            	<li class="list-group-item">商品数量：<?php echo $order['count'];?></li>
            	<li class="list-group-item">订单金额：<?php echo $order['money'];?>元</li>
				<li class="list-group-item">订单状态：<?php echo display_zt($order['status']);?></li>
				<!-- <li class="list-group-item">订单备注：<?php //echo $order['info'];?></li> -->
          	</ul>
      	</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">订单所属QQ</h3>
			</div>
			<!-- <ul class="list-group">
				<?php
					//foreach ($qqs as $key => $qq) {
				?>
						<li class="list-group-item">
							qq:<?php //echo $qq['qqnum'];?><?php //echo $qq['qqpw'];?><?php //echo $qq['code'];?><?php //echo $qq['phone'];?>
						</li>
				<?php	
					//}
				?>
				
		
			</ul> -->

	  <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>QQ号码</th><!-- <th>QQ密码</th><th>密令</th><th>绑定手机</th> --></tr></thead>
          <tbody>
          <?php
              foreach ($qqs as $key => $qq) {
          ?>
                <tr>
                  <td><?php echo $qq['qqnum'];?></td>
<!--                   <td><?php //echo $qq['qqpw'];?></td>
                  <td><?php //echo $qq['code'];?></td>
                  <td><?php //echo $qq['phone'];?></td> -->
                </tr>
          <?php   }  ?>
          </tbody>
        </table>
      </div>




		</div>
		<a href="/index.php/front/order">>>返回订单列表</a>
    </div>
 </div>
 <?php include VIEWPATH.'front/__footer.php';?>