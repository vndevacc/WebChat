<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 16:47:54
         compiled from "C:\Apache24\htdocs\WebChat\view\getGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:2613455668a9b6d3184-08743894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44fe39162d324f5ca3e4622ef860a63da1a33d7a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat\\view\\getGroup.html',
      1 => 1433152006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613455668a9b6d3184-08743894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55668a9b6e5286_10319990',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55668a9b6e5286_10319990')) {function content_55668a9b6e5286_10319990($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\Apache24\\htdocs\\WebChat\\smarty\\plugins\\modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
<li id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" data-chat="" title="<?php echo $_smarty_tpl->tpl_vars['group']->value->members_name;?>
">
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
