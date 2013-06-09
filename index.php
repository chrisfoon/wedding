<?php 
require_once("header.php"); 
?>
<div class="headImg">
<!--<img src="http://image170-c.poco.cn/mypoco/myphoto/20121219/09/17337730920121219093006033.jpg"/>-->
 <img src="/w/img/colpules_107.jpg" />
</div> 
<?php 
require_once("menu.php"); 
echo create_menu();
?>
<div class="content">
	<div id="datetime"> 
		<li class='left'>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 首先跟大家介绍一下"我们的婚礼站点"，其实看到这个标题后大家心里也明白了多半， 是以我们的婚礼为主题的小站，记录着点滴中的幸福及大家的祝福。</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们的婚礼时间安排在2013.4.30，地点在山东•菏泽•成武 举办，届时<a href="./rsvp.html">邀请</a>大家来见证我们美好幸福的时刻，期待你们的到来哟!</p>
		<p class="singe"> ——付兴旺 & 范晓玲</p>
		</li>
		<li class='right'>
			<ol id="timeTitle">距我们的婚礼时间还有:<span id="time"></span></ol>
			<ol id="timesShow">2013.4.30<br/><span>农历3月21日</span></ol>
		</li>
	</div>
	<div class="clear"></div>

	<div id="couple"> 
		<div class="coupleInfo her">
			<img src="img/her.png" width=458 height=302 />
			<h1>HER</h1>
			<p>大家好，很高兴认识大家！给大家简单介绍一下！照片里笑的憨厚可亲的人呢就是我---<a href="http://weibo.com/u/1765205957" target="_blank">范晓玲</a>（名字好土），大家还是叫我范范吧~~~</p>
			<p> 我的性格属于内外兼并型，优点是沉静、稳重带点可亲，缺点则是倔强且缺乏毅力，爱好到目前为止没有特别喜欢也没有特别讨厌的。</p><p>目前就职于北京一家不知名的小公司，主要工作为技术服务支持。在2011.05北京初夏的雨季里认识了付兴旺童鞋，一路走来相遇；相识；相知；相爱，我感到无比的幸运+幸福，幸运是因为遇到了他，幸福也是因为遇到了他，我相信我们一直会幸福下去的，也希望每一个人幸福永相随。</p>
			<p>I kind of have a thing for Him →</p>
		</div>
		<div class="coupleInfo hime">
			<img src="img/him.png" width=458 height=302 />
			<h1>HIM</h1>
			<p>Hi!我叫<a href="http://fuxingwang.cn" target="_blank">付兴旺</a>,名字是我快一岁时,还没有名,姥爷给我起的。后来很多人都称赞说这名儿不错，可惜到目前还没有什么兴旺发达的地方。<!--在互联网上一般用<a href="http://www.baidu.com/s?wd=chrisfoon" target="_blank">chrisfoon</a>来标识自己,在百度上搜索一下，大概所有的900多条记录都是和我有关的。--></p>
			<p>目前还是北漂一族，就职于国内某知名互联网公司，老老实实的做了3年系统开发，在第四个年头的2012年里，偶尔做运维，偶尔做系统架构。</p>
			<p>向往自由！喜欢有文艺性质的事物，热衷于技术。但在一切事情中，家庭永远排在第一位！活了20多年，最幸运的是能够认识@范晓玲 同学，而最大的幸福是能够和她一起去走未来的第一、第二个甚至第三个20年.(这要感谢 @王燕 同学)</p>
			<p>← I kind of have a thing for Her</p>

		</div>
		
	</div>
	<div class="clear"></div>
</div>

<script src="js/jquery.jcountdown1.3.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$("#time").countdown({
		date: "april 30, 2013",
		htmlTemplate: "%{d}<span class=\"cd-time\">天</span>",
		offset: 1,
		onChange: function( event, timer ){},
		onComplete: function( event ){
			$(this).html("结束");
			$("#timesShow").html("<span>婚礼已结束,幸福在继续...</span>");
		},
		onPause: function( event, timer ){
			$(this).html("Pause");
		},
		onResume: function( event ){
			$(this).html("Resumed");
		},
		leadingZero: true
	});
});
</script>
<?php require_once("footer.php"); ?>