<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 13:32:08
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:1310955543baa31bff4-85444259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b7848b5ebe9e4599d510f85b5ff77f9c358978' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\signup.html',
      1 => 1432103524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310955543baa31bff4-85444259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55543baa350812_56803476',
  'variables' => 
  array (
    'error' => 0,
    'username' => 0,
    'display_name' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543baa350812_56803476')) {function content_55543baa350812_56803476($_smarty_tpl) {?><div id="content">
    <h2>Sign Up</h2>
    <form action="signup.php"  method="post" enctype="multipart/form-data">
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <div>
            <label>Username<span class="required">*</span></label>
            <input type="text" maxlength="100" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" maxlength="100" name="password" id="password"/>
        </div>
        <div>
            <label>Confirm Password</label>
            <input type="password" maxlength="20" name="confirm_password" id="confirm_password"/>
        </div>
        <div>
            <label>Display Name<span class="required">*</span></label>
            <input type="text" maxlength="100" name="display_name" id="display_name" value="<?php echo $_smarty_tpl->tpl_vars['display_name']->value;?>
"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" maxlength="100" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
        </div>
        <div>
            <label>Avatar</label>
            <input type="file"  name="avatar" id="avatar"/>
        </div>

        <div>
            <label></label>
            <input type="submit"  name="sign_up"  id="sign_up" value="Sign Up"/>
        </div>
    </form>
    <div class="clear"></div>
</div>
<?php }} ?>
