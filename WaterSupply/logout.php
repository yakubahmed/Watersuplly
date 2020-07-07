<?php
session_start();
unset($_SESSION['user_id']); 
unset($_SESSION['email']) ; 
unset($_SESSION['profile']); 
unset($_SESSION['fname']) ; 
session_destroy();
header('location: login');