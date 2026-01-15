<?php
session_start();

// Détruire la session
session_destroy();

// Redirection vers login
header("Location: login.php");
exit;
