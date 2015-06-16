<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 16:15:49
         compiled from "C:\Apache24\htdocs\WebChat\view\getUserInGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:8056556c148cbd9747-78630344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb505dde863e5224decc20bca4e9f58ae7000419' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat\\view\\getUserInGroup.html',
      1 => 1433150090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8056556c148cbd9747-78630344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556c148cc884b8_51587485',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c148cc884b8_51587485')) {function content_556c148cc884b8_51587485($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" data-chat="" style="margin: 5px;">
    <a href="javascript:void(0);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->display_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</a>,
</div>
<?php } ?><?php }} ?>
