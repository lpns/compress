<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>R-dicom Zip </title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon" href="favicon.png" />

</head>
<?php require('compress.php'); ?>
	<div class='container'>
		 <form method='post'>
		 	<div class="col-4">
		  		<input type='submit' id="singleupload" onclick="createZip()" name='create' value='Criar Zip' class="btn create">
		 	</div>

		 	<div class="col-4">
		  		<input type='submit' name='download' value='Download' class="btn down" />
		 	</div>

		 	<div class="col-4">
		  		<input type='submit' name='del' value='Deletar' class="btn del" />
		 	</div>
		 </form>
	</div>
</body>
	<script type="text/javascript">
		function createZip() {
			alert('A tarefa pode demorar, por favor não recarregue está página. Você será avisado quando o zip estiver concluído');
		}
	</script>
</html>