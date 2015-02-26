<?php
	
	$status = $_POST['brq_statuscode'];
	$message = $_POST['brq_statusmessage'];
	$email_address = "buckaroo@cmember.nl";
	$email_subject = $_POST['brq_statuscode']." ".$_POST['brq_statusmessage'];
	$email_from = $_POST['ADD_email'];
	
	if($_POST && $email_from != "" && $_POST['brq_transaction_type'] != "") {
		
		foreach ($_POST as $param_name => $param_val) {
    		$email_message .= "$param_name=$param_val\n";
		};
		mail($email_address,$email_subject,$email_message,"From:".$email_from);
	}
	
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
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="js/jquery.crypt.js"></script>

	</head>
	<script type="text/javascript">
		
		function checkSignature(){
			var ammount = $('#Brq_amount').val();
			var culture = "nl-NL";
			var currency = "EUR";
			var invoice = $('#Brq_invoicenumber').val();
			var websiteKey = "K63U66RHdS"
			var secretKey = "DCE476532C2345F1BEF8E6A9DCC351AE";
			var email = $('#add_email').val();
			var vallues = "add_email="+email+"Brq_amount="+ammount+"Brq_culture="+culture+"Brq_currency="+currency+"Brq_invoicenumber="+invoice+"Brq_websitekey="+websiteKey+secretKey;

			var signature = $().crypt({method:"sha1",source:vallues});
			$('#Brq_signature').val(signature);
			$('#Brq_culture').val(culture);
			$('#Brq_currency').val(currency);
			
			return true;
		}
		
	</script>
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
						<h2><a href="#" title="First post"><?php echo $status; ?></a></h2>
					</header>

					<footer>
						<p class="post-info">
							<?php echo $message; ?>
						</p>
					</footer>

					<content>

						<form id="signupForm" method="post" action="https://testcheckout.buckaroo.nl/html/" onSubmit="return checkSignature();">
							<fieldset>
								<p class="fields">
									<label class="title" for="Brq_amount">Bedrag</label>
									<input id="Brq_amount" name="Brq_amount" type="text" value="10.00"/>
								</p>
								<p class="fields">
									<label class="title" for="Brq_invoicenumber">Invoice</label>
									<input id="Brq_invoicenumber" name="Brq_invoicenumber" type="text" value="001"/>
								</p>
								<p class="fields">
									<label class="title" for="add_email">Email</label>
									<input id="add_email" name="add_email" type="email" value="<?php echo $email_from; ?>" required/>
								</p>
								
									<input id="Brq_websitekey" name="Brq_websitekey" type="hidden" value="K63U66RHdS"/>
									<input id="Brq_culture" name="Brq_culture" type="hidden"/>
									<input id="Brq_currency" name="Brq_currency" type="hidden"/>
									<input id="Brq_signature" name="Brq_signature" type="hidden"/>
									
								<p class="fields">
									<input type="submit" value="Betaal"/>
									<input type="reset" value="Reset" class="reset"/>
								</p>
							</fieldset>
						</form>
						<p id="postdata">
						<?php
							foreach ($_POST as $param_name => $param_val) {
    							echo "$param_name=$param_val<br />\n";
							}
						?>
						</p>
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