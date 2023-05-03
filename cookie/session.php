<?php
session_start();
$_SESSION['name']='test';
echo $_SESSION['name'];
unset($_SESSION['name']);
$_SESSION['name']='test';

echo $_SESSION['name'];
