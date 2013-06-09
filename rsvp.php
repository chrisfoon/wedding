<?php require_once("header.php"); ?>

<div class="headImg" id="headImg"></div>
<?php 
require_once("menu.php"); 
echo create_menu();
?>

<div class="content">
	<div id="msg"></div>
	
	<div id="rsvp">  
		<form id="rsvpForm" class="jqtransform" method=POST >
			<div class="rowElem"><label for="NM">姓名: </label> <input class="validate[required]" type="text" name="NM" id="NM"/> </div>
			<div class="rowElem"><label for="CF">手机: </label> <input class="validate[custom[telephone]] text-input" type="text" name="CF" id="CF"/> </div>
			<div class="rowElem"><label>参加: </label>
				<!-- <input type="checkbox" name="AC" value="1" ><label>婚礼</label> -->
				<input type="checkbox" name="AC" value="2" checked><label>北京答谢宴(6月2日)</label>
			</div>

			<div class="rowElem">
				<label>关系:</label>
				<select name="RL" id="RL">
					<option value="hy">好友</option>
					<option value="qq">亲戚</option>
					<option value="ts">同事</option>
					<option value="dx">大学同学</option>
					<option value="gz">高中同学</option>
					<option value="cz">初中同学</option>
					<option value="xx">小学同学</option>
					<option value="ot">其他</option>
				</select>
			</div>
			<div class="rowElem"><label for="EM">邮箱: </label> <input class="validate[custom[email]] text-input" type="text" name="EM" id="EM" size=20 /> </div>
			<div class="rowElem"><label for="WB">微博: </label> <input type="text" name="WB" size=20 /> </div>
			<div class="rowElem"><label for="QQ">&nbsp;QQ: </label> <input type="text" name="QQ" /> </div>
			<div class="rowElem" style="padding-left:100px;"><input type="submit" value="提交" /><div>
		</form>
	</div>
	<div class="clear"></div>

</div>
 
  <link href="js/jqtransformplugin/jqtransform.css" rel="stylesheet" />
  <link href="js/formValidator/validationEngine.jquery.css" rel="stylesheet" />
  <script src="js/jqtransformplugin/jquery.jqtransform.js"></script>
  <script src="js/formValidator/jquery.validationEngine.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	 if(!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)){
	    //$("#headImg").append('<img src="http://image170-c.poco.cn/mypoco/myphoto/20121219/11/17337730920121219110952039.jpg"/>');
		$("#headImg").append('<img src="./img/rsvp.jpg"/>');
	 }
	 $("#rsvpForm").validationEngine({  
            validationEventTriggers:"blur",  //触发的事件  validationEventTriggers:"keyup blur",  
            inlineValidation: true,//是否即时验证，false为提交表单时验证,默认true  
            success :  false,//为true时即使有不符合的也提交表单,false表示只有全部通过验证了才能提交表单,默认false  
            promptPosition: "topRight",//提示所在的位置，topLeft, topRight, bottomLeft,  centerRight, bottomRight  
            //failure : function() { alert("验证失败，请检查。");  }//验证失败时调用的函数  
            success : function() { 
				$("#msg").html("<p id='succ'>消息传送中...</p>");
				$.post("/cgi-bin/wedding/rsvp.cgi", $("#rsvpForm").serialize(),
						   function(data){
								alert(data.msg);
								$("#msg").html("<p id='"+data.status+"'>"+data.msg+"</p>");
						   }, 
						   "json");
				}
            });  

	});

	$(function() {
		$("form.jqtransform").jqTransform();
	});

</script>


<?php require_once("footer.php"); ?>
