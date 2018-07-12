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
        <li id="user_tab1"><a href="?pid=29">Login</a></li>
        <li id="user_tab2"><a href="?pid=30" class="active">Join</a></li>
    </ul>
</div><!-- // 탭메뉴 -->
<div class="join">
    <form action="/member/index.html" method="post" name="joinform" enctype="multipart/form-data" onsubmit="return joinform_check(this)">
    <input name="formtype" type="hidden" value="ing_join" />
    <input type="hidden" name="oldfile" value="" />
    <input name="returl" type="hidden" value="<?=urlencode("/content_kor/index.html?pid=29")?>" />
    <div class="join_profile">
        <a href="#"><img alt="Add a profile photo" src="/images/content/join_profile_add.jpg" id="joinImg" /></a>
        <input type="file" id="regImage" name="regImage" class="file_hidden" onclick="return webview_check()" onchange="return readURL(this)" />
    </div>

    <ul class="join_item">
        <li>
        <div><label class="i_label" for="joinFamily">last name</label> <input class="i_input" id="joinFamily" name="join_family" type="text" /></div>
        </li>
        <li>
        <div><label class="i_label" for="joinName">* first name</label> <input class="i_input" id="joinName" name="join_name" type="text" /></div>
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
		<button type="reset" id="joinCancel" name="join_cancel" class="btn-type2">Cancel</button>
		<button type="submit" id="joinSubmit" name="join_submit" class="btn-type1">Comfirm</button>
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
        alert("Name is required.");
        form.join_name.focus();
        return false;
    }
    if(form.join_email.value == ""){
        alert("Email address is required.");
        form.join_email.focus();
        return false;
    }
    if(form.pass1.value == ""){
        alert("Password is required.");
        form.pass1.focus();
        return false;
    }
    if(form.pass1.value != form.pass2.value){
        alert("Password does not match.");
        form.pass2.value = "";
        form.pass2.focus();
        return false;
    }
    if(isemail == -1){
        alert("Failed to verify the e-mail address duplication check.");
        return false;
    }
    if(isemail == 0){
        alert("Are duplicate email addresses you want to subscribe.");
        return false;
    }
    if(confirm("The information you entered in the Register.")){
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
            targetId.innerHTML = "※ The email address is confirmed as duplicates.";
            break;
        case "0":
        default:
            isemail = 1;
            targetId.innerHTML = "※ Sign up with this email address.";
            break;
    }
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
