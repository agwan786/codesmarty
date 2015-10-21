<?php /* Smarty version 3.1.27, created on 2015-10-21 07:34:52
         compiled from "H:\wamp\www\codesmarty\application\views\include\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27504562723fc1b4079_45778418%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3936f64e8296064045fa10c93e3952a4282be97b' => 
    array (
      0 => 'H:\\wamp\\www\\codesmarty\\application\\views\\include\\header.tpl',
      1 => 1445405684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27504562723fc1b4079_45778418',
  'variables' => 
  array (
    'CSS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562723fc243cc2_78460304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562723fc243cc2_78460304')) {
function content_562723fc243cc2_78460304 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27504562723fc1b4079_45778418';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>
demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>
style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>
animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Login and Registration Form <span>with HTML5 and CSS3</span></h1>
				<nav class="codrops-demos">
					<span>Click <strong>"Join us"</strong> to see the form switch</span>
					<a href="index.html" class="current-demo">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
				</nav>
            </header><?php }
}
?>