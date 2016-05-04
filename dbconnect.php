<?php
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 04/05/2016
 * Time: 11:05
 */
define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bc738a674fb21c');
define('DB_PASSWORD','9273e852');
define('DB_DATABASE','CMM007ALDB-1510673');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);