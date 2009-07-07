<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Whitepaper: e4 Technical Overview";
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
	<style>
		p {
			margin-left:20px;
			line-height:150%;
		}
		ul {
			margin-left:30px;
		}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<h3><strong>Executive Summary</strong></h3>
			<p>
		      The Eclipse platform was first targeted at building an extensible IDE component 
		      framework. It has since evolved into a general-purpose platform for building
		      extensible software applications of all kinds. Eclipse applications are now found 
		      in such diverse deployment environments as web servers, web browsers, 
		      embedded clients, and traditional rich desktop applications. The e4 platform 
		      was designed to simplify development of software components and component-based 
		      applications to meet the demands of this ever changing computing landscape.
		      This paper provides a technical overview of the e4 architecture and programming
		      model.
			</p>
		<h3><strong>What is e4?</strong></h3>
			<p>To provide some context on the rest of this paper, it is useful to first
			clarify what precisely e4 is. The most useful definition is that e4 is a cluster
			of related technologies for building extensible component-based applications.
			Rather than a wholesale replacement of the Eclipse platform, e4 brings a new
			set of technologies into the existing Eclipse platform that make Eclipse components
			easier to write, more configurable by application developers and integrators, 
			and easier to reuse in diverse runtime environments.</p>
			<p>The first generation of the Eclipse platform (releases 1.0 to 2.1) was
			primarily an integration platform. Its main strength was pulling together diverse
			plug-ins written by different authors, and integrating them into a common application
			with a consistent and cohesive end user experience.</p>
			<p>The second generation of the Eclipse platform (the 3.x releases), was powered by an OSGi runtime, making
			it a more powerful general purpose component-based application framework.
			This second generation platform was good at scaling up from very small embedded
			applications up to large rich client applications and web servers. However,
			each component (plug-in) was typically very difficult to reuse outside of the
			specific environment for which it was designed and tested. It was easy to add
			or remove components from the system, but often quite difficult to take
			a component designed for one application or runtime environment and
			reuse it in a completely different application or environment.</p>
			<p>The e4 vision is to make it much easier to write components that are
			more reusable and customizable for a wide range of applications and environments.
			This is achieved with a number of new e4 technologies:
			<ul>
				<li>A new programming model that aggressively avoids components reaching 
				out to, or making assumptions about their application container.</li>
				<li>The GUI is represented as a uniform model that can be generically queried, 
				manipulated, tooled, and extended, allowing for rapid design and customization of the user 
				interface with little or no coding effort.</li>
				<li>Use of web styling technology (CSS), allows the presentation of user interface 
				elements to be infinitely tweaked and reconfigured without any modification of application code.</li>
				<li>A new port of SWT, dubbed "browser edition", that allows existing SWT
				applications to be executed on web platforms such as ActionScript/Flash.</li>
				<li>A framework for defining the design and structure of SWT applications
				declaratively. This eliminates writing of repetitive boilerplate SWT code, thus 
				reducing development cost, improving UI consistency, and enabling customized application rendering.</li>
				<li>In the development tools space, a more flexible resource model that
				provides better support for complex project project layouts.</li>
			</ul>
			The remainder of this paper will outline these new technologies in more detail.
			</p>
			
		<h3><strong>Programming Model</strong></h3>
			<p>
		<h3><strong>Modelled GUI Applications</strong></h3>
		<h3><strong>GUI Application Styling</strong></h3>
		<h3><strong>SWT Browser Edition</strong></h3>
		<h3><strong>Declarative Widgets</strong></h3>
		<h3><strong>Flexible Resource Model</strong></h3>
		<p>Some content.</p>
	</div>
</div?

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