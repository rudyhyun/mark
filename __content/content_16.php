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
    F_page_moving("?pid=17&returl=".urlencode($_SERVER['REQUEST_URI']),"로그인후 이용이 가능한 메뉴입니다.\\n\\n로그인 페이지로 이동합니다.");
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

            <ul class="more_list">
	<?if($MemberXX['id']){?><li class="more_mypage"><a href="<?=$_SERVER['PHP_SELF']?>?pid=9"><span class="more_profile"><?if($MemberXX['file_name']&&$MemberXX['file_path']){?><img alt="<?=$MemberXX['name_nick']?>" src="/__upload/users/<?=$MemberXX['file_path']?>/<?=$MemberXX['file_name']?>" /><?}?></span> <span class="more_name"><?=$MemberXX['name_nick']?></span> <span class="more_email"><?=$MemberXX['id']?></span> </a></li><?}?>
	<li><a href="<?=$_SERVER['PHP_SELF']?>?pid=13">공지사항</a></li>
	<?if($MemberXX['id']){?><li><a href="<?=$_SERVER['PHP_SELF']?>?pid=23">설정</a></li><?}?>
	<?if(!$MemberXX['id']){?><li><a href="<?=$_SERVER['PHP_SELF']?>?pid=17">로그인</a></li><?}?>
	<li><a href="<?=$_SERVER['PHP_SELF']?>?pid=20">도움말</a></li>
</ul>
<!-- // 더보기 -->

        </div><!-- // 본문 Container -->

        <!-- 하단 Quick -->
        <div id="quick">
        <ul class="quick_menu">
            <li><a class="quick_01" href="<?=$_SERVER['PHP_SELF']?>?pid=7">팔기</a></li>
            <li><a class="quick_02" href="<?=$_SERVER['PHP_SELF']?>?pid=3&clear=true">브라우저</a></li>
            <li><a class="quick_03" href="<?=$_SERVER['PHP_SELF']?>?pid=5">메시지</a><?=$MemberXX['message']?></li>
            <li><a class="quick_04" href="<?=$_SERVER['PHP_SELF']?>?pid=8">알림</a></li>
            <li class="on"><a class="quick_05" href="<?=$_SERVER['PHP_SELF']?>?pid=16">더보기</a></li>
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