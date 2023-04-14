<?php
		
class globalFunctions {
	public function includeContent($sub,$content,$title = '',$title2 = '') {
		if ($sub == 1) {
			$directory = "../";
		} else if ($sub == 2) {
			$directory = "../../";
		} else {
			$directory = "";
		}

		if ( $title != '' ) {
			$page_title = $title.' | ';
			$full_title = $page_title.$title2;
		} else {
			$page_title = $title;
			$full_title = $title2;
		}

		$report_title = $title2;
		
		include($directory."_includes/".$content.".php");
	}
}

$cri = new globalFunctions;

?>