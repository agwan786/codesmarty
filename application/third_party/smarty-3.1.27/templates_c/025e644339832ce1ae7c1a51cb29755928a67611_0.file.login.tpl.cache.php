<?php /* Smarty version 3.1.27, created on 2015-10-21 06:59:53
         compiled from "H:\wamp\www\codesmarty\application\views\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:311056271bc9cb0642_78887969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025e644339832ce1ae7c1a51cb29755928a67611' => 
    array (
      0 => 'H:\\wamp\\www\\codesmarty\\application\\views\\login.tpl',
      1 => 1445403590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311056271bc9cb0642_78887969',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56271bc9d53ec0_77122157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56271bc9d53ec0_77122157')) {
function content_56271bc9d53ec0_77122157 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '311056271bc9cb0642_78887969';
echo $_smarty_tpl->getSubTemplate ('include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<section>				
    <div id="container_demo" >
        <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <form  action="mysuperscript.php" autocomplete="on"> 
                    <h1>Log in</h1> 
                    <p> 
                        <label for="username" class="uname" data-icon="u" > Your email or username </label>
                        <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                    </p>
                    <p> 
                        <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                        <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                    </p>
                    <p class="keeplogin"> 
						<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
						<label for="loginkeeping">Keep me logged in</label>
					</p>
                    <p class="login button"> 
                        <input type="submit" value="Login" /> 
					</p>
                    <p class="change_link">
						Not a member yet ?
						<a href="#toregister" class="to_register">Join us</a>
					</p>
                </form>
            </div>

            <div id="register" class="animate form">
                <form  action="mysuperscript.php" autocomplete="on"> 
                    <h1> Sign up </h1> 
                    <p> 
                        <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                        <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                    </p>
                    <p> 
                        <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                        <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                    </p>
                    <p> 
                        <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                        <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                    </p>
                    <p> 
                        <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                        <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                    </p>
                    <p class="signin button"> 
						<input type="submit" value="Sign up"/> 
					</p>
                    <p class="change_link">  
						Already a member ?
						<a href="#tologin" class="to_register"> Go and log in </a>
					</p>
                </form>
            </div>
			
        </div>
    </div>  
</section>
<?php echo $_smarty_tpl->getSubTemplate ('include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>