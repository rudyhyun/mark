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

            <ul class="more_list">
	<?if($MemberXX['id']){?><li class="more_mypage"><a href="<?=$_SERVER['PHP_SELF']?>?pid=43"><span class="more_profile"><?if($MemberXX['file_name']&&$MemberXX['file_path']){?><img alt="<?=$MemberXX['name_nick']?>" src="/__upload/users/<?=$MemberXX['file_path']?>/<?=$MemberXX['file_name']?>" /><?}?></span> <span class="more_name"><?=$MemberXX['name_nick']?></span> <span class="more_email"><?=$MemberXX['id']?></span> </a></li><?}?>
	<li><a href="<?=$_SERVER['PHP_SELF']?>?pid=35">Notice</a></li>
	<?if($MemberXX['id']){?><li><a href="<?=$_SERVER['PHP_SELF']?>?pid=39">Setup</a></li><?}?>
	<?if(!$MemberXX['id']){?><li><a href="<?=$_SERVER['PHP_SELF']?>?pid=29">Login</a></li><?}?>
	<li><a href="<?=$_SERVER['PHP_SELF']?>?pid=41">Help</a></li>
</ul>
<!-- // 더보기 -->

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
