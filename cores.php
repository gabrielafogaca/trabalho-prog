<html>
<head>
		<meta charset="utf-8">
<title>Cor</title>
</head>

<body>

    <h2>Seletor de cores interativo</h2>

    <?php

    $r = $_POST ['red'];
    $g = $_POST ['green'];
    $b = $_POST ['blue'];


    $rgb = $r .  ',' . $g .  ',' . $b ;

    ?>
    R: <? php echo $r; ?>
    G: <? php echo $g; ?>
    B: <? php echo $b; ?>
    <br/><br/>

    <div style = "width: 150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>)" /></div>

    	</body>
    	</html>