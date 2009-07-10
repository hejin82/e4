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
	$Nav->addCustomNav("Modelled GUI Applications", "#guimodel", "_self", 3);
	$Nav->addCustomNav("Declarative Styling", "#styling", "_self", 3);
	$Nav->addCustomNav("SWT Browser Edition", "#swtbe", "_self", 3);
	$Nav->addCustomNav("Declarative Widgets", "#xwt", "_self", 3);
	$Nav->addCustomNav("Flexible Resource Model", "#resources", "_self", 3);

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
		 	<img border="1" width="350" alt="Diagram of simple service model" src="images/simple-service-model.png">
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
		 	into the e4 context mechanism. This ability to create context hierarchies and insert
		 	service lookup strategies allows contexts to scale up from very simple map-like
		 	service registration and lookup to highly complex and dynamic service arbitration mechanisms.
		 	
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
		 	<h4>Service providers</h4>
		 	<p>
		 	There is great variety in the services and data that plug-ins make available for
		 	consumption by other plug-ins. Some services are very lightweight and may
		 	be consumed and discarded thousands of times, while others are heavyweight
		 	services designed to live for long periods of time. There are many different
		 	life-cycles to these services - some come and go based on the existence of a particular UI
		 	widget, others may be tied to the lifecycle of a plug-in. Due to this great variety,
		 	there is no one single method of service publication that is appropriate for all service
		 	providers. 
		 	</p>
		 	<p>
		 	In general, services are published in e4 using the OSGi service mechanism. Services
		 	can either be registered and removed programmatically, or via OSGi declarative
		 	services. Declarative services allow the service instantiation to be delayed until
		 	required by some client. Of course, there are a wide variety of helper frameworks
		 	that can be used for publishing OSGi services, such as Spring, iPOJO, Peaberry, etc.
		 	By using OSGi services as the foundation for service publication, all of these frameworks
		 	can be used seamlessly in e4.
		 	</p>
		 	<p>While most client code will use services, frameworks that create contexts
		 	can simply add services directly to a context where appropriate. For example
		 	a service associated with a widget may want to register with a context in the
		 	widget constructor and withdraw the service when the widget is disposed. Manual
		 	registration allows a service to be made available only to a specific context, 
		 	rather than making it globally available via OSGi services. Finally, contexts support
		 	outjection (reverse injection) of services back into the context via a field
		 	or accessor method.
		 	</p>
		 	<p>Putting this all together, we have a model where the typical service
		 	consumer knows nothing about who provided the service, or about what
		 	broker was used to bind and obtain the service. The service producer
		 	can also be largely decoupled from the service broker by separating the service
		 	configuration data from the service implementation itself (either using declarative
		 	mechanisms such as DS, outjection, or simply by separating the framework-aware
		 	code doing the registration from the service implementation itself. This model is
		 	illustrated in figure 2.
		 	<img border="1" width="350" alt="Diagram of e4 service model" src="images/service-model.png"/>
		 	</p>
		 	
		<h3 id="guimodel"><strong>Modelled GUI Applications</strong></h3>
			<p>
			The previous generation of the Eclipse platform UI (called the <i>workbench</i>)
			was a complex and difficult to maintain piece of software. Although it has been made
			somewhat more flexible over the years, it still enforces a rigid, hard-coded
			model of the workbench structure and layout: a single workbench containing
			workbench windows, with each window containing one or more workbench pages,
			and each page made up of an editor area, a set of view stacks, and some
			hard-coded trim elements (perspective switcher, progress indicator, etc). Application
			designers have a strictly limited set of options when customising the structure of 
			Eclipse-based applications.
			</p>
			<p>
			The e4 workbench greatly increases flexibility for application designers by providing
			a formal model of the elements that comprise an instance of the workbench. 
			Applications can reconfigure or extend this model to arrive at very different presentations
			of their application with no additional coding required. Normalizing the workbench structure
			as a well defined model has the added benefit of making the code for the
			workbench itself much simpler and less error prone. Most importantly, this
			allows for very different workbench UI structures, such as parts living outside
			of perspectives, views and editors in dialogs, and other designs not previously
			allowed by the older generation workbench with its rigid hand-crafted model.
			Having a model also allows for more advanced tool support for application 
			designers, such as visual design tools.
			</p>
			<p>
			The e4 workbench model can also be manipulated on the fly, and model
			changes are rendered immediately in the UI. This opens the door to scripted
			manipulation of the workbench structure and state, much like how Javascript
			manipulates a document object model in a web browser. In figure 3, we see
			a model editor that is being used to customize the running application - in this
			case changing the name and tooltip of the traditional Eclipse problems view.
		 	<img border="1" alt="e4 model editor" src="images/model-editor.png" width="350"/>
			</p>
			<p>
			The e4 workbench model is translated into widgets via a <i>renderer</i>.
			The workbench comes with a default renderer that instantiates the model
			as SWT widgets, but alternate renders can be supplied to render model elements
			differently. This can be used to make subtle changes to the concrete widgets
			shown to the user, or even to allow rendering in a completely different widget
			library or runtime environment such as a web browser. Renderers are contributed
			at the level of individual model elements, rather than a single monolithic renderer
			for the entire application. A single renderer can supply rendering for one or more
			model elements, or conversely there can be multiple renderers available for a
			given model element. This fine granularity of extensibility allows clients to extend
			the workbench model with their own elements, and then insert custom renderers
			for rendering their own model elements in a particular way.
			</p>
		<h3 id="styling"><strong>Declarative Styling</strong></h3>
			<p>While the basic translation of the workbench model into widgets
			is performed by the renderer, a pluggable <i>styling engine</i> is used
			to customize the fonts, colors, and other aspects of widget presentation. As
			we have learned from the evolution of web presentation technologies, separating
			document structure (HTML) from style (CSS) is a powerful way to ensure a 
			consistent look and feel across many documents, and to allow style changes
			to be made easily in a single place.
			</p>
			<p>
			The e4 styling engine has no knowledge of the model-based UI, and in fact
			can run as a completely independent piece on earlier Eclipse versions. The engine takes
			concrete widgets and styling data as input, and performs the styling on the
			instantiated widgets to produce the styled result. Figure 4 shows the flow
			from the model, into widgets via on or more renderers, and then to a styled
			output using the styling engine and the separate declarative styling data.
		 	<img border="1" alt="Rendering and styling data flow" src="images/render-dataflow.png" width="350"/>
		 	</p>
			
			<p>
			- IStylingEngine is interface with model/renderers
			- Can theoretically have different styling engines that aren't CSS based
			- CSS uses a mixture of standard HTML attributes, and custom attributes
			- Styling operates strictly at the widget level, it knows nothing of models
			- Can express different styleable application-specific widget states ("busy view", "active editor", etc)
			
		<h3 id="swtbe"><strong>SWT Browser Edition</strong></h3>
		<h3 id="xwt"><strong>Declarative Widgets</strong></h3>
		<h3 id="resources"><strong>Flexible Resource Model</strong></h3>
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