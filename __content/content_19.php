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

            <div class="tab_menu">
    <ul id="user_tab">
        <li id="user_tab1"><a href="?pid=17">로그인</a></li>
        <li id="user_tab2"><a href="?pid=19" class="active">회원가입</a></li>
    </ul>
</div><!-- // 탭메뉴 -->
<div class="join">
    <form action="/member/index.html" method="post" name="joinform" enctype="multipart/form-data" onsubmit="return joinform_check(this)">
    <input name="formtype" type="hidden" value="ing_join" />
    <input type="hidden" name="oldfile" value="" />
    <input name="returl" type="hidden" value="<?=urlencode("/content_kor/index.html?pid=17")?>" />
    <div class="join_profile">
        <a href="#"><img alt="프로필 사진 추가" src="/images/content/join_profile_add.jpg" id="joinImg" /></a>
        <input type="file" id="regImage" name="regImage" class="file_hidden" onclick="return webview_check()" onchange="return readURL(this)" />
    </div>

    <ul class="join_item">
        <li>
        <div><label class="i_label" for="joinFamily">성</label> <input class="i_input" id="joinFamily" name="join_family" type="text" /></div>
        </li>
        <li>
        <div><label class="i_label" for="joinName">* 이름</label> <input class="i_input" id="joinName" name="join_name" type="text" /></div>
        </li>
        <li>
        <span id="emailcheck"></span>
        <div><label class="i_label" for="joinEmail">* Email address</label> <input class="i_input" id="joinEmail" name="join_email" type="text" onchange="return submitEmailChecker(this.form)" /></div>
        </li>
        <li>
        <div><label class="i_label" for="joinPw1">* Password</label> <input class="i_input" id="joinPw1" name="pass1" type="password" /></div>
        </li>
        <li>
        <div><label class="i_label" for="joinPw2">Password Confirm</label> <input class="i_input" id="joinPw2" name="pass2" type="password" /></div>
        </li>
    </ul>

    <div class="join_btn">
		<button type="reset" id="joinCancel" name="join_cancel" class="btn-type2">취소</button>
		<button type="submit" id="joinSubmit" name="join_submit" class="btn-type1">확인</button>
	</div>
    </form>
</div><!-- // 회원가입 -->

<script type="text/javascript">
//<![CDATA[
jQuery(function($){
    var search_keyword = $('.i_input');
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

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
            function appreadURL(input){
                $('#blah').attr('src', input);
                document.joinform.oldfile.value = input;
            }
var isemail = -1;
function joinform_check(form){
    if(form.join_name.value == ""){
        alert("이름은 필수입니다.");
        form.join_name.focus();
        return false;
    }
    if(form.join_email.value == ""){
        alert("이메일 주소는 필수입니다.");
        form.join_email.focus();
        return false;
    }
    if(form.pass1.value == ""){
        alert("비밀번호는 필수입니다.");
        form.pass1.focus();
        return false;
    }
    if(form.pass1.value != form.pass2.value){
        alert("비밀번호가 일치하지 않습니다.");
        form.pass2.value = "";
        form.pass2.focus();
        return false;
    }
    if(isemail == -1){
        alert("이메일 주소 중복확인을 확인하지 못했습니다.");
        return false;
    }
    if(isemail == 0){
        alert("가입하려는 이메일 주소가 중복되어 있습니다.");
        return false;
    }
    if(confirm("입력하신 정보로 회원가입을 합니다.")){
        return true;
    }
    return false;
}

function webview_check() {
	try {
		window.WebConnecter.setUploadUrl("http://www.onsunday.co.kr/pgm/profile_upload.html");
		window.WebConnecter.requestGallery();
	} catch (e) {
	}
	return true;
}
//]]>
</script>

<script type="text/javascript" src="/js/xmlhttp.js"></script>
<script type="text/javascript">
//<![CDATA[
function submitEmailChecker(form)
{
    if(!jsf_email_valid(form.join_email)){ isemail = -1; return false; }
    xmlHttpPost("/pgm/_ajax_email.html", formData2QueryString(form), "viewEmailUserResult");
    return false;
}
function viewEmailUserResult(result)
{
    var targetId = document.getElementById("emailcheck");
    switch(result){
        case "1":
            isemail = 0;
            targetId.innerHTML = "※ 이메일 주소가 중복으로 확인됩니다.";
            break;
        case "0":
        default:
            isemail = 1;
            targetId.innerHTML = "※ 가입이 가능한 이메일 주소입니다.";
            break;
    }
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
