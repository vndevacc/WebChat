<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 08:16:31
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\modifyAccount.html" */ ?>
<?php /*%%SmartyHeaderCode:3110555d4f4c755af0-37250471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1249fe3f86adbf6b3da27daec36bdfef62965e2' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\modifyAccount.html',
      1 => 1432775632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3110555d4f4c755af0-37250471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d4f4c781e34_30150532',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d4f4c781e34_30150532')) {function content_555d4f4c781e34_30150532($_smarty_tpl) {?><div>
    <nav class="menu">
        <ul>
            <li>
                <a href="chat.php">Chat &nbsp;>>&nbsp; </a>
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
