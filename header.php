<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Portal biblioteca</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
    
</head>


<?php
    $file = $_SERVER['SCRIPT_NAME'];
    $file = basename($file,".php");

    $array["index"] = 0;
    $array["lista"] = 0;
    $array["imprumuturi"] = 0;
    $array["contact"] = 0;
    $array["login"] = 0;

    $array[$file] = 1;

    ?>


<body>
    
    <div class="transparancy" hidden>
    </div>
    <img class="svg_button" src="images/close_button.svg" alt="close_button" hidden>
    
	<div class="main">
		<div class="title">
			<img src="images/logo_ac.png">
    <h1>Portal Biblioteca Facultatii Automatica si Calculatoare Iasi</h1>
    <img src="images/logo_tuiasi.png">
    </div>
    <div class="navbar">
      <ul>
        <li><a <?php
                    if($array["index"] == 1)
                        echo('class="active"') ;
                    ?> href = "index.php">Home</a></li>
        <li><a <?php
                    if($array["lista"] == 1)
                        echo('class="active"') ;
                    ?>href="lista.php">Lista carti</a></li>
        <li><a <?php
                    if($array["imprumuturi"] == 1)
                        echo('class="active"') ;
                    ?> href="imprumuturi.php">Imprumuturi</a></li>
        <li><a <?php
                    if($array["contact"] == 1)
                        echo('class="active"') ;
                    ?> href="contact.php">Contact</a></li>
        <li><a <?php
                    if($array["login"] == 1)
                        echo('class="active"') ;
                    ?> href="login.php">Login</a></li>
      </ul>
    </div>
   