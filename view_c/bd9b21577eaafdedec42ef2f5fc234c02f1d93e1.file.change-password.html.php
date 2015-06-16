<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 14:46:03
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\changePassword.html" */ ?>
<?php /*%%SmartyHeaderCode:22472555c37413a5871-97649908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9b21577eaafdedec42ef2f5fc234c02f1d93e1' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\changePassword.html',
      1 => 1432107758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22472555c37413a5871-97649908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555c37413e8c34_55698682',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c37413e8c34_55698682')) {function content_555c37413e8c34_55698682($_smarty_tpl) {?><div>
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
