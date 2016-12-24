<!DOCTYPE HTML>
<html>
	<head>
		<title>Focus Card Game</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
			<section id="header">
				<div class="inner">
					<img id="logo-img" src="images/focus-logo-white.png" alt="Focus Card Game" />
					<h1><strong>FOCUS</strong></h1>
					<h4><em>"To pay particular attention."</em></h4>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">What is Focus</a></li>
  					<li><a href="#two" class="button scrolly">Rules</a></li>
            <li><a href="#three" class="button scrolly">Buy Now</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<header class="major">
								<h2>What is Focus?</h2>
							</header>
							<p>
                Focus is a highly competitive, fast-paced multi-player card game where quick thinking, razor-sharp observational
                skills and quick hands will help you succeed. The game can be enjoyed by all with a standard deck and
                requires logic, observation and quick reaction time. But beware! Each card is designed to trick players making
                every game one to remember. Winning may seem easy, but it will take a bit of luck and patience to claim
                victory!
              </p>
						</div>
						<div class="6u$ 12u$(medium) important(medium)">
							<span class="image fit"><img src="assets/cards/cardbacks.png" alt="" /></span>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main style2">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
              <header class="major">
                <h2>Game Rules</h2>
              </header>
              <p>
                To play, the dealer starts by shuffling the cards and
                dealing equal amounts to each player. The players to the dealer's right goes first and puts down their first
                card while also saying number one. The next player then places their card down and says the number two.
                The game proceeds in this manner with each player placing down a card from
                their decks onto the pile and calling out the number that follows the number which was previously called.
                When the count reaches nine, it resets back to one.
                When the number that is vocally called matches with the number on the card that was laid down, all players must make use of
                their hand-eye coordination and quickly place their hand on top of the pile. The last player to do so loses and must take all the cards
                in the pile. The first player to run out of cards wins.
              </p>
						</div>
						<div class="6u$ 12u$(medium)">
							<header class="major">
								<h2>Action Cards</h2>
							</header>
							<p>
                Action cards are special cards which do not contain a number but instead add additional variables to the game. In order to claim an action card,
                you must be the <em>first</em> to place your hand on the pile as soon as it is laid.
							</p>
              <ul>
                <li><strong>Change deck:</strong> the player who claims the change deck card is allowed to force <em>any</em> players to trade decks (including self).</li>
                <li><strong>Change deck sike:</strong> this card looks just like change deck, but has the word "sike" in the middle. If a person mistakes that card for a
                  change deck card and claims it, that player must collect the pile.</li>
                <li><strong>Number reverse:</strong> changes the number sequence - instead of counting up (1, 2, 3...), you would count backwards (7, 6, 5...)</li>
                <li><strong>Number reverse Sike:</strong> tricks the player into switching up the numbers; if a player counts wrong they must collect the pile</li>
              </ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section  class="main style1 special">
				<div class="container">
					<header class="major">
						<h2>Buy Now</h2>
					</header>
					<p>There are two options to play Focus</p>
					<div id="three" class="row 150%">
						<div class="6u 12u$(medium)">
							<span class="image fit"><img src="images/cards1.jpg" alt="" /></span>
							<h3>Print and Play</h3>
							<p class="low-margin">Download and play right away for the low cost of $1.99.</p>
							<ul class="actions">
								<li>
									<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="SKMAKM2ERXYK4">
										<table id="paypal" class="low-margin">
										<tr><td><input type="hidden" name="on0" value="Select a Card Back Color">Select a Card Back Color</td></tr><tr><td>
											<select name="os0">
												<option value="Red">Red </option>
												<option value="Blue">Blue </option>
												<option value="Pink">Pink </option>
												<option value="Purple">Purple </option>
												<option value="Aquamarine">Aquamarine </option>
											</select> </td></tr>
										</table>
										<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
										<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
									</form>

								</li>
							</ul>
						</div>
						<div class="6u$ 12u$(medium)">
							<span class="image fit"><img src="images/cards2.jpg" alt="" /></span>
							<h3>Buy a Deck</h3>
							<p>Buy a deck of 100 high-quality cards.</p>
							<ul class="actions">
								<li><a href="#" class="button">Sold Out</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>We're Always Working on Cool Stuff</h2>
					</header>
					<p>Sign up to get updates about new products. We will not email you with anything else.</p>
					<?php
						//if "email" variable is filled out, send email
						  if (isset($_REQUEST['email']))  {

							  //Email information
							  $admin_email = "lvlariohernandez@gmail.com";
							  $email = $_REQUEST['email'];
							  $subject = 'New Signup from your website';
							  $comment = 'Name: ' . $_REQUEST['name'];

							  //send email
							  mail($admin_email, "$subject", $comment, "From:" . $email);

							  //Email response
							  echo "Thank you for contacting us!";
						  }

						  //if "email" variable is not filled out, display the form
						  else  {
						?>
          <form method="post">
            Name: <input type="text" name="full_name" id="full_name"/>
            Email: <input type="email" name="email" id="email"/>
						<br />
						<ul class="actions uniform">
							<li><button type="submit" class="button special">Sign Up</button></li>
						</ul>
          </form>
					<?php } ?>
				</div>
			</section>

		<!-- Five -->
		<!--
			<section id="five" class="main style1">
				<div class="container">
					<header class="major special">
						<h2>Elements</h2>
					</header>

					<section>
						<h4>Text</h4>
						<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
						This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
						This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
						<hr />
						<header>
							<h4>Heading with a Subtitle</h4>
							<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
						</header>
						<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						<header>
							<h5>Heading with a Subtitle</h5>
							<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
						</header>
						<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						<hr />
						<h2>Heading Level 2</h2>
						<h3>Heading Level 3</h3>
						<h4>Heading Level 4</h4>
						<h5>Heading Level 5</h5>
						<h6>Heading Level 6</h6>
						<hr />
						<h5>Blockquote</h5>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
						<h5>Preformatted</h5>
						<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
					</section>

					<section>
						<h4>Lists</h4>
						<div class="row">
							<div class="6u 12u$(medium)">
								<h5>Unordered</h5>
								<ul>
									<li>Dolor pulvinar etiam.</li>
									<li>Sagittis adipiscing.</li>
									<li>Felis enim feugiat.</li>
								</ul>
								<h5>Alternate</h5>
								<ul class="alt">
									<li>Dolor pulvinar etiam.</li>
									<li>Sagittis adipiscing.</li>
									<li>Felis enim feugiat.</li>
								</ul>
							</div>
							<div class="6u$ 12u$(medium)">
								<h5>Ordered</h5>
								<ol>
									<li>Dolor pulvinar etiam.</li>
									<li>Etiam vel felis viverra.</li>
									<li>Felis enim feugiat.</li>
									<li>Dolor pulvinar etiam.</li>
									<li>Etiam vel felis lorem.</li>
									<li>Felis enim et feugiat.</li>
								</ol>
								<h5>Icons</h5>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								</ul>
							</div>
						</div>
						<h5>Actions</h5>
						<div class="row">
							<div class="6u 12u$(medium)">
								<ul class="actions">
									<li><a href="#" class="button special">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions small">
									<li><a href="#" class="button special small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
								<ul class="actions vertical">
									<li><a href="#" class="button special">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions vertical small">
									<li><a href="#" class="button special small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
							</div>
							<div class="6u 12u$(medium)">
								<ul class="actions vertical">
									<li><a href="#" class="button special fit">Default</a></li>
									<li><a href="#" class="button fit">Default</a></li>
								</ul>
								<ul class="actions vertical small">
									<li><a href="#" class="button special small fit">Small</a></li>
									<li><a href="#" class="button small fit">Small</a></li>
								</ul>
							</div>
						</div>
					</section>

					<section>
						<h4>Table</h4>
						<h5>Default</h5>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>

						<h5>Alternate</h5>
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>

					<section>
						<h4>Buttons</h4>
						<ul class="actions">
							<li><a href="#" class="button special">Special</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button big">Big</a></li>
							<li><a href="#" class="button">Default</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<ul class="actions fit">
							<li><a href="#" class="button fit">Fit</a></li>
							<li><a href="#" class="button special fit">Fit</a></li>
							<li><a href="#" class="button fit">Fit</a></li>
						</ul>
						<ul class="actions fit small">
							<li><a href="#" class="button special fit small">Fit + Small</a></li>
							<li><a href="#" class="button fit small">Fit + Small</a></li>
							<li><a href="#" class="button special fit small">Fit + Small</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button special icon fa-download">Icon</a></li>
							<li><a href="#" class="button icon fa-download">Icon</a></li>
						</ul>
						<ul class="actions">
							<li><span class="button special disabled">Disabled</span></li>
							<li><span class="button disabled">Disabled</span></li>
						</ul>
					</section>

					<section>
						<h4>Form</h4>
						<form method="post" action="#">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
								</div>
								<div class="12u$">
									<div class="select-wrapper">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-low" name="demo-priority" checked>
									<label for="demo-priority-low">Low</label>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-normal" name="demo-priority">
									<label for="demo-priority-normal">Normal</label>
								</div>
								<div class="4u$ 12u$(small)">
									<input type="radio" id="demo-priority-high" name="demo-priority">
									<label for="demo-priority-high">High</label>
								</div>
								<div class="6u 12u$(small)">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="12u$">
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>

					<section>
						<h4>Image</h4>
						<h5>Fit</h5>
						<div class="box alt">
							<div class="row uniform 50%">
								<div class="12u"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
							</div>
						</div>
						<h5>Left &amp; Right</h5>
						<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
					</section>

				</div>
			</section>
		-->

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/profile.php?id=100012682277544" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/focuscardgame/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="mailto:focuscardgame@gmail.com" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Focus</li><li>Design: <a href="http://www.miamicodemonkeys.com">Code Monkeys</a></li>
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-81896604-1', 'auto');
			  ga('send', 'pageview');

			</script>
	</body>
</html>
