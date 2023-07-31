<?php  
session_start();
// header
include ('includes/header.php');  
// navigation
$members = (isset($_GET['members'])) 
	? (bool)$_GET['members'] 
	: false;
if ($members === true)
	require 'includes/nav_members.php';  
else
	require 'includes/nav_public.php';
// main content pages will be included here the value of $page is coming from the URL in nav_members.php and nav_public.php
if (isset($_GET['page'])) {   
	$includepage=$_GET['page'];
	include_once ($includepage);
} else {
	require_once ('content/home_public.php'); 
}
// footer
include_once ('includes/footer.php'); 


/*
File name: index.php
Author: Ellen Bajcar
Date created: Summer 2018
Date modified: Summer 2023
Version: 23.0
Copyright: 
	This work is the intellectual property of Sheridan College. 
	Any further copying and distribution outside of class must be within 
	the copyright law. Posting to commercial sites for profit is prohibited.
Purpose: 
    class activity for web programming
    create a website that provides pages/activities for members only
    implements sign-in, registration, and database access using PDO
Description:
	Home page content fragment for both public and members
    included/required by: -
    includes/requires: nav_members.php nav_public.php
*/
?>
