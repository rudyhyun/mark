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

    <?include("$_VAR_DIR[content]/include_14.inc");?>

</head>
<body>
	<!-- 전체 Wrap -->
	<div id="wrap">

        <?include("$_VAR_DIR[content]/include_17.inc");?>

        <!-- 본문 Container -->
        <div id="container">

            <div class="search">
                <form method="get" action="<?=$_SERVER['PHP_SELF']?>" name="srarchform" onsubmit="return searchform_check(this)">
                <input type="hidden" name="pid" value="3" />
                <input type="text" id="searchText" name="keyword" class="i_input" title="검색어" />
                <input type="image" id="searchSubmit" class="i_image" src="/images/common/search_btn.png" alt="" />
                </form>
            </div>
            <script type="text/javascript">
            //<![CDATA[
            function searchform_check(form){
                form.keyword.value = form.keyword.value.replace(/(^\s*)|(\s*$)/g, "");
                form.keyword.value = form.keyword.value.replace(/(\s{2,})/g, " ");
                if(form.keyword.value == ''){
                    alert("검색어를 입력하세요.");
                    form.keyword.focus();
                    return false;
                }
                return true;
            }
            //]]>
            </script>

            <div class="tab_menu">
    <ul id="user_tab">
        <li id="user_tab1"><a href="?pid=17" class="active">로그인</a></li>
        <li id="user_tab2"><a href="?pid=19">회원가입</a></li>
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
	<button type="submit" id="loginSubmit" name="login_submit" class="btn-type1">확인</button>
	<a href="#" onclick="return newpassword()" class="btn-type1">비밀번호 새로 발급</a>
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
        alert("이메일을 입력하세요.");
        form.id.focus();
        return false;
    }
    if(form.pass.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
        alert("비밀번호를 입력하세요.");
        form.id.focus();
        return false;
    }
    return true;
}
function newpassword(){
    var target = document.loginform;
    if(target.id.value.replace(/(^\s*)|(\s*$)/g, "") == ""){
        alert("이메일을 입력하세요.");
        target.id.focus();
        return false;
    }
    if(confirm("입력하신 이메일 주소로 비밀번호를 안내합니다.")){
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
            <li><a class="quick_01" href="<?=$_SERVER['PHP_SELF']?>?pid=7">팔기</a></li>
            <li><a class="quick_02" href="<?=$_SERVER['PHP_SELF']?>?pid=3&clear=true">브라우저</a></li>
            <li><a class="quick_03" href="<?=$_SERVER['PHP_SELF']?>?pid=5">메시지</a><?=$MemberXX['message']?></li>
            <li><a class="quick_04" href="<?=$_SERVER['PHP_SELF']?>?pid=8">알림</a></li>
            <li><a class="quick_05" href="<?=$_SERVER['PHP_SELF']?>?pid=16">더보기</a></li>
        </ul>
        </div>
        <!-- // 하단 Quick -->

        <?include("$_VAR_DIR[content]/include_15.inc");?>

	</div><!-- // 전체 Wrap -->
</body>
</html>
<?php

include_once "$_VAR_DIR[p]/include/close.php";

?>
