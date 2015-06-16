<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-18 08:17:33
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\template\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22907555403a6a98108-64161850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dadc8f2f79a291964c73f7ca420b4334ac947f9' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\template\\template.tpl',
      1 => 1431911850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22907555403a6a98108-64161850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555403a6b8e9e1_79606044',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555403a6b8e9e1_79606044')) {function content_555403a6b8e9e1_79606044($_smarty_tpl) {?>
<html>
<head>
    <title>Webchat</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" />
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
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
