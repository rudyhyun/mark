<?php

// 단독실행 방지
if(!defined('_WCS_USERCONTENT_') || constant('_WCS_USERCONTENT_') !== true){ return; }

include_once "/home/hosting_users/onsunday77/www/include/config.php";
include_once "$_VAR_DIR[p]/include/function.php";
include_once "$_VAR_DIR[p]/include/variable.php";
include_once "$_VAR_DIR[p]/include/global.php";

$ShopXX = information_shop();
$MemberXX = information_member();

if($MemberXX['levels']<3)
{
    F_page_moving("?pid=29&returl=".urlencode($_SERVER['REQUEST_URI']),"Use this menu is available after login.\\n\\nGo to the login page.");
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

            <h2 class="content_title">Setup</h2>

<ul class="setting_list">
	<li class="setting_03">
	<div class="s_icon">Newsletter</div>

	<div class="check_type2"><label class="label_check" for="checkNews"><input id="checkNews" name="check_news" type="checkbox" value="" /> </label></div>

	<div class="s_msg">Get a weekly newsltter with great stuff</div>
	</li>
</ul>
<!-- // 설정 목록 -->
<script type="text/javascript" src="/js/checkbox_style.js"></script>
<a class="btn_logout" href="/member/index.html?formtype=ing_logout"><img alt="Logout" src="/images/content/btn_logout.png" /></a>

        </div><!-- // 본문 Container -->

        <!-- 하단 Quick -->
        <div id="quick">
        <ul class="quick_menu">
            <li><a class="equick_01" href="<?=$_SERVER['PHP_SELF']?>?pid=31">Sell</a></li>
            <li><a class="equick_02" href="<?=$_SERVER['PHP_SELF']?>?pid=4&clear=true">Brower</a></li>
            <li><a class="equick_03" href="<?=$_SERVER['PHP_SELF']?>?pid=6">Message</a><?=$MemberXX['message']?></li>
            <li><a class="equick_04" href="<?=$_SERVER['PHP_SELF']?>?pid=33">Notifications</a></li>
            <li class="on"><a class="equick_05" href="<?=$_SERVER['PHP_SELF']?>?pid=34">More</a></li>
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
