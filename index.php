<?php
//DELETE WHEN GOING LIVE - This is for testing
error_reporting( E_ALL);
ini_set("display_errors",1);
require_once "controller/base.php";
require_once "controller/init.php";
$page = new Page;
$page->header();
$page->body('home');
$pageRequested= isset($_GET['page']);
if ($pageRequested){
  if ($_GET ['page']==="search"){
    include_once APPROOT.'/view/results.php';
  }
}
$page->footer();
