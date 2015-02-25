<?php

	$Brq_signature = sha1("Brq_amount=10.00Brq_culture=nl-NLBrq_currency=EURBrq_invoicenumber=001Brq_websitekey=K63U66RHdSDCE476532C2345F1BEF8E6A9DCC351AE");
	
	$url = 'https://testcheckout.buckaroo.nl/html/';
	$myvars = "Brq_amount=10.00&Brq_currency=EUR&Brq_invoicenumber=001&Brq_websitekey=K63U66RHdS&Brq_signature=" + $Brq_signature;

	/*$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec( $ch );*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Buckaroo</title>
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
									<label class="title" for="Brq_amount">Bedrag</label>
									<input id="Brq_amount" name="Brq_amount" type="text" value="10.00"/>
								</p>
								<p class="fields">
									<label class="title" for="Brq_culture">Regio</label>
									<input id="Brq_culture" name="Brq_culture" type="text" value="nl-NL"/>
								</p>
								<p class="fields">
									<label class="title" for="Brq_currency">Valuta</label>
									<input id="Brq_currency" name="Brq_currency" type="text" value="EUR"/>
								</p>
								<p class="fields">
									<label class="title" for="Brq_invoicenumber">Invoice</label>
									<input id="Brq_invoicenumber" name="Brq_invoicenumber" type="text" value="001"/>
								</p>
								<p class="fields">
									<label class="title" for="Brq_websitekey">Website key</label>
									<input id="Brq_websitekey" name="Brq_websitekey" type="text" value="K63U66RHdS"/>
								</p>
								<p class="fields">
									<label class="title" for="Brq_signature">Signature</label>
									<input id="Brq_signature" name="Brq_signature" type="text" value="<?php echo $Brq_signature;?>"/>
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