<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body id="section1">
		<!-- Page-level header -->
		<header>
 			<img src="images/html-logo.svg" height="75" width="75" alt="HTML" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
<!-- STEP 3: Build a NAV element for global Web site navigation -->
			<nav>
				<ul>
					<li><a href="index.php" title="Go to the Home page">Home</a></li>
					<li><a href="red.php" title="Learn about red blocks">Red Blocks</a></li>
					<li><a href="blue.php" title="Learn about blue blocks">Blue Blocks</a></li>
					<li><a href="yellow.php" title="Learn about yellow blocks">Yellow Blocks</a></li>
					<li><a href="green.php" title="Learn about yellow blocks">Green Blocks</a></li>
					<li><a href="about.php" title="Learn about yellow blocks">About</a></li>
					
				</ul>
			</nav>
<!-- STEP 4a: Let's build a list of hyperlinks inside the above NAV element linking this page to other pages in the site - create an unordered list element (UL) -->
<!-- STEP 4b: Create a list item inside the UL (LI) -->
<!-- STEP 4c: Insert an A element inside the LI, and add an href that points to the HTML page 'red.php' - include also some text for the hyperlink -->
<!-- STEP 4d: Add an appropriate title attribute value for the A element, upload the changed page and try it out in a browser - proceed next to open up red.php in your code editor for STEP 5 -->
<!-- STEP 6: Build a link on this page to index.php (it might seem silly), so that the navigation is consistent from page-to-page - this is very important when building global navigation for Web apps from a usability perspective -->
<!-- STEP 7: Include navigation links for the pages blue.php and yellow.php - make sure all NAV elements on all pages are the same - upload your files and test your work -->
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section>
				<h3>Building Blocks In The News</h3>
				<!-- First Article -->
				<article>
					<h4>Latest Research Reveals Building Blocks are Cool</h4>
					<p>by Blocky Blockhead<br /><time datetime="2018-03-29">March 29, 2018</time></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing. Platea dictumst vestibulum rhoncus est pellentesque. Read more…</p>
				</article>
				<!-- Second Article -->
				<article>
					<h4>Building Blocks Aren’t Just For Kids</h4>
					<p>by Rectangle Square<br /><time datetime="2017-06-17">June 17, 2017</time></p>
					<p>Amet risus nullam eget felis eget nunc lobortis. Eget arcu dictum varius duis at consectetur lorem donec. Arcu felis bibendum ut tristique et egestas quis. Turpis tincidunt id aliquet risus feugiat in ante metus. Read more…</p>
				</article>
				<!-- Third Article -->
				<article>
					<h4>Investors Bet Big on Building Block Products</h4>
					<p>by Right Angle<br /><time datetime="2018-02-15">February 15, 2018</time></p>
					<p>At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Arcu cursus euismod quis viverra nibh cras. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Aenean sed adipiscing diam donec adipiscing. Read more…</p>
				</article>
			</section>
			<!-- Side Notes / Related Information -->
			<aside>
				<!-- Newsletter Subscribe Form -->
				<h3>Subscribe to Newsletter</h3>
				<form action="subscribe.php" method="get">
					<label for="emailAddress">Email</label>
					<input type="email" name="emailAddress" id="emailAddress" required />
					<button type="submit">Subscribe</button>
				</form>
				<figure>
					<img src="images/mini-figure.png" width="176" height="285" alt="Mini figure">
<!-- STEP 1a: Build an A (anchor) element that surrounds the word 'LEGO®' inside the FIGCAPTION below -->
					<figcaption><a href="https://www.lego.com/" rel="external" title="Visit the offical LEGO® Web site">LEGO®</a> mini figure by Vanja (Public Domain)</figcaption>
					<!-- Mini figure by Vanja (Public Domain) https://openclipart.org/detail/224315/clip-is-a-brick-minifig-4 -->
<!-- STEP 1b: Add an href attribute with the value set to the URL, "https://www.lego.com/" -->
<!-- STEP 1c: Since the link is pointing to somewhere other than this Web site, it is an external URL - as such, add rel="external" to the above A element start tag -->
<!-- STEP 1d: To add additional accessibility, add a useful title attribute as well with a short phrase describing the purpose of the hyperlink -->
<!-- STEP 2a: Upload this entire folder of files to a Web server and browse to the page in a browser -->
<!-- STEP 2b: How does the hyperlink text appear differently than the rest of the page? Click on the link, then click on the 'Back' button on your browser - how does the same link appear now? -->
<!-- STEP 2c: Look at your browsing history for this particular link - then clear your history and reload the page - notice how the link is restored - this is wayfinding -->
				</figure>
				<h3>Did You Know…?</h3>
				<p>One of the most important components of effective life-long learning is <em>play</em>. Learning a new skill (like Web development) should include a certain amount of play. Renowned children’s programming entertainer Mr. Rogers certainly knew about the value that play represented:</p>
				<!-- Quotation -->
				<blockquote cite="https://www.brainyquote.com/quotes/fred_rogers_193081">
					<p>Play is often talked about as if it were a relief from serious learning. But for children, play <em>is</em> serious learning. Play is really the work of childhood. –Fred Rogers</p>
				</blockquote>
				<p>Take a little time every day to just <strong>play</strong> with technology – you’ll be surprised how much you learn.</p>
			</aside>
		</main>
		<!-- Page-level footer -->
		<footer>
<!-- STEP 8a: Create a NAV element in the FOOTER for the legal stuff -->
			<nav>
				<a href="about/privacy-policy.php" title="Read our Privacy Policy">Privacy Policy</a> | <a href="about/privacy-policy.php#personal-information" title="Learn about how we treat your personal information">Use of Personal Information</a> |
				<a href="about/terms-of-use.php" title="Read our terms-of-use">Terms of Use</a>
				| <a href="about/terms-of-use.php#limitation-liability"  title="limitation-liability">limitation-liability</a>
			</nav>
<!-- STEP 8b: Build a link to the page 'Privacy Policy' - note that the href will need to be a relative path that points from this page, down into the 'about' folder -->
<!-- STEP 8c: Construct a second link that takes the visitor to the element with the id="personal-information" on the very same page, by appending the id value to the URL with a hash symbol (#personal-information) - this is called page-level navigation -->
<!-- STEP 8d: Try it in your browser, then proceed to about/privacy-policy.php in your code editor for the next step -->
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
