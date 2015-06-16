<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-20 14:04:58
         compiled from "C:\Users\HP 800\PhpstormProjects\WebChat\view\chat.html" */ ?>
<?php /*%%SmartyHeaderCode:107655544ae2e10ce0-11439526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40bb7bb3bfca4f8597ec5c167a5ca843f29bd90' => 
    array (
      0 => 'C:\\Users\\HP 800\\PhpstormProjects\\WebChat\\view\\chat.html',
      1 => 1432105472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107655544ae2e10ce0-11439526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55544ae2e5c7d6_97717900',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55544ae2e5c7d6_97717900')) {function content_55544ae2e5c7d6_97717900($_smarty_tpl) {?><div>
    <nav class="menu">
        <ul>
            <li>
                <a href="chat.php">Home &nbsp;>>&nbsp; </a>
            </li>
            <li>
                <a href="chat.php">Chat</a>
            </li>
        </ul>
    </nav>
</div>
<div id="content">
    <table id="chat" style="width: 100%;height: 80%">

        <tr>
            <td colspan="2" style="height: 5%;">
                <input type="button" value="Create Group" name="create_group" id="create_group">
                <input type="button" value="Leave Group" name="leave_group" id="leave_group">
            </td>

        </tr>
        <tr style=" vertical-align:top;">
            <td rowspan="2" style="width:24%;">
                <div id="list_chat" style="height: 575px;overflow: auto;">
                    <div>
                        <span>
                            <input type="text" value="" name="text_search" id="text_search" placeholder="Search...">
                            <input type="button" value="Search" name="search" id="search">
                         </span>
                    </div>
                    <ul style="list-style-type: none; list-style:none;
    padding-left:0">
                        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                        <li id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" data-chat="">
                            <a href="javascript:void(0);">
                                <div class="img_div"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->avatar;?>
" style="width: 32px;height: 32px;"></div>
                                <div class="name_div"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->display_name, ENT_QUOTES, 'ISO-8859-1', true);?>
</div>
                                <div style="clear: both;"></div>
                            </a>
                        </li>
                        <?php } ?>
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
    <div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="chat.php">Back to Home &nbsp;&nbsp; </a>
                </li>
                <li>

            </ul>
        </nav>
    </div>
    <div style="clear: both;"></div>
</div>



<?php echo '<script'; ?>
 type="text/javascript">

    _____chat_caches = {};
    _____current_id = 0;

    $('#message').keypress(function (event) {
        if ($("#message").val() != "") {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                sendMessage();


            }
        }
    });

    $(document).ready(function () {
        $("#list_chat li").on("click", function () {
            $("#list_chat li").removeClass("active");
            $(this).addClass("active");
            if (_____current_id > 0) {
                var query = "#list_chat li[id='" + _____current_id + "']";
//                $(query).data("chat", $("#chat_content").html());
                _____chat_caches[_____current_id] = $("#chat_content").html();
            }
            _____current_id = $(this).attr("id");
            if (typeof _____chat_caches[_____current_id] != "undefined")
                $("#chat_content").html(_____chat_caches[_____current_id]);
            else
                $("#chat_content").html("");
            var query = "#list_chat li[id='" + _____current_id + "'] ";
            var notify_div = $(query).find('.notify');
            notify_div.text("");
            $("#message").focus();

        });
    });


    function addMessage(sender_name, message) {

        var msg = "<div><label>$sender_name : </label>$message</div> ";
        msg = msg.replace("$sender_name", sender_name).replace("$message", message);
        $("#chat_content").append(msg);
        $("#message").val("");
    }
    function sendMessage() {
        if ($(_____current_id < 1 || "#message").val() == "") {
            return;
        }
        $.ajax({
            method: "POST",
            url: "message.php",
            data: {receiver_id: _____current_id, message: $("#message").val(), group_id: 0,action : "send"}
        })
                .done(function (msg) {
                    addMessage("Me", $("#message").val());
                });
    }
    function updateUI(data) {
        for (i = 0; i < data.length; i++) {
            var message = data[i];
            var msg = "<div><label>$sender_name : </label>$message</div> ";
            var query = "#list_chat li[id='" + message.sender_id + "'] ";
            msg = msg.replace("$sender_name", $(query).find(".name_div").text()).replace("$message", message.message);
            if (_____current_id == message.sender_id) {
                $("#chat_content").append(msg);
            } else {
                if (typeof _____chat_caches[message.sender_id] == "undefined") {
                    _____chat_caches[message.sender_id] = "";
                }
                _____chat_caches[message.sender_id] += msg;
                notifyMessage(message.sender_id, 1);
            }


        }
    }

    (function () {
        var timeOutId = 0;
        var ajaxFn = function () {
            $.ajax({
                method: "POST",
                url: "message.php",
                data: {action : "check"},
                success: function (data) {
                    if (typeof data != "undefined") {
//                    data = data.replace("\u0000", "");
                        data = JSON.parse(data);
                        if (data.length > 0) {
                            updateUI(data);
                        }
                    }
                }
            });
            timeOutId = setTimeout(ajaxFn, 1000);
        }
        ajaxFn();
    }());

    function notifyMessage(user_id, count) {
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

<?php echo '</script'; ?>
>
<?php }} ?>
