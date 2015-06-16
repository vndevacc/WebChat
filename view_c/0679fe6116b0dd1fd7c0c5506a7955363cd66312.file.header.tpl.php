<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 14:23:04
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17304555403a6bbf8d6-02929100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0679fe6116b0dd1fd7c0c5506a7955363cd66312' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\template\\header.tpl',
      1 => 1432106497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17304555403a6bbf8d6-02929100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555403a6bc0e15_34850228',
  'variables' => 
  array (
    'is_log_in' => 0,
    'avatar' => 0,
    'display_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555403a6bc0e15_34850228')) {function content_555403a6bc0e15_34850228($_smarty_tpl) {?><!-- <div id="header">
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
