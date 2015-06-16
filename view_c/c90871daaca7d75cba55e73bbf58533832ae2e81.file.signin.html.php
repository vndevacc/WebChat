<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 17:14:06
         compiled from "C:\Apache24\htdocs\WebChat\view\signin.html" */ ?>
<?php /*%%SmartyHeaderCode:13490555c57bd7873d0-37387294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90871daaca7d75cba55e73bbf58533832ae2e81' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat\\view\\signin.html',
      1 => 1433152888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13490555c57bd7873d0-37387294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c57bd78bbf0_78354085',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c57bd78bbf0_78354085')) {function content_555c57bd78bbf0_78354085($_smarty_tpl) {?><div id="content">
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
       <div>
           <label></label>
           <input type="submit"  name="log_in"  id="log_in" value="Log In"/>
       </div>
   </form>
    <div class="clear"></div>
</div>
<?php }} ?>
