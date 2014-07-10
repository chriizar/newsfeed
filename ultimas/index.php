<!DOCTYPE html>
<html>
<head>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<div id="urlOrigen"></div>

<script  type="text/javascript">
	$.get('verificador.php', function(data) {
  		$( "#urlOrigen" ).html( data );
	});
</script>
</body>


</html>


