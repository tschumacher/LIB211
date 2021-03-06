<?php
define('LIB211_AUTOLOAD',FALSE);
define('LIB211_OPERATOR',FALSE);
define('LIB211_TESTER',TRUE);
define('LIB211_ROOT',dirname(__FILE__));
require_once(LIB211_ROOT.'/lib211.php');
$tester = new LIB211Tester();
$testsAvailable = $tester->getTests();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>LIB211</title>
		<link rel="stylesheet" type="text/css" href="./doc/media/style.css"/>
	</head>
	<body>
		<table border="0" cellspacing="0" cellpadding="0" style="height:40px;" width="100%">
			<tr>
				<td class="header_top">LIB211</td>
			</tr>
			<tr>
				<td class="header_line"><img src="./doc/media/empty.png" width="1" border="0" alt=""  /></td>
			</tr>
			<tr>
				<td class="header_menu">
					[ <a class="menu" href="https://github.com/tschumacher/LIB211" target="blank">github: LIB211</a> ]
					[ <a class="menu" href="http://php.net" target="blank">PHP</a> ]
				</td>
			</tr>
			<tr>
				<td class="header_line"><img src="./doc/media/empty.png" width="1" height="1" border="0" alt=""  /></td>
			</tr>
		</table>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr valign="top">
				<td width="200" class="menu">
				<!--
					<div id="ric">
						<p><a href="./doc/ric_CHANGELOG.html" target="_blank">CHANGELOG</a></p>
						<p><a href="./doc/ric_FAQ.html" target="_blank">FAQ</a></p>
						<p><a href="./doc/ric_INSTALL.html" target="_blank">INSTALL</a></p>
						<p><a href="./doc/ric_README.html" target="_blank">README</a></p>						
					</div>
				-->
					<b><a href='./doc/index.html' target="_blank">Documentation:</a></b><br/>
					<div class="package">
						<a href="./doc/LIB211/LIB211.html" target="_blank">LIB211</a><br/>
						<a href="./doc/LIB211/LIB211Autoload.html" target="_blank">LIB211Autoload</a><br/>
						<a href="./doc/LIB211/LIB211Base.html" target="_blank">LIB211Base</a><br/>
						<?php
							$ignore = array('.','..','.cvs','.git','.svn','.DS_Store');
							$list = scandir(LIB211_ROOT.'/module');
							foreach ($list as $module) {
								if (!in_array($module,$ignore) AND file_exists(LIB211_ROOT.'/module/'.$module.'/'.$module.'.class.php')) {
									print '<a href="./doc/LIB211/LIB211'.$module.'.html" target="_blank">LIB211'.$module.'</a><br/>';
								}
							}
						?>
						<a href="./doc/LIB211/LIB211Tester.html" target="_blank">LIB211Tester</a><br/>
						<a href="./doc/LIB211/LIB211Testclass.html" target="_blank">LIB211Testclass</a>
					</div>
					<br/>
					<b><a href='./test.php'>Testrunner:</a></b>
					<div class="package">
						<a href="./test.php?test=all">Run all tests</a><br/>
						<a href="./test.php?cli&amp;test=all" target="_blank">Run with CLI</a><br/>
						<?php
 							foreach ($testsAvailable as $index => $test) {
 								print '<a href="./test.php?test='.$test['name'].'">Run '.$test['name'].'</a><br/>';
 							}
						?>
					</div>
				</td>
				<td>
					<table cellpadding="10" cellspacing="0" width="100%" border="0">
						<tr>
							<td valign="top">
								<div align="center"><h1>LIB211</h1></div>
								<b>Welcome to LIB211!</b><br/><br/>
								LIB211 is not an application, it's a PHP Library!
								<ul>
									<li><a href="./doc/index.html">Documentation</a></li>
									<li><a href="./test.php">Testrunner</a></li>
								</ul>
								<b>README</b>
								<pre><?php print file_get_contents('./README'); ?></pre>
								<div class="credit">
									<hr/>
									LIB211 &copy; 2007 - 2011 by <a href="http://cisco211.de" target="_blank">C!$C0^211</a>, Documentation generated by <a href="http://www.phpdoc.org" target="_blank">phpDocumentor</a>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>