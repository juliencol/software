<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/tests/common_test.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container text-center">
	<h1 class="test_header">Temps de réaction à une lumière </h1>
	<p class="text_explicatif">
		Ce test dure approximativement 2 minutes. <br> <br>
		Lorsque vous voyez une des trois LEDs devant vous s'alllumer, appuyez sur le bouton qui lui correspond.  <br> <br>
		Il s'agit d'un test de rapidité. Plus vous êtes rapide à appuyer sur le bon bouton, plus votre score sera élevé. <br> <br>
		Cependant, prenez garde à ne pas appuyer avant qu'une des trois LEDs ne s'allume et à ne pas vous tromper de bouton. Dans ce cas, votre score sera impacté ou vous devrez recommencer le test. 
		
	</p>	
	<form method="post" action="<?php echo URLROOT; ?>tests/light_test_doing">
		<label>Veuillez rentrer le code du test : </label>
		<input type="text" name="code" placeholder="Ex : 6248" maxlength="4" required></p> 
		<input type="submit" value="Commencer le test" class="btn-primary">
	</form></div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
