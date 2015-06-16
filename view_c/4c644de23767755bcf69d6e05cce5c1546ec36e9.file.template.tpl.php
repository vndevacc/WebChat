<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-21 11:24:36
         compiled from "..\view\template\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10455555d3435606230-60488435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c644de23767755bcf69d6e05cce5c1546ec36e9' => 
    array (
      0 => '..\\view\\template\\template.tpl',
      1 => 1432182229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10455555d3435606230-60488435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d3435658eb3_75820200',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d3435658eb3_75820200')) {function content_555d3435658eb3_75820200($_smarty_tpl) {?>
<html>
<head>
    <title>Webchat</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" />
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
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
