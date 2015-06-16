<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-21 08:26:13
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\signin.html" */ ?>
<?php /*%%SmartyHeaderCode:11437555d34356ea5c4-31758998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381d20a1072ec965c82217e5dff7789dfd5ad667' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\signin.html',
      1 => 1432102934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11437555d34356ea5c4-31758998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d34356f3110_75806608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d34356f3110_75806608')) {function content_555d34356f3110_75806608($_smarty_tpl) {?><div id="content">
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
