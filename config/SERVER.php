<?php

    const SERVER="localhost";
    const DB = "we_pay";
    const USER = "root";
    const PASSWORD = "y2k11sdf1xd.*";

    //conexion con PDO
    const SGBD = "mysql:host=".SERVER.";dbname=".DB;
    
    //Constante para encryptacion

    const METHOD = "AES-256-CBC";
    //llave secreta
    const SECRET_KEY='$wepay@2020';

    //Identificador unico
    const SECRET_IV='6787222';
    
