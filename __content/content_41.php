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

            <div class="policy">
	<p>Onsunday internet (hereinafter “the Company”) treats customers’ personal information with care and abides by the Law on the Promotion of Information and Telecommunication Network and Privacy Protection. The Company’s Privacy Protection Policies describe how and for what purposes it uses customers’ personal information and protects their privacy.</div>

	<p class="btmMargin"> The Company will announce any changes in its privacy protection policies on its Web site as well as through individual notifications.</p>


	<h2>■ Personal Information Subject to Collection</h2>

	<p class="btmMargin"> The Company collects the following personal information for membership registration, consultations and service applications.</p>
	<ul>
		<li>ο Collected items: name, date/month/year of birth, gender, log-in ID, password, password question and answer, home phone number, home address, mobile phone number, email address, occupation, company name, office phone number, hobby, marital status, information on legal representative, resident registration number, educational background, access IP, individual preferences, areas of interest</li>
		<li>ο Collection method: Web site (membership registration, confidential bulletin board) </li>
	</ul>


	<h2>■ Collection and Areas of Use of Personal Information</h2>

	<p class="btmMargin"> The Company uses customers’ personal information for the following purposes:</p>
	<ul>
		<li>ο Implementation of terms and conditions of service and provision of information on service fees</li>
		<li>ο Real-name authorization for service members; personal identification; prevention of fraudulent and unauthorized use; confirmation of an individual’s intention to subscribe to a service; age confirmation; confirmation of the existence of a legal representative of users younger than 14 when collecting their personal information; announcements</li>
		<li>ο New services and products for marketing and advertising purposes; advertising information such as events; statistics on the frequency of service use and membership service </li>
	</ul>

	<h2>■ Storage and Period of Use of Personal Information</h2>

	<p class="btmMargin">Personal information is generally discarded immediately after the purpose of its use has been achieved. But the following pieces of personal information can be stored for the indicated period of time for the following purposes.</p>
	<ul>
		<li>tems subject to storage: name, log-in ID, mobile phone number, email address, resident registration number</li>
		<li>Grounds for storage: All unnecessary information is deleted upon unsubscription to prevent re-subscription within one month. The information is stored for six months as evidence of the amount of used content before being deleted.</li>
		<li>Storage period: six months</li>
	</ul>

	<ul>
		<li>tems subject to storage: date/month/year of birth, gender, password, password question and answer, home number, home address, occupation, company name, office phone number, hobby, marital status, information on legal representative, educational background, access IP, user preferences, areas of interest</li>
		<li>Grounds for storage: All unnecessary information is deleted upon unsubscription to prevent re-subscription within one month Storage period: immediate deletion upon unsubscription</li>
	</ul>

	<h2>■ Procedure and Methods of Personal Information Deletion </h2>

	<p class="btmMargin">The Company deletes personal information immediately after the purpose of its use has been achieved. The deletion procedure and methods are as follows.</p>
	<ul>
		<li>ο Deletion procedure
			<ul>
				<li>Information that users insert when subscribing to a service is relocated to a special database (a special file for paper documents) after the purpose of its use has been attained. It is stored there for a legally permitted period of time for specific purposes (see “Storage and Period of Use of Personal Information”) before being deleted.</li>
				<li>Personal information that has been placed in a special database is not used for other purposes, except for legally required ones.</li>
			</ul>
		</li>
		<li>ο Deletion method 
			<ul>
				<li>- Personal information stored in electronic files is deleted using technical methods that prevent its restoration. </li>
			</ul>
		</li>
	</ul>

	<h2>■ Provision of Personal Information</h2>

	<ul>
		<li>The Company does not provide users’ personal information to other companies or institutions. Exceptions can be made in the following cases: 
			<ul>
				<li>- At user’s consent</li>
				<li>- When required by investigating organs according to legal procedures and methods</li>
			</ul>
		</li>
	</ul>

	<h2>■ Commissioned management of personal information</h2>

	<p class="btmMargin">The Company does not commission the management of customers’ personal information to other companies without customers’ consent. If commissioning the management of customers’ personal information is necessary, the Company will notify customers about the details of the deal and will obtain their consent if necessary.</p>

	<h2>■ Rights of Users and Legal Representatives and Methods of Exercising Those Rights</h2>

	<p>Users and legal representatives can view and modify at any time their registered personal information or the personal information of children under 14 who they represent.</p>
	<p class="btmMargin">They can also request that they be unsubscribed.</p>

	<p class="btmMargin">To view or modify personal information, users should click on “Update Personal Information” (or “Update Member Information”); to quit their membership, users should click on “Unsubscribe” (“Withdraw Consent”). They can also request a person in charge of personal information management to modify their personal data or sever their membership in writing, over the phone or via email.</p>

	<p class="btmMargin">When users request that errors in their personal information be corrected, they cannot use or access their information until correction is completed. If a user’s personal information containing an error has already been provided to a third party, the corrected information will be provided to the third party immediately.</p>

	<p class="btmMargin">Onsunday Internet processes personal information that has been deleted at the user’s request or at the request of a legal representative according to the terms and conditions described in “Storage and Period of Use of Personal Information” to prevent its viewing or use for other purposes.</p>

	<h2>■ Installation, Management and Rejection of Automated Collection of Personal Information </h2>
	<p class="btmMargin">The Company uses “cookies” to store and retrieve users’ information. Cookies are small text files that the Onsunday’ Web site server sends to users’ browsers. Cookies are stored on the hard discs of users’ computers. The Company uses cookies for the following purposes.</p>

	<ul>
		<li>▶ Purposes of cookies
			<ul>
				<li>To implement target marketing and provide custom-made services, the Company analyzes the frequency and time of visits by Web site members and non-members, their preferences and areas of interest and participation in events. Users have the right to install or block cookies. They can either permit all cookies by using a certain option in their Web browser, or confirm cookie installation every time, or block the installation of any cookies whatsoever. </li>
			</ul>
		</li>
	</ul>

	<ul>
		<li>▶ How to block cookie installation
			<ul>
				<li>Users can choose the required option in the Web browser to permit all cookies, or confirm cookie installation every time, or block the installation of any cookies whatsoever. For users of Internet Explorer, click “Tools” at the top of the Web browser, then choose “Options” and “Personal Information.” If you block cookie installation, you may encounter problems in receiving the Company’s service.</li>
			</ul>
		</li>
	</ul>

	<h2>■ Privacy Complaints</h2>

	<p class="btmMargin">The Company has a department in charge of privacy protection that also processes customers’ complaints with regard to personal information.</p>

	<p>Person in charge of privacy protection: planning team</p>
	<p>Tel: 1666-7765</p>
	<p class="btmMargin">Email: help@rudystory.com</p>

	<p class="btmMargin">Users can file their complaints with regard to privacy protection to the above-mentioned department. The Company will respond to users’ complaints in a swift manner.</p>

	 <ul>
		<li>For more questions on privacy protection contact the following organs:
			<ul>
				<li>1. Korea Information Security Agency (www.1336.or.kr/1336)</li>
				<li>2. Korea Association of Information and Telecommunication (www.eprivacy.or.kr/02-580-0533~4)</li>
				<li>3. Internet Crime Reporting Center of Supreme Prosecutors’ Office (http://icic.sppo.go.kr/02-3480-3600)</li>
				<li>4. Cyber Terror Response Center of National Police Agency (www.ctrc.go.kr/02-392-0330)</li>
			</ul>
		</li>
	</ul>
</div>

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
