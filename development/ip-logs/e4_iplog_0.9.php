<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-07-23
	#
	# Description: Eclipse e4 project 0.9 release IP log
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "e4 0.9 Release IP Log";
	$pageKeywords	= "eclipse, e4, IP, intellectual property";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

<h2>Licenses</h2>
	<ul>
			<li>Eclipse Public License, 1.0</li>
		</ul>

<h2>Third-Party Code</h2>
<table border="1" cellpadding="3" cellspacing="0">
<tr>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">CQ</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">Third-Party Code</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">License</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">Use</th>
</tr>
<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=2767">2767</a></td>

	<td>TK-UI CSS</td>
	<td>Eclipse Public License</td>
	<td></td>
	</tr>
	<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=2852">2852</a></td>
	<td>Apache Batik Version: 1.6 **See Comments 6&amp;7 re CSS SAC API (using Orbit CQ2070)</td>

	<td>Apache License, 2.0</td>
	<td></td>
	</tr>
	<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=2856">2856</a></td>
	<td>XWT</td>
	<td>Eclipse Public License</td>

	<td></td>
	</tr>
	<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=3185">3185</a></td>
	<td>EMF Javascript support</td>
	<td>Eclipse Public License</td>
	<td></td>

	</tr>
	<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=3186">3186</a></td>
	<td>EMF Toolkit  model</td>
	<td>Eclipse Public License</td>
	<td></td>
	</tr>

	<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=3390">3390</a></td>
	<td>dojo Version: 1.1.0 (*Subset) (PB CQ2026)</td>
	<td>Academic Free License OR BSD (Dual - we choose BSD), BSD alone, MIT, Unicode, Apache 2.0</td>
	<td>unmodified source </td>
	</tr>
	<tr>

	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=3442">3442</a></td>
	<td>Mozilla Rhino Version: 1.6R6 (**excluding proprietary files grabbed during build) (PB CQ2175)</td>
	<td>Mozilla Public License 1.1 (MPL)</td>
	<td>unmodified binary </td>
	</tr>
	<tr>
	<td><a href="https://dev.eclipse.org/ipzilla/show_bug.cgi?id=3443">3443</a></td>

	<td>Apache Jakarta Commons BeanUtils Version: 1.7 (excludes dependent libs) (PB CQ1905)</td>
	<td>Apache License, 2.0</td>
	<td>unmodified binary </td>
	</tr>
	</table>
<p>
<p><em>No pre-req dependencies</em></p>
<h2>Committers</h2>


<table border="1" cellpadding="3" cellspacing="0">
<tr><th colspan="3" bordercolor="#7A79A7" bgcolor="#7A79A7">Past and Present Active</th></tr>
<tr><th bordercolor="#7A79A7" bgcolor="#7A79A7">Name</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">Organization</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">&nbsp;</th>
</tr>
<tr>
	<td>aweinand </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>bbiggs </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>cmckillop </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>cmclaren </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>darins </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>daved </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>dejan </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>dj </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>dmegert </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>dpollock </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>droberts </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>dwilson </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>eidsness </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>jeem </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>karice </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>kmaetzel </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>mdaniel </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>melder </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>mvalenta </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>mvanmeek </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>nick </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>nzelenkov </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>prapicau </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>rchaves </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>rodrigo </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>rperetti </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>sarsenau </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>sdimitro </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>sdimitro2 </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>sfranklin </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>ssarkar </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>sxenos </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>

	<td>tod </td>
	<td>(not a current committer) </td>
		<td></td>
		</tr>
	<tr>
	<td>twatson </td>
	<td>(not a current committer) </td>

		<td></td>
		</tr>
	<tr>
	<td>John Arthorne</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>

	<td>Serge Beauchamp</td>
	<td>Freescale Semiconductor </td>
		<td></td>
		</tr>
	<tr>
	<td>Oleg Besedin</td>
	<td>IBM </td>

		<td></td>
		</tr>
	<tr>
	<td>Boris Bokowski</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>

	<td>Szymon Brandys</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>
	<td>Grant Gayed</td>
	<td>IBM </td>

		<td></td>
		</tr>
	<tr>
	<td>Bogdan Gheorghe</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>

	<td>Felipe Heidrich</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>
	<td>R?diger Herrmann</td>
	<td>Innoopract </td>

		<td></td>
		</tr>
	<tr>
	<td>Kim Horne</td>
	<td> </td>
		<td></td>
		</tr>
	<tr>

	<td>Simon Kaegi</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>
	<td>Jeff McAffer</td>
	<td>Code 9 </td>

		<td></td>
		</tr>
	<tr>
	<td>Kevin McGuire</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>

	<td>Eric Moffatt</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>
	<td>Philippe Mulet</td>
	<td>IBM </td>

		<td></td>
		</tr>
	<tr>
	<td>Benjamin Muskalla</td>
	<td>Innoopract </td>
		<td></td>
		</tr>
	<tr>

	<td>Steve Northover</td>
	<td>Bedarra Research Labs </td>
		<td></td>
		</tr>
	<tr>
	<td>Martin Oberhuber</td>
	<td>Wind River </td>

		<td></td>
		</tr>
	<tr>
	<td>Marcelo Paternostro</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>

	<td>Silenio Quarti</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>
	<td>Thomas Schindl</td>
	<td>BestSolution </td>

		<td></td>
		</tr>
	<tr>
	<td>Vineet Sinha</td>
	<td>Architexa </td>
		<td></td>
		</tr>
	<tr>

	<td>Ralf Sternberg</td>
	<td>Innoopract </td>
		<td></td>
		</tr>
	<tr>
	<td>Remy Suen</td>
	<td> </td>

		<td></td>
		</tr>
	<tr>
	<td>Olivier Thomann</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>

	<td>Kai Toedter</td>
	<td>Siemens AG </td>
		<td></td>
		</tr>
	<tr>
	<td>Hallvard Traetteberg</td>
	<td> </td>

		<td></td>
		</tr>
	<tr>
	<td>Francis Upton IV</td>
	<td> </td>
		<td></td>
		</tr>
	<tr>

	<td>Paul Webster</td>
	<td>IBM </td>
		<td></td>
		</tr>
	<tr>
	<td>Yves YANG</td>
	<td>Soyatec </td>

		<td></td>
		</tr>
	</table>
<p>


<table border="1" cellpadding="3" cellspacing="0">
<tr><th colspan="3" bordercolor="#7A79A7" bgcolor="#7A79A7">Never Active</th></tr>
<tr><th bordercolor="#7A79A7" bgcolor="#7A79A7">Name</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">Organization</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">&nbsp;</th>

</tr>
<tr>
		<td>Chris Aniszczyk</td>
		<td>Code 9 </td>
				<td></td>
				</tr>
		<tr>
		<td>Frankf Appel</td>

		<td> </td>
				<td></td>
				</tr>
		<tr>
		<td>Kevin Barnes</td>
		<td>IBM </td>
				<td></td>

				</tr>
		<tr>
		<td>James Blackburn</td>
		<td> </td>
				<td></td>
				</tr>
		<tr>
		<td>Benjamin Cabe</td>

		<td>Anyware Technologies </td>
				<td></td>
				</tr>
		<tr>
		<td>Christian Campo</td>
		<td>compeople AG </td>
				<td></td>

				</tr>
		<tr>
		<td>Brian Fitzpatrick</td>
		<td>Red Hat, Inc. </td>
				<td></td>
				</tr>
		<tr>
		<td>Matthew Hatem</td>

		<td>IBM </td>
				<td></td>
				</tr>
		<tr>
		<td>Matthew Hatem</td>
		<td> </td>
				<td></td>

				</tr>
		<tr>
		<td>Kenn Hussey</td>
		<td> </td>
				<td></td>
				</tr>
		<tr>
		<td>Scott Kovatch</td>

		<td>Adobe Systems </td>
				<td></td>
				</tr>
		<tr>
		<td>Jochen Krause</td>
		<td>Innoopract </td>
				<td></td>

				</tr>
		<tr>
		<td>Scott Lewis</td>
		<td>Code 9 </td>
				<td></td>
				</tr>
		<tr>
		<td>Carolyn MacLeod</td>

		<td>IBM </td>
				<td></td>
				</tr>
		<tr>
		<td>Ed Merks</td>
		<td> </td>
				<td></td>

				</tr>
		<tr>
		<td>Duong Nguyen</td>
		<td>IBM </td>
				<td></td>
				</tr>
		<tr>
		<td>Andrew Niefer</td>

		<td>IBM </td>
				<td></td>
				</tr>
		<tr>
		<td>Dave Orme</td>
		<td> </td>
				<td></td>

				</tr>
		<tr>
		<td>Ketan Padegaonkar</td>
		<td> </td>
				<td></td>
				</tr>
		<tr>
		<td>Chris Recoskie</td>

		<td>IBM </td>
				<td></td>
				</tr>
		<tr>
		<td>Michael Rennie</td>
		<td>IBM </td>
				<td></td>

				</tr>
		<tr>
		<td>Doug Schaefer</td>
		<td>Wind River </td>
				<td></td>
				</tr>
		<tr>
		<td>Michael Scharf</td>

		<td>Wind River </td>
				<td></td>
				</tr>
		<tr>
		<td>Eike Stepper</td>
		<td> </td>
				<td></td>

				</tr>
		<tr>
		<td>Mike Wilson</td>
		<td>IBM </td>
				<td></td>
				</tr>
		<tr>
		<td>Angelo ZERR</td>

		<td> </td>
				<td></td>
				</tr>
			</table>
	<p>
	<h2>Contributors and Their Contributions</h2>
<table border="1" cellpadding="3" cellspacing="0">
<tr>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">Bug</th>

<th bordercolor="#7A79A7" bgcolor="#7A79A7">Size</th>
<th bordercolor="#7A79A7" bgcolor="#7A79A7">Description</th>
</tr>
<tr><td colspan="3" style="background-color: #DDDDDD">Aghiles&nbsp;Abdesselam (ca.ibm.com)</td>
		</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=263184">263184</a></td>
		<td>1.0K</td>

		<td>[CSS] Need Shell:active pseudo class<br>fix in the junit test</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=265214">265214</a></td>
		<td>41.4K</td>
		<td>[CSS] Summary bug for Cascading Rule Tests and CTabFolder Properties<br>CSS Properties and JUnits</td>

				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=265232">265232</a></td>
		<td>17.4K</td>
		<td>[CSS] CTabFolder extended properties are missing retrieveCSSProperty()<br>retrieveCSSProperty() does not only return null & junit test</td>
				</tr>

	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266028">266028</a></td>
		<td>11.8K</td>
		<td>[CSS] Property retrieval must check instanceof and return null<br>instanceof check and will return null when appropriate</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266146">266146</a></td>

		<td>2.8K</td>
		<td>[CSS] JUnit for: Property retrieval must check instanceof and return null<br>junit test for retrieveCSSProperty()</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266804">266804</a></td>
		<td>14.2K</td>

		<td>[CSS] borderVisible VS border-visible<br>properties and junits updated</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266970">266970</a></td>
		<td>11.0K</td>
		<td>[CSS] Widget.setData keys should be qualified<br>qualified updated</td>

				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=271531">271531</a></td>
		<td>8.1K</td>
		<td>[CSS] Button styleable properties<br>Label and Button now have alignment stylable property</td>
				</tr>
	<tr><td colspan="3" style="background-color: #DDDDDD">Angelo (gmail.com)</td>

		</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=256844">256844</a></td>
		<td>269.9K</td>
		<td>[CSS] TK-UI CSS engine for Nebula widget<br>TK-UI CSS engine Eclipse project  for Nebula widget</td>
				</tr>
	<tr><td colspan="3" style="background-color: #DDDDDD">James&nbsp;Blackburn (gmail.com)</td>

		</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266662">266662</a></td>
		<td>698</td>
		<td>Assertion Failed Exception in ProjectPathVariableManager<br>patch1</td>
				</tr>
	<tr>

		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266712">266712</a></td>
		<td>574</td>
		<td>ctrl-drag folder to create linked resource and groups fails if directory already contains linked resources<br>Patch 1</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=266712">266712</a></td>

		<td>1.3K</td>
		<td>ctrl-drag folder to create linked resource and groups fails if directory already contains linked resources<br>Test1</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=267201">267201</a></td>
		<td>3.7K</td>

		<td>Resource filters problems with aliases<br>Test1</td>
				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=268507">268507</a></td>
		<td>3.1K</td>
		<td>Changing a linkLocation using #setLinkLocation doesn't automatically update child resources<br>Test 1</td>

				</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=268518">268518</a></td>
		<td>12.4K</td>
		<td>Filtered Resorces problems Illegal Argument Exception during project open, issues with filtered resource appearing<br>Test 1</td>
				</tr>
	<tr><td colspan="3" style="background-color: #DDDDDD">Benjamin&nbsp;Cabe (anyware-tech.com)</td>

		</tr>
	<tr>
		<td><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=280462">280462</a></td>
		<td>10.3K</td>
		<td>e4 splash screen<br>Implementation v03</td>
				</tr>
	</table>

<h2>Repositories</h2>
<p>The information contained in this log was generated by using commit information from the following repositories:</p>
<div style='padding-left: 2em'>/cvsroot/eclipse/e4</div>
<p>
</div><!-- midcolumn -->
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
