<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 10:36:56
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\getGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:13413555d769d9a7775-89598338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd544f3ef9591353b440aa9bef671f645db7e637' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\getGroup.html',
      1 => 1432265733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13413555d769d9a7775-89598338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d769d9d6554_25219574',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d769d9d6554_25219574')) {function content_555d769d9d6554_25219574($_smarty_tpl) {?><!--<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>-->
<!--<li id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" data-chat="">-->
    <!--<a href="javascript:void(0);">-->
        <!--<div class="img_div"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>-->
        <!--<div class="name_div"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->display_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>-->
        <!--<div style="clear: both;"></div>-->
    <!--</a>-->
    <!--<?php echo '<script'; ?>
 type="text/javascript">-->
        <!--webChat.chat.pushGroupId(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
);-->
    <!--<?php echo '</script'; ?>
>-->
<!--</li>-->
<!--<?php } ?>-->
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
<li id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" data-chat="">
<a href="javascript:void(0);">
<div class="img_div"><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>
<div class="name_div"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->group_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
<div style="clear: both;"></div>
</a>
<?php echo '<script'; ?>
 type="text/javascript">
webChat.chat.pushGroupId(<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
);
<?php echo '</script'; ?>
>
</li>
<?php } ?><?php }} ?>
