<?php

/**
 * CRUD modal en PHP y MySQL
 * 
 * Este archivo realiza la conexión a MySQL
 * @author MRoblesDev
 * @version 1.0
 * https://github.com/mroblesdev
 * 
 */

$conn = new mysqli("mysql-luchock.alwaysdata.net", "luchock", "LucianO12", "luchock_crudpersonajes");

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
