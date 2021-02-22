<?php

if(!session_id()) session_start();

// memanggil file di folder app/init.php
require_once '../app/init.php';

// jalankan(instansiasi) class app di file app
$app = new App;