<?php

// 단독실행 방지
if(!defined('_WCS_USERCONTENT_') || constant('_WCS_USERCONTENT_') !== true){ return; }

include_once "/home/hosting_users/onsunday77/www/include/config.php";
include_once "$_VAR_DIR[p]/include/function.php";
include_once "$_VAR_DIR[p]/include/variable.php";
include_once "$_VAR_DIR[p]/include/global.php";

$ShopXX = information_shop();
$MemberXX = information_member();

if($MemberXX['levels']<1)
{
    F_page_moving("?pid=0&returl=".urlencode($_SERVER['REQUEST_URI']),"로그인후 이용이 가능한 메뉴입니다.\\n\\n로그인 페이지로 이동합니다.");
}

?>
<!doctype html>
<html lang="ko">
<head>

    <?include("$_VAR_DIR[content]/include_18.inc");?>

</head>
<body>
	<!-- 전체 Wrap -->
	<div id="wrap">

        <?include("$_VAR_DIR[content]/include_19.inc");?>

        <!-- 본문 Container -->
        <div id="container">

            <div class="search">
                <form method="get" action="<?=$_SERVER['PHP_SELF']?>" name="srarchform" onsubmit="return searchform_check(this)">
                <input type="hidden" name="pid" value="4" />
                <input type="text" id="searchText" name="keyword" class="i_input" title="keyword" />
                <input type="image" id="searchSubmit" class="i_image" src="/images/common/search_btn.png" alt="" />
                </form>
            </div>
            <script type="text/javascript">
            //<![CDATA[
            function searchform_check(form){
                form.keyword.value = form.keyword.value.replace(/(^\s*)|(\s*$)/g, "");
                form.keyword.value = form.keyword.value.replace(/(\s{2,})/g, " ");
                if(form.keyword.value == ''){
                    alert("Please enter a search term.");
                    form.keyword.focus();
                    return false;
                }
                return true;
            }
            //]]>
            </script>

            <div class="tab_menu">
    <ul id="user_tab">
        <li id="user_tab1"><a href="?pid=29" class="active">Login</a></li>
        <li id="user_tab2"><a href="?pid=30">Join</a></li>
    </ul>
</div><!-- // 탭메뉴 -->
<div class="login">
<form method="post" name="loginform" action="/member/index.html" onsubmit="return loginform_check(this)">
<input type="hidden" name="formtype" value="ing_login" />
<input type="hidden" name="returl" value="<?=$_GET['returl']?>" />
<ul class="login_item">
	<li>
	<div><label class="i_label" for="loginEmail">Email address</label> <input class="i_input" id="loginEmail" name="id" type="text" /></div>
	</li>
	<li>
	<div><label class="i_label" for="loginPw">Password</label> <input class="i_input" id="loginPw" name="pass" type="password" /></div>
	</li>
</ul>

<div class="login_btn">
	<button type="submit" id="loginSubmit" name="login_submit" class="btn-type1">confirm</button>
	<a href="#" onclick="return newpassword()" class="btn-type1">Issuing new password</a>
</div>

</form>

</div>
<!-- // 로그인 -->

<script type="text/javascript">
//<![CDATA[
jQuery(function($){
    // Input Clear
    var input_text = $('.i_label').next('.i_input');
    $('.i_label').css('position','absolute');
    input_text
        .focus(function(){
            $(this).prev('.i_label').css('visibility','hidden');
        })
        .blur(function(){
            if($(this).val() == ''){
                $(this).prev('.i_label').css('visibility','visible');
            } else {
                $(this).prev('.i_label').css('visibility','hidden');
            }
        })
        .change(function(){
            if($(this).val() == ''){
                $(this).prev('.i_label').css('visibility','visible');
            } else {
                $(this).prev('.i_label').css('visibility','hidden');
            }
        })
        .blur();
});
function loginform_check(form){
    if(form.id.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
        alert("Please enter your e-mail.");
        form.id.focus();
        return false;
    }
    if(form.pass.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
        alert("Please enter a password.");
        form.pass.focus();
        return false;
    }
    return true;
}
function newpassword(){
    var target = document.loginform;
    if(target.id.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
        alert("Please enter your e-mail.");
        target.id.focus();
        return false;
    }
    if(confirm("Will guide your password to the email address you have entered.")){
        target.formtype.value = "ing_newpassword";
        target.submit();
    }
    return false;
}
//]]>
</script>

        </div><!-- // 본문 Container -->

        <!-- 하단 Quick -->
        <div id="quick">
        <ul class="quick_menu">
            <li><a class="equick_01" href="<?=$_SERVER['PHP_SELF']?>?pid=31">Sell</a></li>
            <li><a class="equick_02" href="<?=$_SERVER['PHP_SELF']?>?pid=4&clear=true">Brower</a></li>
            <li><a class="equick_03" href="<?=$_SERVER['PHP_SELF']?>?pid=6">Message</a><?=$MemberXX['message']?></li>
            <li><a class="equick_04" href="<?=$_SERVER['PHP_SELF']?>?pid=33">Notifications</a></li>
            <li><a class="equick_05" href="<?=$_SERVER['PHP_SELF']?>?pid=34">More</a></li>
        </ul>
        </div>
        <!-- // 하단 Quick -->

        <?include("$_VAR_DIR[content]/include_21.inc");?>

	</div><!-- // 전체 Wrap -->
</body>
</html>
<?php

include_once "$_VAR_DIR[p]/include/close.php";

?>
