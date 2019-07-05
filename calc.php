<html>
<head>
		<meta charset="utf-8">
<title>Calculo</title>
</head>

<body>



	<?php

	$valorum = $_POST['valor1'];
	$valordois= $_POST['valor2'];
    $calc= $_POST['calc'];


    if ($calc == "adicionar") {

    $result= ($valorum + $valordois) ;
	}

    if ($calc == "subtrair") {
    $result = ($valorum - $valordois) ;
	}

    if ($calc == "multiplicar") {
    $result = ($valorum * $valordois) ;
	}


    if ($calc == "dividir") {
    $result = ($valorum /$valordois) ;
	}


print "Resultado do cálculo: $result ";

?>

</body>
</html>