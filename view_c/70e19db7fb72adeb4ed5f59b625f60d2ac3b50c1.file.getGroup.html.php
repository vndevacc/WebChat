<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 09:26:02
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\getGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:17926555ea649cd2fc9-05563179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e19db7fb72adeb4ed5f59b625f60d2ac3b50c1' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\getGroup.html',
      1 => 1432779959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17926555ea649cd2fc9-05563179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ea649d0d345_83965786',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ea649d0d345_83965786')) {function content_555ea649d0d345_83965786($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\Apache24\\htdocs\\WebChat-Dev\\smarty\\plugins\\modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
<li id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" data-chat="">
    <a href="javascript:void(0);">
        <div class="img_div"><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>
        <div class="name_div"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->group_name, ENT_QUOTES, 'ISO-8859-1', true),20);?>
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
