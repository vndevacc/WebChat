<!-- <div id="header">
     <h1>Simple #3</h1>
     <h2>Website Slogan or Tagline</h2>
 </div>-->
<div></div>

<div id="menu">
    <div class="left" style="font-size: 20px;"><a style="text-decoration: none;" href="../controller/chat.php">WebChat - Cybozu</a></div>

    <ul class="right">
        {if $is_log_in eq 1}
        <div style="float: left"><img src="{$avatar}" style="width: 32px;height: 32px;margin-top: 10px;"/></div>
        <div class="menu-wrap" style="float: left">
            <nav class="menu">
                <ul >
                    <li>
                        <a href="#">{$display_name} <span class="arrow">&#9660;</span></a>
                        <ul class="sub-menu">
                            <li><a href="../controller/modifyAccount.php">Edit</a></li>
                            <li><a href="../controller/changePassword.php">Change password</a></li>
                            <li><a href="../controller/logout.php">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        {else}
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a>
            {/if}

    </ul>


</div>

