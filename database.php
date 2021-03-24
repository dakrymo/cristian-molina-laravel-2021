<?php

	$mysqli = new mysqli("127.0.0.1","root","","cliente");

	if ($mysqli ->connect_errno )
	{ echo "Fallo al conectar con el servidor :(".$mysqli->connect_errno.")".$mysqli->connect_errno;
	}

  ?>