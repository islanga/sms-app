<?php
$config = require($files['settings']);
$link   = new PDO(
	"mssql:host=" . $config['database']['host'] . ";dbname=" . $config['database']['db'],
	$config['database']['username'],
	$config['database']['password']
);