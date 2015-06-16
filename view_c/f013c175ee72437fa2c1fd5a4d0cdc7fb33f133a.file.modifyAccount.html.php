<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 15:18:45
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\modifyAccount.html" */ ?>
<?php /*%%SmartyHeaderCode:27061555c43651d5e17-16891038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f013c175ee72437fa2c1fd5a4d0cdc7fb33f133a' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\modifyAccount.html',
      1 => 1432107309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27061555c43651d5e17-16891038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'username' => 0,
    'display_name' => 0,
    'email' => 0,
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c43652127f3_62959462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c43652127f3_62959462')) {function content_555c43652127f3_62959462($_smarty_tpl) {?><div>
    <nav class="menu">
        <ul>
            <li>
                <a href="chat.php">Home &nbsp;>>&nbsp; </a>
            </li>
            <li>
                <a href="modifyAccount.php">Modify Account</a>
            </li>
        </ul>
    </nav>
</div>

<div id="content">
    <h2>Modify Account</h2>

    <form action="modifyAccount.php" method="post" enctype="multipart/form-data">
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
        <div>
            <label>Username<span class="required"></span></label>
            <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

        </div>
        <div>
            <label>Display Name<span class="required">*</span></label>
            <input type="text" maxlength="50" name="display_name" id="display_name" value="<?php echo $_smarty_tpl->tpl_vars['display_name']->value;?>
"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" maxlength="50" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
        </div>
        <div>
            <label>Avatar </label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" id="avatar" style="width: 64px;height: 64px;"/>
            <input type="file" name="avatar" id="avatar"/>
        </div>

        <div>
            <label></label>
            <input type="submit" name="modify_account" id="modify_account" value="Change"/>
            <input type="button"  value="Cancel" onclick="window.location='chat.php'"/>
        </div>
    </form>
    <div class="clear"></div>
    <div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="chat.php">Back to chat &nbsp;&nbsp; </a>
                </li>
                <li>

            </ul>
        </nav>
    </div>
    <div style="clear: both;"></div>
</div>


<?php }} ?>
