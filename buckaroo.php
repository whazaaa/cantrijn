<?php

	$signature3 = sha1("brq_amount=10.00brq_currency=EURbrq_invoicenumber=001brq_websitekey=K63U66RHdS" + "DCE476532C2345F1BEF8E6A9DCC351AE");

	$Brq_signature = $signature3;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Forms</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="author" content="Stagiair">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="style/index.css" type="text/css"/>

	</head>
	<body class="body">

		<header class="mainHeader">
			<img src="img/starwars.jpg" alt="Logo"/>

			<nav>
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="forms.html">Forms</a>
					</li>
					<li>
						<a href="facebook.html">Facebook</a>
					</li>
					<li class="active">
						<a href="buckaroo.php">Buckaroo</a>
					</li>
				</ul>
			</nav>
		</header>

		<div class="mainContent">
			<div class="content">
				<article class="topcontent">
					<header>
						<h2><a href="#" title="First post">Buckaroo</a></h2>
					</header>

					<footer>
						<p class="post-info">
							Een test formulier
						</p>
					</footer>

					<content>

						<form id="signupForm" method="post" action="https://testcheckout.buckaroo.nl/html/">
							<fieldset>
								<p class="fields">
									<label class="title" for="ammount">Bedrag</label>
									<input id="ammount" name="ammount" type="text" value="10.00"/>
								</p>
								<p class="fields">
									<label class="title" for="currency">Valuta</label>
									<input id="currency" name="currency" type="text" value="EUR"/>
								</p>
								<p class="fields">
									<label class="title" for="invoice">Invoice</label>
									<input id="invoice" name="invoice" type="text" value="001"/>
								</p>
								<p class="fields">
									<label class="title" for="websitekey">Website key</label>
									<input id="websitekey" name="websitekey" type="text" value="K63U66RHdS"/>
								</p>
								<p class="fields">
									<label class="title" for="signature">Signature</label>
									<input id="signature" name="signature" type="text" value="DCE476532C2345F1BEF8E6A9DCC351AE"/>
								</p>
								<p class="fields">
									<input type="submit" value="Submit"/>
									<input type="reset" value="Reset" class="reset"/>
								</p>
							</fieldset>
						</form>

					</content>

				</article>
			</div>
		</div>

		<aside class="top-sidebar">
			<article>
				<h2>Log in</h2>
				<iframe width="100%" height="160" frameborder="0" allowtransparency="true" src="http://demonl.cmember.nl/cmember/widget?naam=inloggen&parameters=wcode&waarden=F374996OVQ"></iframe>
			</article>
		</aside>

		<aside class="middle-sidebar">
			<article>
				<h2>Berichten</h2>
				<iframe width="100%" height="200" frameborder="0" allowtransparency="true" src="http://demonl.cmember.nl/cmember/widget?naam=berichten&parameters=wcode,aantal_berichten&waarden=F374996OVQ,3"></iframe>
			</article>
		</aside>

		<aside class="bottom-sidebar">
			<article>
				<h2>Wachtwoord vergeten?</h2>
				<iframe width="100%" height="170" frameborder="0" allowtransparency="true" src="http://demonl.cmember.nl/cmember/widget?naam=wachtwoord_vergeten&parameters=wcode&waarden=F374996OVQ"></iframe>
			</article>
		</aside>

		<footer class="mainFooter">
			<p>
				Copyright &copy; Josja de Greef
			</p>
		</footer>

	</body>
</html>