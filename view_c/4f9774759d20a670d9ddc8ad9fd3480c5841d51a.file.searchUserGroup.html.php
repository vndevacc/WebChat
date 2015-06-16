<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-27 13:31:45
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\searchUserGroup.html" */ ?>
<?php /*%%SmartyHeaderCode:2052055641e29470df6-52883251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9774759d20a670d9ddc8ad9fd3480c5841d51a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\searchUserGroup.html',
      1 => 1432708284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2052055641e29470df6-52883251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55641e2947e6b3_40714970',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55641e2947e6b3_40714970')) {function content_55641e2947e6b3_40714970($_smarty_tpl) {?><select id="select_user_result" style="width:300px;height: 70%;" multiple="" size="5" name="">
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->display_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</option>
    <?php echo '<script'; ?>
 type="text/javascript">
        webChat.inviteGroup.pushResult(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
);
    <?php echo '</script'; ?>
>
    <?php } ?>
</select><?php }} ?>
