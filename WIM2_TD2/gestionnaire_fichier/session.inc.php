<?php

include 'PDOSessionHandler.php';

$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();