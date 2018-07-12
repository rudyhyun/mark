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
    F_page_moving("?pid=29&returl=".urlencode($_SERVER['REQUEST_URI']),"Use this menu is available after login.\\n\\nGo to the login page.");
}

?>
<?@header('Location: /?pid=43')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0; url=/?pid=43" />
<title></title>
<link rel="stylesheet" type="text/css" href="/css/base.css" />
</head>
<body>
페이지(화면)를 이동합니다.<br />
<a href="/?pid=43">/?pid=43 로 이동하기</a>
</body>
</html>

<?php

include_once "$_VAR_DIR[p]/include/close.php";

?>
