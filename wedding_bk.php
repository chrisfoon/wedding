<?php require_once("header.php"); ?>
<div class="headImg"><img src="http://img14.poco.cn/mypoco/myphoto/20130110/15/17337730920130110155010018.jpg"/></div>
<?php 
require_once("menu.php"); 
echo create_menu();
?>

<div class="wedding">	
	<div id="map_info">
		<h1>婚礼地址：</h1>
		<li>山东省菏泽市成武县南鲁镇汽车站南80米(省道s254与省道s346交叉路口)</li>
		<div class="border"></div>
		<h1>行车路线：</h1>
		<li>方案1:菏泽火车站->菏泽汽车总站->南鲁镇</li>
		<li>方案2:济南火车站->济南长途汽车站->成武县(南鲁镇下车)</li>
		<li>方案3:济南机场->济南长途汽车站->成武县(南鲁镇下车)</li>
		<h1>自驾路线：</h1>
		<li><a href="http://j.map.baidu.com/oOzKh" target="_blank">查看详细</a></li>	
	</div>
	<div id="map_canvas"></div>
	<div class="clear"></div>
</div>



<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript" src="http://api.go2map.com/maps/js/api_v2.5.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 // function initialize() {
    //标准经纬度
    //融科资讯中心c座南楼的位置 39.981320,116.320247
    var myLatlng = new sogou.maps.LatLng(35.083880,115.930997);
    var myOptions = {
      zoom: 10,
      center: myLatlng,
      mapTypeId: sogou.maps.MapTypeId.ROADMAP
    }
    var map = new sogou.maps.Map(document.getElementById("map_canvas"), myOptions);
     
    var marker = new sogou.maps.Marker({
        position: myLatlng,
        map: map,
        title:"付兴旺 & 范晓玲 婚礼地点"
    }); 
  }
  );
</script>

<?php require_once("footer.php"); ?>
