<?php require_once("header.php"); ?>
<div class="headImg">
<!--<img src="http://image170-c.poco.cn/mypoco/myphoto/20121219/09/17337730920121219093050045.jpg"/>-->
<img src="img/photo.jpg"/>
</div>
<?php 
require_once("menu.php"); 
echo create_menu();
?>

<div class="container">
		
		<div class="onecol"><div class="rule">&nbsp;</div></div>
		
		<div class="onecol">
			<h3 class="nomar">一些婚纱照</h3>
			<p style="font-size:12px;"><em>Click a photo to see more.</em></p>
		</div>
		
		<div class="slidescol">
			<div id="slides">
				<div class="slides_container">
					<div class="slide"><img height="533px" src="photos/1.jpg" alt="付兴旺 & 范晓玲"/></div>
					<?php 
					for($i = 2;$i<=44;$i++){
						echo '<div class="slide">'."\n".'<img height="533px" src="photos/'.$i.'.jpg" alt="付兴旺 & 范晓玲"/></div>';
						echo "\n";
					}
					?>							
				</div><!--/slide_container-->
			</div> <!-- /slides-->
		</div><!--/slidescol-->
		
		<div style="width:130px;float:left;margin-left:10px;font-size:12px;">
			<p>这些照片拍摄于北京的金秋时节,来自 <a href="http://www.8photo.cn/">八月照相馆</a>的摄影师林超. </p>
			<p>超哥比较有耐心，水平也比较高，感谢他的辛苦.</p>
			<p>另外，感谢化妆师咏君和灯光师鹏杰!</p>
		</div>
		
		
		<div style="clear:both;">&nbsp;</div>		
</div> 

<link rel="stylesheet" type="text/css" href="css/photo.css" media="screen">
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
	        $('#slides').slides({
	        pause: 1000,
	        preload: true,
			effect: 'fade',
			fadeSpeed: 600,
			crossfade: true,
			hoverPause: true,
			bigTarget: true
	        });

		});
</script>
<?php require_once("footer.php"); ?>
