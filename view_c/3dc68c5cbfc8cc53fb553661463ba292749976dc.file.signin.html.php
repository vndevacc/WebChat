<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 13:22:56
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\signin.html" */ ?>
<?php /*%%SmartyHeaderCode:3236655544138f21706-49633117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc68c5cbfc8cc53fb553661463ba292749976dc' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\signin.html',
      1 => 1432102934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236655544138f21706-49633117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5554413902cb56_25050789',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554413902cb56_25050789')) {function content_5554413902cb56_25050789($_smarty_tpl) {?><div id="content">
    <h2>Sign In</h2>
   <form action="signin.php"  method="post">
       <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
       <div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
       <div>
           <label>Username</label>
           <input type="text" maxlength="100" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/>
       </div>
       <div>
           <label>Password</label>
           <input type="password" maxlength="20" name="password" id="password"/>
       </div>
       <!--<div>-->
           <!--<label></label>-->
           <!--<input type="checkbox"  name="is_remember"  id="is_remember"/>-->
           <!--<span>Remember me </span>-->
       <!--</div>-->
       <div>
           <label></label>
           <input type="submit"  name="log_in"  id="log_in" value="Log In"/>
       </div>
   </form>
    <div class="clear"></div>
</div>
<?php }} ?>
