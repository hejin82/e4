<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Whitepaper: e4 Technical Overview";
	$pageKeywords	= "Eclipse, e4, white paper";
	$pageAuthor		= "John Arthorne";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("e4 Whitepaper", "e4-whitepaper.php");
	$Nav->addCustomNav("What is e4?", "#whatise4", "_self", 3);
	$Nav->addCustomNav("Programming Model", "#progmodel", "_self", 3);

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
		<h3 id="whatise4"><strong>What is e4?</strong></h3>
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
			This is achieved with a number of new e4 technologies:</p>
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
			<p>
			The remainder of this paper will outline these new technologies in more detail.
			A general knowledge of the current Eclipse platform is assumed, so readers
			unfamiliar with Eclipse should consult other resources such as the 
			<a href="http://www.eclipse.org/whitepapers/eclipse-overview.pdf">Eclipse Platform Technical Overview</a> for 
			background information.
			</p>
		<h3 id="progmodel"><strong>Programming Model</strong></h3>
			<p>The e4 programming model starts with the existing principles of programming
			in Eclipse:</p>
			<ul>
				<li>Applications are made up of modular, loosely coupled components called <i>plug-ins</i> or
				<i>bundles</i>. Plug-ins can be made up of code written in Java and other
				languages, and/or other resources such as documentation and source code.</li>
				<li>Plug-ins can declare points where they can be customized or extended using
				<i>extension points</i>, and customize or extend other plug-ins by defining
				<i>extensions</i>.</li>
				<li>A very large number of plug-ins can be installed at a time, but only those
				plug-ins that are actually in use will be loaded and consume system resources.</li>
			</ul>
			<p>
			Where e4 differs from this traditional Eclipse programming model is in how
			plug-ins interact with each other outside the extension registry mechanism.
			Plug-ins often need to provide data and software services to other plug-ins
		 	in ways that aren't suited to the Eclipse extension registry. This was most
		 	commonly achieved by plug-ins <i>reaching out</i> to other plug-ins by
		 	directly referencing methods and constants defined in API Java classes. Plug-ins
		 	would typically define entry points for obtaining singleton instances of services
		 	(for example classes such as <tt>Platform</tt>, <tt>IDE</tt>, <tt>ResourcesPlugin</tt>,
		 	<tt>JavaCore</tt>, etc). This practice of reaching out led to tight coupling
		 	from plug-ins using services to a particular provider of that service, and the
		 	prevalence of singleton accessors made it difficult or impossible for alternate
		 	service implementations to be substituted, or for multiple implementations to be 
		 	available at the same time. The resulting plug-ins were therefore difficult to 
		 	reconfigure or reuse in different environments where different or multiple service
		 	implementations would be needed.</p>
		 	<p>
		 	Service programming models generally define three distinct participants:
		 	service <i>providers</i>, service <i>consumers</i>, and a <i>broker</i>
		 	or <i>container</i> that manages binding of service providers to consumers. Basic
		 	implementations of this programming model, such as the OSGi service API or
		 	the Eclipse extension registry, nicely decouple service providers from consumers,
		 	but often require service providers and consumers to have explicit knowledge
		 	of the particular container or service broker.
		 	<img border="1" width="350" alt="Diagram of simple service model" src="simple-service-model.png">
		 	</p>
		 	<p>
		 	The e4 programming model aims to further decouple these participants by
		 	reducing or eliminating these explicit links from the service producers and
		 	consumers to a specific service broker technology. This new flexibility is
		 	best explained by looking at how these three service participants are defined in e4.
		 	</p>
		 	<h4>Contexts: the service broker</h4>
		 	<p>
		 	e4 introduces the notion of <i>context</i> as a generic mechanism that stores
		 	or knows how to locate services and provide them to service consumers. At
		 	its basic level, an e4 context looks much like a Java <tt>Map</tt> storing values
		 	associated with some key. A client can put values into the map, or retrieve values
		 	from the map. The map can also store <i>context functions</i> that are pieces
		 	of code that know how to compute a context value lazily when values are
		 	requested by the client. When a client asks for a value not currently defined
		 	in the context, it will delegate to a parent context. This allows services
		 	or data to be stored in a central place and be consumed by many clients. Finally,
		 	contexts have a pluggable lookup strategy that allows external parties to "teach"
		 	the context how to retrieve certain kinds of values. The lookup strategy enables interoperability
		 	between e4 contexts and other service brokers such as the OSGi service registry.
		 	This flexibility at the service broker level is a very powerful enabler for reuse - 
		 	all kinds of different service lookup and brokerage systems can easily be integrated
		 	into the e4 context mechanism.
		 	</p>
		 	<h4>Injection: service consumers</h4>
		 	<p>
		 	The best practice in modern service programming models is that consumers
		 	receive dependencies via <a href="http://en.wikipedia.org/wiki/Dependency_injection">dependency injection</a>.
		 	This theoretically allows application code to completely eliminate its dependency on a particular
		 	container technology, thus enabling greater reuse. e4 directly supports and encourages
		 	dependency injection as a means to supply services to clients. Constructor,
		 	method, and field injection are all supported, and injection points can be identified
		 	in client code using either naming conventions or Java annotations. For clients
		 	that find inversion of control confusing and prefer code clarity over framework independence,
		 	the e4 context API can also be used directly (the <a href="http://java.sun.com/blueprints/corej2eepatterns/Patterns/ServiceLocator.html">
		 	service locator</a> design pattern).
		 	</p>
			
		<h3><strong>Modelled GUI Applications</strong></h3>
		<h3><strong>GUI Application Styling</strong></h3>
		<h3><strong>SWT Browser Edition</strong></h3>
		<h3><strong>Declarative Widgets</strong></h3>
		<h3><strong>Flexible Resource Model</strong></h3>
		<p>Some content.</p>
	</div>
</div>

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