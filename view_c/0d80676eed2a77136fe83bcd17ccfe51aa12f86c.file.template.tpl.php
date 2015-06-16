<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 16:23:54
         compiled from "..\view\template\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24084555c57bd717bf0-63154908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d80676eed2a77136fe83bcd17ccfe51aa12f86c' => 
    array (
      0 => '..\\view\\template\\template.tpl',
      1 => 1432805001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24084555c57bd717bf0-63154908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c57bd741fb6_40496615',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c57bd741fb6_40496615')) {function content_555c57bd741fb6_40496615($_smarty_tpl) {?>
<html>
<head>
    <title>Webchat</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" />
    <?php echo '<script'; ?>
 src="../public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../public/css/jquery-ui.css">
    
    <?php echo '<script'; ?>
 src="../public/js/jquery-ui.js"><?php echo '</script'; ?>
>


</head>
<body>
<div id="wrap">
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../../view/".((string)$_smarty_tpl->tpl_vars['content']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
