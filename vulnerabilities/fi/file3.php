<?php

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>漏洞：文件包含（File Inclusion）</h1>
	<div class=\"vulnerable_code_area\">
		<h3>文件3</h3>
		<hr />
		欢迎回来， <em>" . dvwaCurrentUser() . "</em><br />
		你的IP地址: <em>{$_SERVER[ 'REMOTE_ADDR' ]}</em><br />";
if( array_key_exists( 'HTTP_X_FORWARDED_FOR', $_SERVER )) {
	$page[ 'body' ] .= "Forwarded for: <em>" . $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
	$page[ 'body' ] .= "</em><br />";
}
		$page[ 'body' ] .= "你的UA地址: <em>{$_SERVER[ 'HTTP_USER_AGENT' ]}</em><br />";
if( array_key_exists( 'HTTP_REFERER', $_SERVER )) {
		$page[ 'body' ] .= "你从哪个页面跳转: <em>{$_SERVER[ 'HTTP_REFERER' ]}</em><br />";
}
		$page[ 'body' ] .= "页面主机在: <em>{$_SERVER[ 'HTTP_HOST' ]}</em><br /><br />
		[<em><a href=\"?page=include.php\">返回</a></em>]
	</div>

	<h2>更多参考信息</h2>
	<ul>
	<li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion', 'Wikipedia - File inclusion vulnerability' ) . "</li>
	<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion', 'WSTG - Local File Inclusion' ) . "</li>
	<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.2-Testing_for_Remote_File_Inclusion', 'WSTG - Remote File Inclusion' ) . "</li>
	</ul>
</div>\n";

?>
