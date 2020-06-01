
<?php 

if(isset($_POST['expediteur']) AND isset($_POST['objet']) AND isset($_POST['message']))
	{

		$expediteur=$_POST['expediteur'];
		$objet=$_POST['objet'];
		$message= nl2br($_POST['message']);
		$destinataire="celia.houlette@yahoo.fr";

		$header="MIME-Version: 1.0\r\n";
		$header.='From:'.$expediteur.'<'.$expediteur.'>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';


		mail($destinataire, $objet, $message, $header);
		
		?>
		
		<script type="text/javascript">
			alert ("Message envoyé");
		</script>

		<?php
	}

 ?>

