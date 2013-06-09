<?php
$menu = array();
$menu[] = array("index.php","我们","THE COUPLE");
$menu[] = array("proposal.php","求婚","PROPOSAL");
$menu[] = array("rsvp.php","邀请","RSVP");
$menu[] = array("photo.php","照片","PHOTO");
$menu[] = array("wedding.php","婚礼","WEDDING");
$menu[] = array("bless.php","祝福","YOUR BLESSING");
$menu[] = array("weixin.php","微信","WEIXIN");

function create_menu(){
	Global $menu;
	$this_page = array_pop( explode('/', $_SERVER['SCRIPT_NAME']) );

	$menu_html = '<div class="banner"><div class="banner_cnt">';
	foreach ($menu as $item){
		$menu_html .= '<li';
		if ($this_page == $item[0])
			$menu_html .= ' class="onSelected"';
		$menu_html .= '><a href="'.$item[0].'">'.$item[1].'<span>'.$item[2]."</span></a></li>\n";
	}
	$menu_html .= '</div><div class="clear"></div></div>';

	return $menu_html;
}

?>


