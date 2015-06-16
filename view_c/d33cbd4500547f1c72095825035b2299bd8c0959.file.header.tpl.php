<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-21 08:26:13
         compiled from "..\view\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5572555d34356b89a2-05019580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33cbd4500547f1c72095825035b2299bd8c0959' => 
    array (
      0 => '..\\view\\template\\header.tpl',
      1 => 1432106497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5572555d34356b89a2-05019580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_log_in' => 0,
    'avatar' => 0,
    'display_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d34356cbd32_34643462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d34356cbd32_34643462')) {function content_555d34356cbd32_34643462($_smarty_tpl) {?><!-- <div id="header">
     <h1>Simple #3</h1>
     <h2>Website Slogan or Tagline</h2>
 </div>-->
<div></div>

<div id="menu">
    <div class="left" style="font-size: 20px;"><a style="text-decoration: none;" href="../controller/chat.php">WebChat - Cybozu</a></div>

    <ul class="right">
        <?php if ($_smarty_tpl->tpl_vars['is_log_in']->value==1) {?>
        <div style="float: left"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" style="width: 32px;height: 32px;margin-top: 10px;"/></div>
        <div class="menu-wrap" style="float: left">
            <nav class="menu">
                <ul >
                    <li>
                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['display_name']->value;?>
 <span class="arrow">&#9660;</span></a>
                        <ul class="sub-menu">
                            <li><a href="../controller/modifyAccount.php">Edit</a></li>
                            <li><a href="../controller/changePassword.php">Change password</a></li>
                            <li><a href="../controller/logout.php">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <?php } else { ?>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a>
            <?php }?>

    </ul>


</div>

<?php }} ?>
