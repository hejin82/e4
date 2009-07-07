<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$_theme = "Nova";
	$theme = "Nova";
	
	
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}
	
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList( array() );
	$Nav->addNavSeparator( "About this project", "/projects/project_summary.php?projectid=eclipse.e4", "", 1  );
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/e4", 	"_self", 2);
	$Nav->addCustomNav("Downloads", "http://download.eclipse.org/e4/downloads/", 	"_self", 2);
	$Nav->addCustomNav("Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.e4", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/e4-dev", "_self", 2);
	$Nav->addCustomNav("Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=eclipse.e4", "_self", 2);
	$Nav->addCustomNav("Bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=Eclipse&product=E4&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit", 	"_self", 2);
	$Nav->addCustomNav("File a Bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=e4", 	"_self", 2);

	$Nav->addNavSeparator( "Projects", "index.php", "", 1  );
	$Nav->addCustomNav("Platform", "/platform/", "_self", 2);
	$Nav->addCustomNav("JDT", "/jdt/", "_self", 2);
	$Nav->addCustomNav("PDE", "/pde/", "_self", 2);
	$Nav->addCustomNav("e4", "/e4/", "_self", 2);
	$Nav->addCustomNav("Incubator", "/eclipse/incubator/", "_self", 2);

$rightcolumn = <<<EOHTML

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>EclipseCon 2009</h6>
			<center>
			<a href="http://www.eclipsecon.org/2009/"><img border="0" src="http://www.eclipsecon.org/2009/static/image/100x100_speaking.gif"
 height="100" width="100" alt="I'm speaking at EclipseCon 2009"/></a>
			</center>
      	</div>		
		<div class="sideitem">
			<h6>Incubation Phase</h6>
			<center>
					<a href="/projects/what-is-incubation.php"><img 
	        			src="/images/egg-incubation.png" 
	        			border="0" width=70 alt="Incubation" /></a></td>
	    	</center>
      	</div>
	</div>
			
EOHTML;

?>