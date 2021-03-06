<?php
/* Smarty version 4.1.0, created on 2022-04-08 23:19:33
  from 'C:\xampp\htdocs\language_learning_web\view\templates\lesson2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6250a6e5a7b0d4_80102265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1594712ebdaa655db24bb798682547f3e62047ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\language_learning_web\\view\\templates\\lesson2.tpl',
      1 => 1649452538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6250a6e5a7b0d4_80102265 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/lesson2.css">
    <link rel="stylesheet" href="css/popup.css">
</head>
<body>
    <div class="header"> 
        <h2 class="title">Memory numbers</h2>
        <div class="options">
            <div class="info">Attempts: <span class="stat" id="attempts">0</span></div>
            <div class="info">Failed Attempts: <span class="stat" id="failed-attempts">0</span></div>
            <input class="button" id="restart" type="button" value="Restart">
            <a  class="button" href="index.php?action=show_lessons">Return</a>
        </div>
    </div>   
    <div class="cards">
        <div class="card" id="card1.1">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/one.png" alt="">
        </div>
        <div class="card" id="card2.2">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/two.png" alt="">
        </div>
        <div class="card" id="card3.3">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/three.png" alt="">
        </div>
        <div class="card" id="card6.4">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/four.png" alt="">
        </div>
        <div class="card" id="card7.1">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/1.jpg" alt="">
        </div>
        <div class="card" id="card8.2" >
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/2.jpg" alt="">
        </div>
        <div class="card" id="card9.3">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/3.png" alt="">
        </div>
    
        <div class="card" id="card10.4">
            <img class="back-face" src="img/lesson2/number.jpg" alt="">
            <img class="front-face" src="img/lesson2/4.png" alt="">
        </div>       
    </div>
    <div class="popup" id="popup">
        <div class="popup-header">
            <div class="title">Congratulations</div>
            <button id="close-button" class="close-button">&times;</button>
        </div>
        <div class="popup-body">
            You have won the game!
        </div>
    </div>
    <div id="overlay"></div>
    <?php echo '<script'; ?>
 src="js/lesson2.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
