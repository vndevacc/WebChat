<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-29 17:31:06
         compiled from "C:\Apache24\htdocs\WebChat\view\changePassword.html" */ ?>
<?php /*%%SmartyHeaderCode:27817555c590732e8e6-16849883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd4cb2b3138a6d1922d7d2e1b680a6c8f0ca0dfc' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat\\view\\changePassword.html',
      1 => 1432895433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27817555c590732e8e6-16849883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c5907353fa4_00562534',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c5907353fa4_00562534')) {function content_555c5907353fa4_00562534($_smarty_tpl) {?><div>
    <nav class="menu">
        <ul>
            <li>
                <a href="chat.php">Chat &nbsp;>>&nbsp; </a>
            </li>
            <li>
                Change password
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
            <input type="password" maxlength="20" name="current_password" id="current_password"/>
        </div>
        <div>
            <label>New Password</span></label>
            <input type="password" maxlength="20" name="new_password" id="new_password"/>
        </div>
        <div>
            <label>Confirm Password</label>
            <input type="password" maxlength="20" name="confirm_password" id="confirm_password"/>
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
