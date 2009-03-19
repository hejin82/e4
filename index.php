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
		      pervasive, component-based applications and tools. This project is currently
		      in the proposal phase. See the <a href="http://www.eclipse.org/proposals/e4/">proposal</a>
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
      	 </ul>
		</div>
		<div class="homeitem3col">
			<h3>e4 Components</h3>
			<p>The e4 subproject is broken down into components. Each component operates 
				like a project unto its own, with its own set of committers, bug categories 
				and mailing lists.
			</p>
	      <table width="100%" border="0">
	        <tr> 
	          <td width="20%" valign="top"><b>Name</b></td>
	          <td width="82%"><b>Description</b></td>
	        </tr>
	        <tr> 
	          <td width="20%" valign="top"><a href="http://wiki.eclipse.org/E4/Resources">Resources</a></td>
	          <td width="82%">Platform resource management</td>
	        </tr>
	        <tr> 
	          <td width="20%" valign="top"><a href="http://www.eclipse.org/swt/" target="_top">SWT</a></td>
	          <td width="82%">Standard Widget Toolkit</td>
	        </tr>
	        <tr> 
	          <td width="20%" valign="top">UI</td>
	          <td width="82%">Platform user interface</td>
	        </tr>
	      </table>
		</div>
	</div>
	
	<?= $rightcolumn ?>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>