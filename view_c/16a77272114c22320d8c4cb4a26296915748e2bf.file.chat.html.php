<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 10:24:36
         compiled from "C:\Apache24\htdocs\WebChat-Dev\view\chat.html" */ ?>
<?php /*%%SmartyHeaderCode:31603555d3439f12d77-66773096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a77272114c22320d8c4cb4a26296915748e2bf' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\WebChat-Dev\\view\\chat.html',
      1 => 1432783375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31603555d3439f12d77-66773096',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d3439f3fa12_31890188',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'is_group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d3439f3fa12_31890188')) {function content_555d3439f3fa12_31890188($_smarty_tpl) {?><div id="content">
    <table id="chat" style="width: 100%;height: 80%">
        <tr>
            <td colspan="2" style="height: 5%;">
                <div style="float: left">
                    <input type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                           value="Create Group" name="create_group" id="create_group"/>
                    <input type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                           value="Leave Group" name="leave_group" id="leave_group"/>
                </div>
                <div style="float: right;">
                        <span>
                            <input type="text" value="" name="text_search" id="text_search"
                                   placeholder="Search user to chat..." style="font-size: 1em;padding: 0.6em 1.7em;"/>
                            <input type="button" value="Search" name="search" id="btn_search"
                                   class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/>
                         </span>
                </div>
            </td>

        </tr>
        <tr style=" vertical-align:top;">
            <td rowspan="2" style="width:24%;">
                <div id="list_chat" style="height: 575px;overflow: auto;">
                    <div>
                        <span>
                            <input type="text" value="" name="" id="text_search_user"
                                   placeholder="Search current users..."
                                   style="width: 100%">
                            <!--<input type="button" value="Search" name="search" id="btn_search">-->
                         </span>
                    </div>
                    <ul id="user_list" style="list-style-type: none; list-style:none;
    padding-left:0">
                        <!--<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>-->
                        <!--<li id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" group="<?php echo $_smarty_tpl->tpl_vars['is_group']->value;?>
">-->
                        <!--<a href="javascript:void(0);">-->
                        <!--<div class="img_div"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>-->
                        <!--<div class="name_div"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->display_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>-->
                        <!--<div style="clear: both;"></div>-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<?php } ?>-->
                    </ul>
                </div>

            </td>

            <td>
                <div id="chat_content" style="height: 534px;overflow: auto;">
                </div>

            </td>
        </tr>
        <tr>
            <td><input autofocus="true" type="text" value="" name="message" id="message"
                       placeholder="Enter your message..." style="width: 100%;height: 100%;font-size: 1.5em"></td>

        </tr>
    </table>
</div>

<div id="dialog_confirm" title="Invite Users">

</div>
<div id="invitation_confirm" title="You have these invitation ">

</div>

<div id="create_group_dialog" title="Create Group" style="display: none;">
    <div style="margin: 5px;">
        <label>Group Name</label>
        <input type="text" maxlength="100" name="group_name" id="group_name" value=""/>
    </div>
 <span>
       <input type="text" value="" name="text_search" id="text_search_user_group" placeholder="Search..."
              maxlength="100" style="width: 270px;"/>
       <input type="button" value="Search" name="search" id="btn_search_user_group"/>
 </span>

    <div style="clear: both;"></div>
    <div>
        <div id="user_result" style="float: left;margin: 5px;">
            <select id="select_user_result" style="width:70%px;height: 70%;min-width:100px;" multiple="" size="5"
                    name=""></select>

        </div>
        <div style="float: left;">
            <input id="add_user_group" type="button" value=">>" style="margin-top: 140%"/><br/>
            <input id="remove_user_group" type="button" value="<<" style="margin-top: 140%"/>
        </div>
        <div id="user_select" style="float: left;margin: 5px;">
            <select id="selected_user" style="width:70%px;height: 70%;min-width:100px;" multiple="" size="5" name="">

            </select>
        </div>
    </div>
</div>

<div id="info_dialog" title="Chat">

</div>



<?php echo '<script'; ?>
 type="text/javascript">


$(document).ready(function () {
    $('#message').keypress(function (event) {
        if ($("#message").val() != "") {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                webChat.chat.sendMessage();
            }
        }
    });

    $("#list_chat li").on("click", function () {
        webChat.chat.onSelectUserChange($(this));
    });

    $("#btn_search").on("click", function () {
        if ($("#text_search").val() == "")
            return;
        webChat.chat.searchUser($("#text_search").val());
    });
    $("#text_search").keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            if ($("#text_search").val() == "")
                return;
            webChat.chat.searchUser($("#text_search").val());
        }
    });

    $("#create_group").on("click", function () {
        $("#select_user_result").html("");
        $("#selected_user").html("");
        $("#create_group_dialog").dialog({
            resizable: false,
            height: 500,
            width: 700,
            modal: true,
            buttons: {
                "Create": function () {
                    if (webChat.inviteGroup.createGroup($("#group_name").val()))
                        $(this).dialog("close");
                },
                "Cancel": function () {
                    $(this).dialog("close");
                }
            },
            beforeClose: function () {
                webChat.inviteGroup.clearData();
                $("#group_name").val("");
                $("#text_search_user_group").val("");
            }
        });
    });


    $("#add_user_group").on("click", function () {

        $("#select_user_result option:selected").each(function () {
            var self = $(this);
            if (webChat.inviteGroup.getSelected().indexOf(self.val()) < 0) {
                webChat.inviteGroup.select(self.val());
                $("#selected_user").append($('<option/>', {
                    value: self.val(),
                    text: self.text()
                }));

            }
        });

    });

    $("#remove_user_group").on("click", function () {

        $("#selected_user option:selected").each(function () {
            var self = $(this);
            var index = webChat.inviteGroup.getSelected().indexOf(self.val());
            if (index >= 0) {
                webChat.inviteGroup.removeSelected(index);
                $(this).remove();
            }
        });

    });


});

$("#btn_search_user_group").on("click", function () {
    if ($("#text_search_user_group").val() == "")
        return;
    webChat.chat.searchUserGroup($("#text_search_user_group").val());
});

$("#text_search_user_group").keypress(function (e) {
    var key = e.which;
    if (key == 13) {
        if ($("#text_search_user_group").val() == "")
            return;
        webChat.chat.searchUserGroup($("#text_search_user_group").val());
    }
});

jQuery("#text_search_user").keyup(function () {
    var filter = jQuery(this).val();
    jQuery("#user_list li").each(function () {
        if (jQuery(this).text().search(new RegExp(filter, "i")) < 0) {
            jQuery(this).hide();
        } else {
            jQuery(this).show()
        }
    });
});

var webChat = {};
webChat.common = (function () {
    var _sessionTimeoutCode = "1342443ef5df524dd1c07de9fd789bb0";
    var _checkSession = function (data) {
        if (typeof data != undefined && data === _sessionTimeoutCode) {
            webChat.chat.alertMessage("Your session is expired. Please sign in again.")
            setTimeout(function () {
                window.location = "signin.php";
            }, 2000);
            return false;
        }
        return true;
    }

    return {
        checkSession: _checkSession
    };

})();


webChat.chat = (function () {
    var _____current_id = 0;
    var _____chat_caches = {};
    var _____group_ids = [];
    var _____last_message_id = 0;
    var _sendMessage = function () {
        if (_____current_id < 1 || $("#message").val() == "") {
            _alertMessage("Please select user or group.");
            return;
        }
        $.ajax({
            method: "POST",
            url: "message.php",
            data: {
                receiver_id: _____current_id,
                message: $("#message").val(),
                group_id: _____current_id,
                action: "send"
            }
        })
                .done(function (msg) {
                    var msg = $("#message").val();
                    $("#message").val("");
                    _addMessage("", msg);
                    _scrollMessage();
                });
    }

    var _onSelectUserChange = function (element) {
        $("#list_chat li").removeClass("active");
        $(element).addClass("active");
        if (_____current_id > 0) {
            var query = "#list_chat li[id='" + _____current_id + "']";
//                $(query).data("chat", $("#chat_content").html());
            _____chat_caches[_____current_id] = $("#chat_content").html();
        }
        _____current_id = $(element).attr("id");
        if (typeof _____chat_caches[_____current_id] != "undefined")
            $("#chat_content").html(_____chat_caches[_____current_id]);
        else
            $("#chat_content").html("");
        var query = "#list_chat li[id='" + _____current_id + "'] ";
        var notify_div = $(query).find('.notify');
        notify_div.text("");
//        _moveToTop(_____current_id);
        $("#text_search_user").val("");
        $("#text_search_user").trigger("keyup");
        $("#message").focus();
    }

    var _updateUI = function (data) {
        for (i = 0; i < data.length; i++) {
            var message = data[i];
            if (!webChat.chat.existGroupId(message.group_id)) {
                _getGroup(message.group_id);
            }

            if (message.time > _____last_message_id) {
                _____last_message_id = message.time;
            }


//            var msg = "<div><label>$sender_name : </label>$message</div> ";
            var msg = '<div style="margin: 10px;">' +
                    '  <div style="float:left;width: 13%;"><div style="text-align: center;"><img src="$sender_avatar" style="width: 48px;height: 48px;"> </div>' +
                    '<div style="text-align:center;font-size: .8em;font-style: italic;color: #000088;margin-left: 3px;">$sender_name</div>' +
                    ' </div>' +
                    '<div style="float:left;font-size: 1.2em;margin-left: 10px;width: 85%;">$message</div>' +

//                    '<div style="clear: both;"></div>' +
//                    '<div style="float:left;font-size: .8em;font-style: italic;color: #000088;margin-left: 3px;">$sender_name</div>' +
                    '<div style="clear: both;"></div>' +
                    '</div>';


            var query = "#list_chat li[id='" + message.group_id + "'] ";
            msg = msg.replace("$sender_name", message.sender_name).replace("$message", message.message).replace("$sender_avatar", message.sender_avatar);

            if (_____current_id == message.group_id) {
                $("#chat_content").append(msg);
                _notifyMessage(message.group_id, 1);
                setTimeout(function () {
                    _clearNotifyMessage(message.group_id);
                }, 5000);
            } else {
                if (typeof _____chat_caches[message.group_id] == "undefined") {
                    _____chat_caches[message.group_id] = "";
                }
                _____chat_caches[message.group_id] += msg;
                _notifyMessage(message.group_id, 1);
            }
            _moveToTop(message.group_id);
            _scrollMessage();


        }
    }

    var _checkMessage = function () {
        $.ajax({
            method: "POST",
            url: "deliver.php",
            data: {action: "check", time: new Date().getTime(), last_id: _____last_message_id},
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined") {
//                    data = data.replace("\u0000", "");
                    data = JSON.parse(data);
                    if (data.length > 0) {
                        _updateUI(data);
                    }
                }
                setTimeout(function () {
                    _checkMessage();
                }, 0);

            },
            error: function () {
                setTimeout(function () {
                    _checkMessage();
                }, 0);
            },
            timeout: 20000
        });
//        timeOutId = setTimeout(_checkMessage, 1000);
    }

    var _notifyMessage = function (user_id, count) {
        var query = "#list_chat li[id='" + user_id + "'] ";
        var notify_div = $(query).find('.notify');
        if ($(notify_div).length > 0) {
            var curr_count = $(notify_div).text();
            curr_count++;
            $(notify_div).text(curr_count);

        } else {
            $('<div><span class="notify">' + count + '</span></div>').insertAfter($(query).find(".name_div"));
        }

    }
    var _clearNotifyMessage = function (user_id) {
        var query = "#list_chat li[id='" + user_id + "'] ";
        var notify_div = $(query).find('.notify');
        if ($(notify_div).length > 0) {
            $(notify_div).text("");
        }

    }

    var _addMessage = function (sender_name, message) {
        var msg = "<div style='color: slategray;font-size: 1.2em;margin-left: 50px;margin: 20px;float: right;'><label>$sender_name  </label>$message</div> <div style='clear: both;'></div>";
        msg = msg.replace("$sender_name", sender_name).replace("$message", $('<p />').text(message).html());
        $("#chat_content").append(msg);
        $("#message").val("");
    }


    var _searchUser = function (query) {
        $.ajax({
            method: "POST",
            url: "searchUser.php",
            async: false,
            data: {query: query},
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined" && data != "") {
                    $("#dialog_confirm").html(data);
                    $("#dialog_confirm").dialog({
                        resizable: false,
                        height: 500,
                        width: 500,
                        modal: true,
                        buttons: {
                            "Invite": function () {
                                if (jQuery.isEmptyObject(webChat.inviteUser.getCheckedUserId())) {
                                    _alertMessage("Please select user.");
                                    return;
                                }
                                webChat.inviteUser.invite();
                                $(this).dialog("close");
                            },
                            "Cancel": function () {
                                $(this).dialog("close");
                            }

                        },
                        beforeClose: function () {
                            webChat.inviteUser.clearData();
                        }
                    });
                }
            }
        });
    }

    var _getGroup = function (groupId) {
        if (groupId <= 0 || _existGroupId(groupId))
            return;
        $.ajax({
            method: "POST",
            url: "getGroup.php",
            async: false,
            data: {group_id: groupId},
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined") {
                    $("#user_list").append(data);
                    $("#list_chat li").on("click", function () {
                        _onSelectUserChange($(this));
                    });
                }
            }
        });
    }

    var _getGroupChat = function () {
        $.ajax({
            method: "POST",
            url: "getGroupChat.php",
            async: false,
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined") {
                    $("#user_list").append(data);
                    $("#list_chat li").on("click", function () {
                        _onSelectUserChange($(this));
                    });
                }
            }
        });
    }

    var _pushGroupId = function (user_id) {
        _____group_ids.push(user_id);
    }

    var _existGroupId = function (user_id) {
        var id = parseInt(user_id);
        return _____group_ids.indexOf(id) > -1;
    }

    var _getGroupIds = function () {
        return _____group_ids;
    }

    var _checkInvitation = function () {
        $.ajax({
            method: "POST",
            url: "checkInvitation.php",
            data: {action: "check", time: new Date().getTime()},
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined" || data == "") {
                    $("#invitation_confirm").html(data);
                    $("#invitation_confirm").dialog({
                        resizable: false,
                        height: 500,
                        width: 500,
                        modal: true,
                        buttons: {
                            "Accept": function () {
                                webChat.confirmInvitation.accept();
                                $(this).dialog("close");
                                setTimeout(_checkInvitation, 5000);
                            },
                            "Decline": function () {
                                webChat.confirmInvitation.decline();
                                $(this).dialog("close");
                                setTimeout(_checkInvitation, 5000);
                            }

                        },
                        beforeClose: function () {
                            webChat.confirmInvitation.clearData();
                        }
                    });
                } else {
                    setTimeout(_checkInvitation, 5000);
                }


            },
            error: function () {
                setTimeout(_checkInvitation, 5000);
            },
            timeout: 20000
        });
//        timeOutId = setTimeout(_checkMessage, 1000);
    }

    var _scrollMessage = function () {
        var objDiv = document.getElementById("chat_content");
        objDiv.scrollTop = objDiv.scrollHeight;
    }

    var _searchUserGroup = function (query) {
        $.ajax({
            method: "POST",
            url: "searchUserGroup.php",
            async: false,
            data: {query: query},
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined" && data != "") {
                    $("#user_result").html(data);
                }
            }
        });
    }

    var _alertMessage = function (msg) {
        $("#info_dialog").html("<p>" + msg + "</p>");
        $("#info_dialog").dialog({
            resizable: false,
            modal: true,
            buttons: {
                "OK": function () {
                    $(this).dialog("close");
                }
            }
        });

    }

    var _moveToTop = function (id) {
        var query = "#list_chat li[id='" + id + "'] ";
        // the clicked LI
        var clicked = $(query);

        // all the LIs above the clicked one
        var previousAll = clicked.prevAll();

        // only proceed if it's not already on top (no previous siblings)
        if (previousAll.length > 0) {
            // top LI
            var top = $(previousAll[previousAll.length - 1]);

            // immediately previous LI
            var previous = $(previousAll[0]);

            // how far up do we need to move the clicked LI?
            var moveUp = clicked.attr('offsetTop') - top.attr('offsetTop');

            // how far down do we need to move the previous siblings?
            var moveDown = (clicked.offset().top + clicked.outerHeight()) - (previous.offset().top + previous.outerHeight());

            // let's move stuff
            clicked.css('position', 'relative');
            previousAll.css('position', 'relative');
            clicked.animate({'top': -moveUp});
            previousAll.animate({'top': moveDown}, {
                complete: function () {
                    // rearrange the DOM and restore positioning when we're done moving
                    clicked.parent().prepend(clicked);
                    clicked.css({'position': 'static', 'top': 0});
                    previousAll.css({'position': 'static', 'top': 0});
                }
            });
        }

    }


    return {
        sendMessage: _sendMessage,
        onSelectUserChange: _onSelectUserChange,
        checkMessage: _checkMessage,
        searchUser: _searchUser,
        pushGroupId: _pushGroupId,
        existGroupId: _existGroupId,
        getGroupIds: _getGroupIds,
        getGroup: _getGroup,
        getGroupChat: _getGroupChat,
        checkInvitation: _checkInvitation,
        scrollMessage: _scrollMessage,
        searchUserGroup: _searchUserGroup,
        alertMessage: _alertMessage,
        moveToTop: _moveToTop
    };

})();


webChat.inviteGroup = (function () {
    var __userResult = [];
    var __selectedUser = [];

    var _createGroup = function (groupName) {
        if (groupName == "") {
            webChat.chat.alertMessage("Please enter group name.");
            return false;
        }
        if (typeof __selectedUser == "undefined" || __selectedUser.length < 1) {
            webChat.chat.alertMessage("Please select user.");
            ;
            return false;
        }
        $.ajax({
            method: "POST",
            url: "createGroup.php?v=" + new Date().getTime(),
            async: false,
            data: {"user_ids": JSON.stringify(__selectedUser), group_name: groupName},
            success: function (data) {
                if (!webChat.common.checkSession(data)) {
                    return;
                }
                if (typeof data != "undefined") {
                    if (data > 0 && !webChat.chat.existGroupId(parseInt(data)))
                        webChat.chat.getGroup(data);
                }

            }
        });
        return true;
    }

    var _pushResult = function (id) {
        __userResult.push(id);
    }

    var _getResult = function () {
        return __userResult;
    }

    var _select = function (id) {
        __selectedUser.push(id);
    }

    var _getSelected = function () {
        return __selectedUser;
    }

    var _removeSelected = function (index) {
        __selectedUser.splice(index, 1);
    }

    var _clearData = function () {
        __userResult = [];
        __selectedUser = [];
    }

    return {
        createGroup: _createGroup,
        pushResult: _pushResult,
        getResult: _getResult,
        getSelected: _getSelected,
        select: _select,
        removeSelected: _removeSelected,
        clearData: _clearData
    };


})();

webChat.chat.getGroupChat();
webChat.chat.checkMessage();
webChat.chat.checkInvitation();

<?php echo '</script'; ?>
>
<?php }} ?>
