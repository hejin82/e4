<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "e4 technical overview";
	$pageKeywords	= "Eclipse, e4, white paper";
	$pageAuthor		= "John Arthorne";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1>Whitepaper: e4 techical overview</h1>

		<h3><strong>Executive Summary</strong></h3>

		<h3><strong>Another Section</strong></h3>


	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Whitepaper</h6>
				<ul>
					<li><a href="e4-whitepaper-20090724.pdf">PDF Version</a></li>
				</ul>
			</h6>
		</div>
	</div>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>