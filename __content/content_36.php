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

            <div class="TService">
<p class="btmMargin">This agreement was written in Korean (Korea). To the extent any translated version of this agreement conflicts with the Korean version, the Korean version overrules.</p>

<h2>Statement of Rights and Responsibilities</h2>

<p class="btmMargin">This Statement of Rights and Responsibilities (Statement) derives from Onsunday, and governs the relationship with users and others who interact with Onsunday. By using or accessing Onsunday, you agree to this Statement.</p>

<h3>[Chapter 1 General Provisions]</h3>

<h4>Article 1 (Purpose)</h4>

<p>The Terms and Conditions will be used by OnSunday&rsquo;s website as an objective to regulate the membership and admission to the users (hereinafter &ldquo;members&rdquo;) in detail concerning conditions, rules, and other necessary matters.</p>

<h4>Article 2 (Disclosure, Validity and Amendment of the T&amp;C)</h4>

<ul>
	<li>1. The Company will disclose the T&amp;C on the initial landing page of Onsunday to help Members to check the T&amp;C, together with the name, place of business, the name of representative(s), business registration number and contact numbers (telephone and facsimile numbers, email address, etc.) of the Company.</li>
	<li>2. The Company may amend the T&amp;C to the extent permitted by the Regulation of Standardized Contracts Act, the Framework Act on e-Commerce, the Digital Signature Act, the Act concerning Promotion of Utilization of Information and Communications Networks and Protection of Information, etc., the Protection of Consumers in e-commerce and Other Transactions Act (&ldquo;e-Commerce Act&rdquo;), and the Electronic Financial Transactions Act, and any other applicable laws.</li>
	<li>3. If any terms of the T&amp;C are amended by the Company, all amended terms shall be effective 14 days after they are initially posted on the initial landing page of Onsunday, together with the then current T&amp;C, the effective date of and the reasons for the amendment, all of which will be posted for a 14-day period until the date immediately preceding the effective date.</li>
</ul>

<h4>Article 3 (Definition of Terms)</h4>

<p>Items not stipulated in the &quot;User Terms of Service&quot; and the interpretation manner of the terms are governed by the Regulations on Terms of Service Act, the Basic Telecommunication Act, the Telecommunication Business Act, the Regulations on the Information Communication Ethics Committee&#39;s Review, the Codes of Conduct on Information Communication, the Computer Program Protection Act and other relevant laws and regulations.</p>

<h4>Article 4 (Definition of Terms)</h4>

<p>Capitalized terms used herein shall have the following meaning</p>

<ul>
	<li>(1) &#39;Member&#39;, &#39;user&#39; means that someone use to receive services by contract with Onsunday and Membership ID (ID) is to anyone who has been granted.</li>
	<li>(2) &#39;Service contract&#39; means signed contract with Onsunday to receive any service provided</li>
	<li>(3) &ldquo;Member ID&rdquo; means a combination of letters and numbers chosen by a Member, approved by and registered with the Company, for purposes of identification and use of the Services.</li>
	<li>(4) &ldquo;Password&rdquo; means a combination of letters and numbers chosen and registered with the Company by a Member, to verify the Member&rsquo;s identity and protect the Member&rsquo;s rights, interests and confidential information.</li>
	<li>(5) &ldquo;Withdrawal&rdquo; (Termination) means a member or Onsunday to cancel the contract says.</li>
</ul>

<h4>Article 5 (No Agency)</h4>

<p>The Company will be only responsible for the operation and management of a system for the efficiency of the Services and will not act as an agent of either the Seller or the Buyer. The Members concerned shall take the sole direct responsibility for any transaction(s) entered into between the Members and information provided and registered by the Members.</p>

<h4>Article 6 (No Guarantee)</h4>

<p>In relation to the transactions between Sellers and Buyers through the system provided by the Company, the Company will not guarantee the existence and genuineness of the intent to sell or buy, the quality, completeness, safety, and legality of the registered items, non-infringement of third party rights, or the truthfulness or legality of the information entered by any Seller or Buyer, or data posted on the URL linked to the information entered by any Seller or Buyer. The Members concerned shall solely take any and all risks and responsibilities relating thereto.</p>

<h3>[Chapter 2 The Conclusion of the Contract of Service]</h3>

<h4>Article 7 (The Formation of the Contract of Service)</h4>

<ul>
	<li>(1)The Service User Agreement shall be formed upon the Company&rsquo;s acceptance of an application for the use of the services, from a person who intends to use the services provided by the Company.</li>
	<li>(2)By clicking &quot;agree&quot;, you agree to our Terms and that you have read and understood our Data Use Policy.</li>
</ul>

<h4>Article 8 (Approval of the Application and Limitations )</h4>

<ul>
	<li>(1) Applications will be handled on the first-come-first-served basis, and admission to the membership will become effective at the time when the acceptance by the Company is received by the Member.</li>
	<li>(2) The Company may withhold or refuse its acceptance of an application in any of the following cases:
	<ul>
		<li>1) if in the Company&rsquo;s real-name verification process, it is found that the application is not the real name;</li>
		<li>2) if the name and resident (or business) registration number in the application are the same as those of an existing Member;</li>
		<li>3) if reapplied within two (2) months from the Company&rsquo;s termination of the User Agreement;</li>
		<li>4) if reapplied by a Member that is subject to the membership suspension or other action by the Company, during the suspension or other applicable period;</li>
		<li>5) if the facilities/equipment cannot afford or if there is technical difficulty; and</li>
		<li>6) if the application is found to be unlawful, unfair or in violation of the T&amp;C, or if it is deemed necessary to do so in the Company&rsquo;s reasonable judgment.</li>
	</ul>
	</li>
	<li>(3)A person of 14 full years old is eligible to the membership to the Services. An applicant shall apply for the membership in his/her/its real name. If anyone applies for the membership in a name other than his/her/its real name or by misappropriating another&rsquo;s information, such applicant may be restricted from using the Services or penalized pursuant to applicable laws and regulations.</li>
</ul>

<h4>Article 9 (Change and Protection of Personal Information)</h4>

<ul>
	<li>1. A Member may not provide false information when applying for the membership, and in the event of any change in the information provided when applying for the membership, the Member must immediately update the information. As a general rule, a Member&rsquo;s name, ID and resident registration number and the like may not be changed, unless permitted by applicable laws and regulations.</li>
	<li>2. Any damages arising out of the failure to update information must be borne solely by the relevant Member, and the Company shall not be held liable for any such damages.</li>
	<li>3. The Company will not use any information provided by the Member for the execution of a User Agreement, for a purpose other than its operation of the Services, nor disclose such information to a third party without the Member&rsquo;s consent, except where:
	<ul>
		<li>1) such use or disclosure is permitted by applicable laws and regulations;</li>
		<li>2) such minimum information of the Member as necessary to carry out the delivery of goods/services is disclosed; or</li>
		<li>3) consent from the relevant Member has been obtained pursuant to another standard terms and conditions and policies of the Company.</li>
	</ul>
	</li>
	<li>4. To protect Member&rsquo;s personal information, the Company will establish the privacy policy, designate a privacy officer of the Company and disclose and operate the privacy policy.</li>
</ul>

<h3>[Chapter 3 Each Party&#39;s Rights and Obligations]</h3>

<h4>Article 10 (Onsunday&#39;s obligations)</h4>

<ul>
	<li>1. Onsunday shall not do anything that is banned by law and the &quot;Terms of Service&quot; or runs counter to public morals. Onsunday must strive to provide members with consistent and stable services.</li>
	<li>2. Onsunday must immediately deal with grievances related to services filed by members.</li>
	<li>3. Onsunday must use a security system to protect the personal information of users so that they can safely use services.</li>
	<li>4. Onsunday must notify relevant members of the reason for the delay and a schedule to deal with such grievances via the service website or e-mail.</li>
</ul>

<h4>Article 11 (Users&#39; obligations)</h4>

<ul>
	<li>1. Users should enter the correct personal information when filling out an application form as required for membership.</li>
	<li>2. Members are banned from engaging in any business activities using services without prior approval from Onsunday, and from distributing or posting materials that violate laws.</li>
	<li>3. Members should not engage in any of the following in relation to the use of services:
	<ul>
		<li>① Photocopying, duplicating, altering, interpreting, publishing, broadcasting, transmitting, or posting information obtained from services and/or providing others with it without prior approval from Onsunday</li>
		<li>② Destroying the public order by posting ....... materials on the service website and/or the bulletin board, or posting links to obscene sites or distributing obscene materials</li>
		<li>③ Damaging or insulting others&#39; honor, posting or transmitting via e-mail or other methods materials that infringe upon others&#39; rights such as patents, trademarks, business secrets, copyright and other intellectual property rights</li>
		<li>④ Hacking or spreading computer viruses</li>
		<li>⑤ Consistently posting or transmitting via e-mail and other methods certain materials including promotional ads against others&#39; will</li>
		<li>⑥ Illegally using another member&#39;s ID</li>
		<li>⑦ Collecting and storing the personal information of other members</li>
		<li>⑧ Illegally using the identity of others including that of Onsunday employee or system operater</li>
		<li>⑨ Falsely identifying the sender of contents transmitted by services</li>
		<li>⑩ Altering information on the service website</li>
		<li>⑪ Stalking or harassing others on the service website</li>
		<li>⑫ Any acts hampering or might hamper the operations of the services and others running counter to relevant laws</li>
	</ul>
	</li>
</ul>

<h3>[Chapter 4 Use of Services ]</h3>

<h4>Article 12 (Service Usage Fees)</h4>

<ul>
	<li>(1) The use of the service is basically free. The Company may provide various services needed for the freedom of e-commerce between the Members and charge certain fees therefor (i.e., service usage fees) pursuant to its internal policies.</li>
	<li>(2)The data of registered for sale is valid for two months</li>
</ul>

<h4>Article 13 (Onsunday Point Service)/</h4>

<h4>&nbsp;</h4>

<p>Sections of the services provided by Onsunday is only available with the use of Onsunday Points.</p>

<ul>
	<li>(1) To purchase or recharge the Onsunday Points, the member will be allowed to select any payment methods provided by the company.</li>
	<li>(2) Onsunday Point Charge Policy
	<ul>
		<li>-The methods and refund policies concerning purchase of Onsunday Points shall abide by the Cash Policy Usage Terms provided by the company.</li>
		<li>-The members using the Point Charge Services shall follow the Point Policy.</li>
	</ul>
	</li>
	<li>&nbsp;</li>
</ul>

<h4>Article 14 (Term and Suspension of Provision of the Services)</h4>

<ul>
	<li>1. The term of the provision of the Services will begin from the date on which use of the Services are applied for, and ends on the date of termination of the User Agreement.</li>
	<li>2. The Company may suspend its provision of the Services temporarily upon the occurrence of a justifiable event, including without limitation, the maintenance, repair, examination, replacement of information and communications facilities (such as computers), or if such facilities are out of order; provided that the fact and reasons for temporary suspension of the Services shall be notified on the initial landing page of the website.</li>
	<li>3. The Company may restrict or temporarily suspend its provision of the Services if it is unable to provide the Services due to an act of God or a force majeure event equivalent thereto.</li>
</ul>

<h4>Article 15 (Control over ID and Passwords)</h4>

<ul>
	<li>1. Each Member shall be responsible for the control over his/her/its ID and Password, and may in no event assign or lend any of them to a third party.</li>
	<li>2. Each Member shall take the responsibility for any and all damages and losses arising out of the leak, assignment or lending of a Member&rsquo;s ID or Password, that occurs due to a cause that is not attributable to the Company.</li>
	<li>3.If a Member becomes aware of the theft, or unauthorized use by a third party, of his/her/its ID or Password, the Member shall immediately notify the Company thereof and the Company shall exert its best efforts to handle the situation promptly.</li>
</ul>

<h4>Article 16 (Liability for Copyright Infringement)</h4>

<ul>
	<li>1. The Company has established and enforces a policy to protect the copyrights of copyright owners in connection with the provision of the Services, and Members must comply with the copyright policy of the Company.</li>
	<li>2. Copyright to various content posted on Onsunday (whether in its shopping Webzine, product review, Q&amp;A or otherwise) shall vest in the Member who prepared/posted using the shopping services provided by the Company, and if any such content infringes upon copyright of any other person, the Member shall be liable therefor.</li>
	<li>3. If a Member&rsquo;s copyright is infringed on Onsunday, the Member may protect his/her/its lawful right through the copyright infringement report center operated by the Company.</li>
	<li>4. The Company may without prior notice remove any content posted on Onsunday or take any action (such as, placing restrictions on the use of certain services, termination of a User Agreement, etc.) against the person who posted the content, in the following case:
	<ul>
		<li>1) if the laws and regulations of Korea are violated;</li>
		<li>2) if an illegal product, or obscene content, of which sales are prohibited under applicable laws and regulations, is posted or advertised;</li>
		<li>3) if any untrue or exaggerated statement for advertisement are included in the content;</li>
		<li>4) if other&rsquo;s rights, reputation, credit or other lawful interests are infringed or violated;</li>
		<li>5) if a link inducing to a direct dealing (i.e., deviating Onsunday) or to another website is posted;</li>
		<li>6) if any malignant code or data are included in the content;</li>
		<li>7) if it is against the social or public order in the society or against good morals and traditional customs; or</li>
		<li>8) if it is found impeding smooth operation of Onsunday services provided by the Company.</li>
	</ul>
	</li>
</ul>

<h4>Article 17 (Information supply service and ad posting)</h4>

<ul>
	<li>1. Company can post ads on service screens in relation to the operation of its services.</li>
	<li>2. Members should not arbitrarily delete, slander or interfere with the banner ads on the company website.</li>
	<li>3. company bears no responsibility for any losses or damage incurred by members as a result of their participation in any sponsor sales promotions posted on the company service programs.</li>
</ul>

<h4>Article 18 (The limited of the service)</h4>

<p>The Company may without prior notice remove any content posted on Onsunday or take any action (such as, placing restrictions on the use of certain services, termination of a User Agreement, etc.) against the person who posted the content, in the following case:</p>

<ul>
	<li>① Run counter to the &quot;User Terms of Service,&quot; or is considered illegal, obscene or lewd</li>
	<li>② Disparage other members or third parties, infringe upon the privacy of others or damage the honor of others through slander</li>
	<li>③ Hamper or could hamper the stable operations of the services</li>
	<li>④ Relate to a criminal act</li>
	<li>⑤ Infringe on the rights of others including intellectual property rights of KBS and/or others</li>
	<li>⑥ Promote the sale of certain products or have other commercial purposes</li>
	<li>⑦ Illegally alter information</li>
	<li>⑧ Illegally use the user ID and password of other members</li>
	<li>⑨ Have a demonstration effect that is incompatible with the rules and purposes of the bulletin board set by Onsunday</li>
	<li>⑩ Remain posted for a longer period than approved by Onsunday</li>
	<li>⑪ Laced with private political or religious views that are incompatible with the nature of Onsunday services</li>
	<li>⑫ Run counter to public morals or order</li>
	<li>⑬ Run counter to other relevant laws and regulations</li>
</ul>

<h4>Article 19 (Accumulated Points and Cyber Assets)</h4>

<ul>
	<li>(1) Onsunday reserves partial ownership of the points and cyber assets created and/or accumulated through Onsunday services.</li>
	<li>(2) Onsunday reserves the right to modify the members cyber assets, partially or wholly, out of management necessities. However, the company shall notify the members of the reasons and content of the modification.</li>
</ul>

<h3>[Chapter 5 Termination of Contract]</h3>

<h4>Article 20 (Termination of the User Agreement)</h4>

<ul>
	<li>1. Termination by members:
	<ul>
		<li>1) A Member may terminate the User Agreement at any time by notifying the Company of the Member&rsquo;s intent to terminate it; provided that the Member has taken necessary actions to consummate any and all transactions at least seven (7) days prior to the date of the termination notice.</li>
		<li>2) A Member shall be solely responsible for any consequences arising out of a termination notice sent within the said period, and upon termination of the User Agreement, the Company may withdraw all benefits additionally granted to the Member by the Company.</li>
		<li>3) If a Member who has terminated the User Agreement intends to use the Services later again, the Member&rsquo;s use of the Services will not be permitted unless the Member notifies the Company of his/her/its new intent to use the Services and the Company accepts the offer.</li>
	</ul>
	</li>
	<li>2. Termination by the Company:
	<ul>
		<li>1) The Company may terminate the User Agreement in the event of occurrence or finding of the following:
		<ul>
			<li>① violation of, infringement upon or damage to the rights, reputation, credit or any other interest of any other Member or breach of Korean laws/regulations or public order and good morals;</li>
			<li>② obstruction of or any try to impede the proper processing of the Services provided by the Company;</li>
			<li>③ finding that there is a reason for refusal under Section 8.2 hereof; or</li>
			<li>④ circumstances in which the Company finds it necessary, in its reasonable judgment, to refuse the provision of the Services.</li>
		</ul>
		</li>
		<li>2) If the Company terminates the User Agreement with a Member, the Company will notify the Member of its intent of termination by disclosing the reason(s) for termination by e-mail, by phone or otherwise. The User Agreement shall be terminated at the time when the Company notifies the Member of its intent of termination.</li>
		<li>3) Even if the Company terminates the User Agreement, these T&amp;C shall continue to apply with respect to the consummation of a sale and purchase contract entered into on or before the termination.</li>
		<li>4) When the User Agreement is terminated pursuant to this Article, the Company may withdraw all benefits additionally granted to the Member by the Company.</li>
		<li>5) If the User Agreement is terminated pursuant to this Section, the Company may refuse to accept the Members&rsquo; re-application.</li>
	</ul>
	</li>
</ul>

<h3>[Chapter 6 Dispute Mediation and others]</h3>

<h4>Article 21 (Compensation for damage)</h4>

<ul>
	<li>1. Onsunday bears no responsibility for any damage to members or users in relation to free services, unless in the case of an intentional crime.</li>
	<li>2. Onsunday is not liable for products or services provided by affiliates.</li>
</ul>

<h4>Article 22 (Exemption Clause)</h4>

<ul>
	<li>(1) Onsunday is not liable for damage caused by service interruptions by a natural disaster, war or a force majeure event.</li>
	<li>(2) Onsunday is not liable for damage caused by suspension or irregular supply of telecommunication services due to telecommunication companies.</li>
	<li>(3) Onsunday is not liable for damage caused by repairs, replacement of components, regular check-ups or installation of service facilities.</li>
	<li>(4) Onsunday shall not be liable for impaired functionings of service use or damages due to imputation.</li>
	<li>(5) Onsunday shall not be liable for damages caused by the members computer errors. Damages caused by members filling in personal information and e-mail address poorly will not be held responsible by Onsunday.</li>
	<li>(6) Onsunday shall it bear any responsibility for gains or losses that members expect in relation to the use of services.</li>
	<li>(7) Onsunday will not be liable for damages caused by information gained through services by the member. Also, Onsunday shall not be responsible for the mental offense created by other members.</li>
	<li>(8) Onsunday shall not be liable for the credibility of the information, materials, or facts posted by members on the service website.</li>
	<li>(9) Onsunday does not hold any obligations to intervene any disputes between members or member and a third party, and shall not be liable for any damages caused by it.</li>
	<li>(10) Onsunday shall not be responsible for any loss or damages caused using free services for users.</li>
	<li>(11) Onsunday shall not guarantee the rights of use for information registered over 2 ~ 3 months.</li>
</ul>

<h4>Article 23 (Jurisdiction)</h4>

<p>Any lawsuit to which the Company is a party shall, if brought in connection with a dispute arising between Members or between the Company and any Member, be submitted to the competent court having jurisdiction over the place where the head office of the Company is located.</p>

<h4>Article 24 (Others)</h4>

<ul>
	<li>1. The Company may, if necessary, change or suspend certain Services (or part thereof) temporarily or permanently by providing advance notice on the homepage of its website.</li>
	<li>2. Neither the Company nor Members shall transfer any rights and obligations under the T&amp;C to a third party without the express consent of the other party.</li>
	<li>3. All agreements, memoranda of understanding, notices and other instruments additionally executed between the parties and any and all notices to Members by the Company by posting on Onsunday pursuant to changes in the Company&rsquo;s policies, enactment and amendment of laws and regulations, public announcements and guidelines of the authorities, and the like, shall constitute part of the T&amp;C.</li>
</ul>

<p>The T&amp;C shall become effective as of March 16, 2012.</p>
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
