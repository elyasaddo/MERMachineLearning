<?php
  require 'flight/Flight.php';
  require ('assets/php/util.php');

  //Create global variable for the base URL for hrefs
  $GLOBALS['base'] = Flight::request()->base;
  $GLOBALS['base'] = rtrim($GLOBALS['base'],'/');

  //Load templates for header & footer
  Flight::render('header', array(), 'header_content');
  Flight::render('footer', array(), 'footer_content');

  function home() {
    Flight::render('home', array(), 'body_content'); //body
    Flight::render('layout', array('title' => 'Home')); //layout
  }

  function article($topic) {
    //TODO: add class bg
    //TODO: pass in topic name
    Flight::render('article', array('topic' => $topic, 'class' => $topic), 'body_content'); //body
    Flight::render('layout', array('title' => Util::urlToName($topic))); //layout
  }

  Flight::map('notFound', function(){
    // Handle not found
    Flight::render('header', array(), 'header_content');
    Flight::render('footer', array(), 'footer_content');
    Flight::render('errors/404', array('title' => '404'));
  });

  //Homepage routes
  Flight::route('/', 'home');
  Flight::route('/home', 'redirect_home');
  Flight::route('/index', 'redirect_home');

  //Articles Links
  Flight::route('/articles/@topic', 'article');

  Flight::start();?>
