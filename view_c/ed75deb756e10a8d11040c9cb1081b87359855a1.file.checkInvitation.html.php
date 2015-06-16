<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-27 14:30:04
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\checkInvitation.html" */ ?>
<?php /*%%SmartyHeaderCode:28824555ecfb564aa84-29151887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed75deb756e10a8d11040c9cb1081b87359855a1' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\checkInvitation.html',
      1 => 1432711547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28824555ecfb564aa84-29151887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ecfb56882e7_82765638',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ecfb56882e7_82765638')) {function content_555ecfb56882e7_82765638($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type="text/javascript">
    webChat.confirmInvitation = (function () {
        var __checkedGroupIds = {};
        var _check = function (element, id) {
            var $this = $(element);
            if ($this.is(':checked')) {
                __checkedGroupIds[id] = 1;
            } else {
                __checkedGroupIds[id] = 0;
            }
        }

        var _accept = function () {
            for (var key in __checkedGroupIds) {
                if (__checkedGroupIds.hasOwnProperty(key) && __checkedGroupIds[key] && !webChat.chat.existGroupId(parseInt(key))) {
                    _joinGroup(key);
                }
            }
            __checkedGroupIds = {};
        }

        var _decline = function () {
            for (var key in __checkedGroupIds) {
                if (__checkedGroupIds.hasOwnProperty(key) && __checkedGroupIds[key] && !webChat.chat.existGroupId(parseInt(key))) {
                    _declineGroup(key);
                }
            }
            __checkedGroupIds = {};
        }

        var _getCheckedGroupIds = function () {
            return __checkedGroupIds;
        }

        var _clearData = function () {
            __checkedGroupIds = {};
        }

        var _joinGroup = function (groupId) {
            $.ajax({
                method: "POST",
                url: "joinGroup.php?v=" + new Date().getTime(),
                async: false,
                data: {"group_id": groupId, status: 1},
                success: function (data) {
                    if (!webChat.common.checkSession(data)) {
                        return;
                    }
                    if (typeof data != "undefined") {
                        if (data > 0)
                            webChat.chat.getGroup(data);
                    }
                }
            });
        }
        var _declineGroup = function (groupId) {
            $.ajax({
                method: "POST",
                url: "joinGroup.php?v=" + new Date().getTime(),
                async: false,
                data: {"group_id": groupId, status: "-1"},
                success: function (data) {
                    if (!webChat.common.checkSession(data)) {
                        return;
                    }
                }
            });
        }


        return {
            check: _check,
            getCheckedGroupIds: _getCheckedGroupIds,
            accept: _accept,
            clearData: _clearData,
            joinGroup: _joinGroup,
            decline:_decline
        };
    })();
<?php echo '</script'; ?>
>


<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" data-chat="">
    <a href="javascript:void(0);">
        <div style="float: left"><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>
        <div style="float: left;margin-left: 20px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->group_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
        <input type="checkbox" onchange="webChat.confirmInvitation.check(this,<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
)">

        <div style="clear: both;"></div>
    </a>
</div>
<?php } ?>
<?php }} ?>
