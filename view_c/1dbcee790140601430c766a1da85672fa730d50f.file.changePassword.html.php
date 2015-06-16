<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 15:17:23
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\changePassword.html" */ ?>
<?php /*%%SmartyHeaderCode:492555c4313cfb175-02659491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dbcee790140601430c766a1da85672fa730d50f' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\changePassword.html',
      1 => 1432107758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '492555c4313cfb175-02659491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c4313d7cc58_43180635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c4313d7cc58_43180635')) {function content_555c4313d7cc58_43180635($_smarty_tpl) {?><div>
    <nav class="menu">
        <ul>
            <li>
                <a href="chat.php">Home &nbsp;>>&nbsp; </a>
            </li>
            <li>
                <a href="changePassword.php">Change password</a>
            </li>
        </ul>
    </nav>
</div>

<div id="content">
    <h2>Change Password</h2>

    <form action="changePassword.php" method="post">
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <div class="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
        <div>
            <label>Current Password<span class="required"></span></label>
            <input type="text" maxlength="20" name="current_password" id="current_password"/>
        </div>
        <div>
            <label>New Password</span></label>
            <input type="text" maxlength="20" name="new_password" id="new_password"/>
        </div>
        <div>
            <label>Confirm Password</label>
            <input type="text" maxlength="20" name="confirm_password" id="confirm_password"/>
        </div>

        <div>
            <label></label>
            <input type="submit" name="change_password" id="change_password" value="Change"/>
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
