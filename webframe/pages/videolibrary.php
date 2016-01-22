
	<body>
		<?php require("./pages/components/navbar.php");?>
		
	<h1 class="container">视频讲解 <small>或许你需要一些帮助？</small></h1>
	<div class="bc-social">
		<div class="container">
	  
        <ul class="bc-social-buttons">
			<li class="social-qq">
				<i class="fa fa-qq"></i> 郑州师院15级C语言交流群：<span id="qqgroup">463927243</span>
			</li>
			<li class="social-forum">
				<a class="" href="/discuss/discuss.php" target="_blank"><i class="fa fa-comments"></i> ZZNUOJ讨论版</a>
			</li>
			<?php if ($VideoManager) { ?>
			<li>
				<a href="?man=1"><i class="fa fa-cog"></i> 管理视频</a>
			</li>
			<?php } ?>
        </ul>
		</div>
    </div>
		
		
		<div class="container">
			<div class="row">
			
		<?php for($i=1;$i<=10;$i++) { ?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div style="height: 300px;" class="thumbnail">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-5">
							<i class="fa fa-video-camera fa-5x"></i>
						</div>
						<div class="col-xs-7 text-right">
							<p class="medal-heading">1111</p>
							<p class="medal-text">Title</p>
						</div>
					</div>
				</div>
			</div>
            <div class="caption">
              <h3>
                <a href="http://codeguide.bootcss.com" target="_blank">田忌赛艇题解<br><small>Problem #1234 by @blumia</small></a>
              </h3>
              <p>
              江可泽民，亦可赛艇
              </p>
            </div>
          </div>
        </div>
		<?php } ?>
		
			</div>
		</div><!--main wrapper end-->
		<?php require("./pages/components/footer.php");?>
		
		
	</body>