<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-27 14:26:31
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\searchUser.html" */ ?>
<?php /*%%SmartyHeaderCode:9296555d4be11f3160-82392904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d9cffff6c61a0eb233ff753bb2cc1a214bb047' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\searchUser.html',
      1 => 1432711554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9296555d4be11f3160-82392904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d4be1227569_38802726',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d4be1227569_38802726')) {function content_555d4be1227569_38802726($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type="text/javascript">

    webChat.inviteUser = (function () {
        var __checkedUserId = {};
        var _check = function (element, id) {
            var $this = $(element);
            if ($this.is(':checked')) {
                __checkedUserId[id] = 1;
            } else {
                __checkedUserId[id] = 0;
            }
        }

        var _invite = function () {
            for (var key in __checkedUserId) {
                if (__checkedUserId.hasOwnProperty(key) && __checkedUserId[key]) {
                    _createGroup(key);
                }
            }
            __checkedUserId = {};
        }

        var _getCheckedUserId = function () {
            return __checkedUserId;
        }

        var _clearData = function () {
            __checkedUserId = {};
        }

        var _createGroup = function (userId) {
            $.ajax({
                method: "POST",
                url: "createGroup.php?v=" + new Date().getTime(),
                async: false,
                data: {"user_id": userId},
                success: function (data) {
                    if (!webChat.common.checkSession(data)) {
                        return;
                    }
//                    if (typeof data != "undefined") {
//                        if (data > 0 && !webChat.chat.existGroupId(parseInt(data)))
//                            webChat.chat.getGroup(data);
//                    }
                }
            });
        }


        return {
            check: _check,
            getCheckedUserId: _getCheckedUserId,
            invite: _invite,
            clearData: _clearData,
            createGroup: _createGroup
        };


    })();
<?php echo '</script'; ?>
>


<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" data-chat="" style="margin: 5px;">
    <a href="javascript:void(0);">
        <div style="float: left"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>
        <div style="float: left; margin-left: 20px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->display_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
        <input type="checkbox" onchange="webChat.inviteUser.check(this,<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
)">

        <div style="clear: both;"></div>
    </a>
</div>
<?php } ?>

<?php }} ?>
