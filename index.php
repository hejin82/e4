<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "e4 Project";
	$pageKeywords	= "Eclipse, e4";
	$pageAuthor		= "e4 team";
	
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
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>About e4</h3>
		      <p>The mission of the e4 project is to build a next generation platform for 
		      pervasive, component-based applications and tools. See the
		      <a href="/projects/project_summary.php?projectid=eclipse.e4">about page</a>
		      as well as the original
		      <a href="http://www.eclipse.org/proposals/e4/">project proposal</a>
		      for more details.
		      </p>
		      <p>
		      The Eclipse platform was first targeted at building an extensible IDE component 
		      framework. It has since grown to include a Rich Client Platform, enabling whole 
		      new categories of scenarios and domains. As the software landscape changes, 
		      so must the Eclipse platform in order to remain relevant and vibrant. These 
		      trend lines point to web technologies, new user interface metaphors, and 
		      distributed infrastructure. Now is the time to rethink elements of the platform 
		      so that Eclipse may remain at the forefront of application development.
		      </p>
		</div>
		<div class="homeitem3col">
			<h3>For more information</h3>
      	 <ul>
      	   <li><a href="http://eclipse.org/eclipse/development/">Project Development</a><br>
				Release plans and other information about the Eclipse Project development process.
      	   </li>
      	   <li><a href="http://download.eclipse.org/e4/downloads/">Downloads</a><br>
      	   		Download stable and integration builds of e4 technology on the e4 downloads page.
      	   </li>
      	   <li><a href="http://wiki.eclipse.org/e4">e4 wiki</a><br>
				A wealth of technical information on e4 can be found on the e4 wiki page. The
				wiki also provides more detailed planning information, and a variety of
				channels for communicating with the e4 developers.
      	   </li>
      	   <li><a href="http://www.eclipse.org/e4/resources/e4-whitepaper.php">e4 white paper</a><br>
      	   		The e4 white paper provides a detailed technical overview of the active areas of
      	   		exploration in the e4 project at the time of the e4 0.9 technology preview release.
      	   </li>
      	 </ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>The June 2012 Release is Available!</h6>
			<ul>
				<li><a href="http://download.eclipse.org/e4/downloads/drops/R-0.12-201206131100/index.html">Download it</a></li>
      		</ul>
      		Note that several e4 components graduated into the Eclipse Platform project to
      		produce the <a href="http://www.eclipse.org/eclipse4">Eclipse 4</a> stream of releases.
		</div>
	</div>
	
	<?= $rightcolumn ?>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>