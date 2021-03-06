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

            본 계약은 한국어로 작성되었습니다. 본 계약의 번역본과 한국어본이 상충될 경우에는 한국어본을 우선으로 합니다.<br />
<br />
권리 및 책임에 관한 정책이 권리 및 책임에 관한 정책 (이하 &#39;정책&#39;)은 Onsunday에 기반을 두고 있으며 Onsunday상에서 교류하는 회원 및 비회원들의 활동에 적용됩니다. Onsunday를 이용하면 본 정책에 동의하는 것으로 간주됩니다.<br />
<br />
권리 및 책임에 관한 정책<br />
<br />
<br />
권리 및 책임에 관한 정책이 권리 및 책임에 관한 정책 (이하 &#39;정책&#39;)은 Onsunday에 기반을 두고 있으며 Onsunday상에서 교류하는 회원 및 비회원들의 활동에 적용됩니다. Onsunday를 이용하면 본 정책에 동의하는 것으로 간주됩니다.<br />
<br />
<br />
<br />
[제 1 장 총칙]<br />
<br />
<br />
제 1 조 (목적)<br />
<br />
<br />
온선데이 이용약관(이하 &#39;약관&#39;)은 온선데이 웹사이트(이하 &#39;온선데이&#39;)가 이용자(이하 &#39;회원&#39;)에게 공동으로 제공하는 온선데이 사이트의 가입조건 및 이용에 관한 제반 사항과 기타 필요한 사항을 구체적으로 규정함을 목적으로 합니다.<br />
<br />
<br />
제2조 (약관의 명시, 효력과 개정)<br />
<br />
1. 회사는 이 약관의 내용을 회사의 상호, 영업소 소재지, 대표자의 성명, 사업자등록번호, 연락처(전화, 팩스, 전자우편주소 등)등과 함께 회원이 확인할 수 있도록 &quot;온썬데이&quot; 초기 서비스 화면(전면)에 게시합니다.<br />
<br />
2. 회사는 약관의규제에관한법률, 전자거래기본법, 전자서명법, 정보통신망이용촉진및정보보호등에관한법률, 전자상거래등에서의소비자보호에관한법률, 전자금융거래법 등 관련법을 위배하지 않는 범위에서 본 약관을 개정할 수 있습니다.<br />
<br />
3. 회사가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행 약관과 함께 초기화면에 그 적용일자 14일 이전부터 적용일자 전일까지 공지합니다.<br />
<br />
<br />
제 3조 약관 외 준칙<br />
<br />
<br />
본 약관에서 정하지 아니한 사항과 본 약관의 해석에 관하여는 약관의 규제에 관한 법률, 전기통신기본법, 전기통신사업법, 정보통신윤리위원회심의규정, 정보통신 윤리강령, 프로그램 보호법 및 기타 관련 법령의 규정에 의합니다.<br />
<br />
<br />
<br />
제 4 조 (용어의 정의)<br />
<br />
이 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br />
<br />
(1) &#39;회원&#39;, &#39;이용자&#39; 라 함은 서비스를 제공받기 위하여 온선데이와 이용 계약을 체결하고 회원 ID(아이디)를 부여 받은 자를 말합니다.<br />
<br />
(2) &#39;이용계약&#39;이라 함은 서비스를 제공받기 위하여 온선데이와 체결하는 계약을 말합니다.<br />
<br />
(3) &#39;회원 ID(아이디)&#39; 라 함은 회원의 식별과 회원의 서비스 이용을 위하여 회원이 선정하고 온선데이에서 부여하는 문자와 숫자의 조합을 말합니다.<br />
<br />
(4) 비밀번호(Password): 회원의 동일성 확인과 회원의 권익 및 비밀보호를 위하여 회원 스스로가 설정하여 회사에 등록한 영문과 숫자의 조합을 말합니다.<br />
<br />
(5) 탈퇴(해지)라 함은 온선데이 또는 회원이 이용계약을 해약하는 것을 말합니다.<br />
<br />
<br />
제 5 조 (대리행위의 부인)<br />
<br />
회사는 효율적인 서비스를 위한 시스템 운영 및 관리 책임만을 부담하며, 재화 또는 용역의 거래와 관련하여 구매자 또는 판매자를 대리하지 아니하고, 회원 사이에 성립된 거래 및 회원이 제공하고 등록한 정보에 대해서는 해당 회원이 그에 대한 직접적인 책임을 부담하여야 합니다.<br />
<br />
<br />
<br />
제 6 조 (보증의 부인)<br />
<br />
회사는 회사가 제공하는 시스템을 통하여 이루어지는 구매자와 판매자 간의 거래와 관련하여 판매의사 또는 구매의사의 존부 및 진정성, 등록물품의 품질, 완전성, 안정성, 적법성 및 타인의 권리에 대한 비침해성, 구매자 또는 판매자가 입력하는 정보 및 그 정보를 통하여 링크된 URL에 게재된 자료의 진실성 또는 적법성 등 일체에 대하여 보증하지 아니하며, 이와 관련한 일체의 위험과 책임은 해당 회원이 전적으로 부담합니다.<br />
<br />
<br />
[제 2 장 서비스 이용계약의 체결]<br />
<br />
제 7 조 (서비스 이용계약의 성립)<br />
<br />
<br />
(1) 이용계약은 이용고객의 본 이용약관 내용에 대한 동의와 이용신청에 대하여 회사가 이용 승낙을 함으로써 성립합니다.<br />
<br />
(2) 본 이용약관에 대한 동의는 이용신청 당시 해당 온선데이 사이트의 &#39;동의&#39; 버튼을 누름으로써 이 약관에 동의하는 것으로 간주됩니다.<br />
<br />
<br />
<br />
<br />
제 8 조 (이용 신청의 승낙과 제한)<br />
<br />
<br />
(1) 이용신청의 처리는 신청순서에 의하며, 회원가입의 성립시기는 회사의 승낙이 회원에게 도달한 시점으로 합니다.<br />
<br />
(2) 회사는 다음과 같은 사유가 발생한 경우 이용신청에 대한 승낙을 거부하거나 유보할 수 있습니다.<br />
<br />
1) 회사의 실명확인절차에서 실명가입신청이 아님이 확인된 경우<br />
<br />
2) 이미 가입된 회원과 이름 및 주민등록번호(또는 사업자등록번호)가 동일한 경우<br />
<br />
3) 회사에 의하여 이용계약이 해지된 날로부터 2개월 이내에 재이용신청을 하는 경우<br />
<br />
4) 회사로부터 회원자격 정지 조치 등을 받은 회원이 그 조치기간 중에 이용계약을 임의 해지하고 재이용신청을 하는 경우<br />
<br />
5) 설비에 여유가 없거나 기술상 지장이 있는 경우<br />
<br />
6) 기타 이 약관에 위배되거나 위법 또는 부당한 이용신청임이 확인된 경우 및 회사가 합리적인 판단에 의하여 필요하다고 인정하는 경우<br />
<br />
<br />
(3) 회원가입은 만 14세 이상의 개인이 할 수 있으며, 이용신청자는 실명으로 가입신청을 해야 하며, 실명이 아니거나 타인의 정보를 도용하는 경우 서비스이용이 제한되거나 관련 법령에 의거 처벌받을 수 있습니다.<br />
<br />
<br />
<br />
제 9 조 (개인정보의 변경, 보호)<br />
<br />
1. 회원은 이용신청 시 허위의 정보를 제공하여서는 아니 되며, 기재한 사항이 변경되었을 경우에는 즉시 변경사항을 최신의 정보로 수정하여야 합니다. 단, 이름 ,ID, 주민등록번호 등은 수정할 수 없으나 법령에 의한 경우는 예외적으로 수정 가능합니다.<br />
<br />
2. 수정하지 않은 정보로 인하여 발생하는 손해는 당해 회원이 전적으로 부담하며, 회사는 이에 대하여 아무런 책임을 지지 않습니다.<br />
<br />
3. 회사는 이용계약을 위하여 회원이 제공한 정보를 회사 서비스 운영을 위한 목적 이외의 용도로 사용하거나 이용자의 동의 없이 제3자에게 제공하지 않습니다. 단, 다음 각 호의 경우에는 예외로 합니다.<br />
<br />
1) 법령에 근거하여 회원정보의 이용과 제3자에 대한 정보제공을 허용하고 있는 경우<br />
<br />
2) 배송업무에 필요한 최소한의 회원정보를 알려 주는 경우<br />
<br />
3) 기타 회사의 약관 및 정책에 따라 이용자의 동의를 구한 경우<br />
<br />
4. 회사는 회원의 개인정보를 보호하기 위해 &quot;개인정보취급방침&quot;을 수립하고 개인정보 보호 책임자를 지정하여 이를 게시하고 운영합니다.<br />
<br />
<br />
[제 3 장 계약 당사자의 의무]<br />
<br />
제 10 조 (온선데이의 의무)<br />
<br />
1. 온선데이는 법령과 본 약관에 금하는 행위를 하지 않으며, 지속적이고 안정적인 서비스를 제공하는데 최선을 다하여야 합니다.<br />
<br />
2. 온선데이는 회원 및 이용자의 의견과 민원을 적절한 절차를 거쳐 처리하여야 합니다.<br />
<br />
3. 온선데이는 회원 및 이용자가 안전하게 서비스 받을 수 있도록 개인정보 보호에 관한 규정을 준수하여야 합니다.<br />
<br />
4. 온선데이는 이용계약의 체결, 계약사항 변경 및 해지 등 이용자와의 계약 관련 절차, 내용 등에 있어 이용자에게 편의를 제공하여야 합니다.<br />
<br />
<br />
제 11 조 (이용자의 의무)<br />
<br />
<br />
1. 회원 또는 이용자는 본 약관에서 규정하는 사항과 서비스 이용안내를 준수하여야 하며, 기타 온선데이의 업무에 방해되는 행위를 하여서는 안 됩니다.<br />
<br />
2. 회원 또는 이용자는 온선데이의 사전 승낙 없이 서비스를 이용한 영업행위를 할 수 없으며, 약관에 위배된 영업활동으로 발생한 결과에 대하여 온선데이는 책임지지 않습니다. 또한 이와 같은 영업행위로 온선데이가 손해를 입은 경우, 온선데이에 대하여 손해배상 의무를 집니다.<br />
<br />
3. 다음 각 호의 1에 해당하는 행위를 하여서는 안 되며, 문제가 발생한 경우 법적인 책임을 질 수 있습니다.<br />
<br />
① 서비스를 이용하여 얻은 정보를 회사의 사전 승낙 없이 복사, 복제, 변경, 번역, 출판, 방송, 전송, 전시 기타의 방법으로 사용하거나 타인에게 제공하는 행위<br />
② 서비스와 게시판에 음란물을 게재 또는 음란 사이트를 링크하거나 유포 등 사회질서를 해치는 행위<br />
③ 타인의 명예를 훼손하거나 모욕하는 행위, 타인의 특허, 상표, 영업비밀, 저작권, 기타 지적재산권 등의 권리를 침해하는 내용을 게시, 게재, 전자우편 또는 기타의 방법으로 전송하는 행위<br />
④ 해킹 또는 컴퓨터 바이러스의 유포 행위<br />
⑤ 타인의 의사에 반하여 광고성 정보 등 일정한 내용을 게시, 게재, 전자우편 또는 기타 의 방법으로 지속적으로 전송하는 행위<br />
⑥ 다른 회원의 ID를 부정 사용하는 행위<br />
⑦ 다른 회원의 개인 정보를 수집, 저장하는 행위<br />
⑧ 온선데이 직원, 동호회 대표(시삽) 등을 포함한 타인을 사칭하는 행위<br />
⑨ 서비스를 통해 전송된 콘텐츠의 발신인을 위조하는 행위<br />
⑩ 서비스에 게시된 정보의 변경<br />
⑪ 서비스를 통한 스토킹(stalking), 기타 타인을 괴롭히는 행위<br />
⑫ 서비스의 운영에 지장을 주거나 줄 우려가 있는 일체의 행위, 기타 관계 법령에 위배되는 행위<br />
<br />
<br />
<br />
[제 4 장 서비스 이용]<br />
<br />
제12조 (서비스 이용료)<br />
<br />
<br />
서비스의 이용은 기본적으로 무료입니다. 회사는 회원 간의 자유로운 전자상거래에 있어서 필요로 하는 각종 서비스를 제공하고 회사의 내부 정책에 따라 그에 대한 이용료(서비스 이용료)를 부과할 수 있습니다.<br />
<br />
<br />
제 13 조 (온선데이 포인트 서비스)<br />
<br />
<br />
온선데이에서 제공하는 서비스 중 일부는 온선데이 포인트가 있어야 사용할 수 있습니다.<br />
<br />
(1) 온선데이 포인트 충전(구매)를 하기 위해서 회원은 회사에서 정한 특정 결제수단 중 회원이 원하는 결제 수단을 선택하여 충전(구매)할 수 있습니다.<br />
<br />
(2) 온선데이 포인트 충전 정책<br />
<br />
- 온선데이 포인트를 충전(구매)하는 방법, 환불 등은 회사가 정하는 캐쉬 정책 이용약관에 따릅니다.<br />
- 온선데이 포인트 충전 서비스를 이용하려는 회원은 포인트정책을 따라야 합니다.<br />
<br />
<br />
제 14 조 (서비스 기간과 중단)<br />
<br />
<br />
1. 본 약관에 따른 서비스 기간은 서비스 신청일로부터 이용계약의 해지 시까지 입니다.<br />
<br />
2. 회사는 컴퓨터 등 정보통신설비의 보수, 점검, 교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다. 이 경우 서비스 일시 중단 사실과 그 사유를 사이트 초기화면에 통지합니다.<br />
<br />
3. 회사는 천재지변 또는 이에 준하는 불가항력으로 인하여 회사 서비스를 제공할 수 없는 경우에는 서비스의 제공을 제한하거나 일시 중단할 수 있습니다.<br />
<br />
<br />
<br />
제 15 조 (아이디 및 비밀번호 관리)<br />
<br />
1. 아이디(ID) 및 비밀번호에 대한 관리책임은 회원에게 있으며, 회원은 어떠한 경우에도 본인의 아이디(ID) 또는 비밀번호를 타인에게 양도하거나 대여할 수 없습니다.<br />
<br />
2. 회사의 귀책사유 없이 아이디(ID) 또는 비밀번호의 유출, 양도, 대여로 인하여 발생하는 손실이나 손해에 대하여는 이용자 본인이 그에 대한 책임을 부담합니다.<br />
<br />
3. 회원은 아이디(ID) 또는 비밀번호를 도난당하거나 제3자가 무단으로 이를 사용하고 있음을 인지한 경우, 이를 즉시 회사에 통보하여야 하고 회사는 이에 대한 신속한 처리를 위하여 최선의 노력을 다하여야 합니다.<br />
<br />
<br />
제 16 조 (저작물책임)<br />
<br />
<br />
1. 회사는 서비스를 이용함에 있어 저작권자의 저작권 보호를 위한 정책을 수립하여 운영하며 회원은 회사의 저작권 정책을 준수하여야 합니다.<br />
<br />
2. 회원이 회사가 제공하는 구매서비스를 이용하면서 작성한 쇼핑웹진, 상품평, Q&amp;A 등 각종 게시물의 저작권은 이를 작성한 회원 본인에게 있으며, 해당 게시물이 타인의 저작권을 침해하는 경우 그에 대한 책임은 회원 본인이 부담합니다.<br />
<br />
3. 회원은 온선데이 내에서 자신의 저작권이 침해된 경우 회사가 운영하는 권리침해신고제도를 이용하여 자신의 정당한 권리를 보호받을 수 있습니다.<br />
<br />
4. 회사는 게시물이 다음 각 호에 해당하는 경우 사전 통보 없이 해당 게시물을 삭제하거나 게시자에 대하여 특정서비스의 이용제한, 이용계약의 해지 등의 조치를 할 수 있습니다.<br />
<br />
1) 대한민국의 법령을 위반하는 내용을 포함하는 경우<br />
2) 관계법령에 의거 판매가 금지된 불법제품 또는 음란물을 게시, 광고하는 경우<br />
3) 허위 또는 과대광고의 내용을 포함하는 경우<br />
4) 타인의 권리나 명예, 신용 기타 정당한 이익을 침해하는 경우<br />
5) 타 사이트의 링크를 게시하는 경우<br />
6) 정보통신기기의 오작동을 일으킬 수 있는 악성코드나 데이터를 포함하는 경우<br />
7) 사회 공공질서나 미풍양속에 위배되는 경우<br />
8) 회사가 제공하는 온선데이 서비스의 원활한 진행을 방해하는 것으로 판단되는 경우<br />
<br />
<br />
제 17조 (정보의 제공 및 광고의 게재)<br />
<br />
<br />
1. 회사는 서비스의 운용과 관련하여 서비스 화면 등 회사에서 지정하는 위치에 광고 등을 게재할 수 있습니다.<br />
2. 회원은 회사에서 제공하는 홈페이지 배너 광고에 대해 임의의 삭제, 비방과 기타 광고를 방해하는 행위를 할 수 없습니다.<br />
3. 회사는 서비스 상에 게재되어 있는 광고주의 판촉활동에 회원이 참여하거나 거래의 결과로서 발생하는 모든 손실 또는 손해에 대해 책임을 지지 않습니다.<br />
<br />
<br />
제 18 조 (서비스 이용 제한)<br />
<br />
(1) 회사는 게시물이 다음 각 호에 해당하는 경우 사전 통보 없이 해당 게시물을 삭제하거나 게시자에 대하여 특정서비스의 이용제한, 이용계약의 해지 등의 조치를 할 수 있습니다.<br />
<br />
① 본 서비스 약관에 위배되거나 불법, 음란, 저속하다고 판단되는 게시물을 게시한 경우<br />
② 다른 회원 또는 제 3자를 비방하거나 프라이버시를 침해하거나, 중상 모략으로 명예를 손상시키는 내용인 경우<br />
③ 서비스의 안정적인 운영에 지장을 주거나 줄 우려가 있는 경우<br />
④ 범죄행위에 관련된다고 판단되는 내용인 경우<br />
⑤ 공사의 지적재산권, 타인의 지적재산권 등 기타 권리를 침해하는 내용인 경우<br />
⑥ 특정제품의 선전등 기타 상용목적으로 게시되는 내용인 경우<br />
⑦ 입력된 정보를 무단 개조하는 경우<br />
⑧ 타 회원의 이용자 ID, 비밀번호를 도용하는 경우<br />
⑨ 온선데이가 규정한 게시판의 원칙 및 목적에 맞지 않는 사이버 시위 및 도배 목적 등 성격에 부합하지 않는 경우<br />
⑩ 온선데이 에서 규정한 게시기간을 초과한 경우<br />
⑪ 사적인 정치적 판단이나, 종교적 견해의 내용으로 온선데이의 서비스 성격에 부합하지 않는다고 판단하는 경우<br />
⑫ 공공질서 및 미풍양속에 위반되는 내용인 경우<br />
⑬ 기타 관계 법령에 위반된다고 판단되는 경우<br />
<br />
<br />
<br />
제 19 조 (적립포인트 및 사이버 자산)<br />
<br />
(1) 온선데이의 서비스를 이용하면서 생성 또는 취득 되는 포인트 등의 사이버 자산에 대한 일체의 소유권은 온선데이에 있습니다.<br />
<br />
(2) 온선데이는 서비스 운영의 필요상 회원 사이버 자산의 일부 또는 전부를 조정할 수 있습니다. 단, 이 경우에는 그 사유 및 내용을 회원에게 공지합니다.<br />
<br />
<br />
[제 5 장 계약 해지]<br />
<br />
<br />
제 20 조 (이용계약의 종료)<br />
<br />
<br />
1. 회원의 해지<br />
<br />
1) 회원은 언제든지 회사에게 해지의사를 통지함으로써 이용계약을 해지할 수 있습니다. 다만, 회원은 해지의사를 통지하기 최소한 7일 전에 모든 거래를 완결시키는데 필요한 조치를 취하여야만 합니다.<br />
<br />
2) 전호의 기간 내에 회원이 발한 의사표시로 인해 발생한 불이익에 대한 책임은 회원 본인이 부담하여야 하며, 이용계약이 종료되면 회사는 회원에게 부가적으로 제공한 각종 혜택을 회수할 수 있습니다.<br />
<br />
3) 회원의 의사로 이용계약을 해지 한 후, 추후 재이용을 희망할 경우에는 재이용 의사가 회사에 통지되고, 이에 대한 회사의 승낙이 있는 경우에만 서비스 재이용이 가능합니다.<br />
<br />
<br />
2. 회사의 해지<br />
<br />
1) 회사는 다음과 같은 사유가 발생하거나 확인된 경우 이용계약을 해지할 수 있습니다<br />
① 다른 회원의 권리나 명예, 신용 기타 정당한 이익을 침해하거나 대한민국 법령 또는 공서양속에 위배되는 행위를 한 경우<br />
② 회사가 제공하는 서비스의 원활한 진행을 방해하는 행위를 하거나 시도한 경우<br />
③ 제8조 제2항의 승낙거부사유가 있음이 확인된 경우<br />
④ 기타 회사가 합리적인 판단에 기하여 서비스의 제공을 거부할 필요가 있다고 인정할 경우<br />
<br />
2) 회사가 해지를 하는 경우 회사는 회원에게 e-mail, 전화, 기타의 방법을 통하여 해지사유를 밝혀 해지의사를 통지합니다. 이용계약은 회사의 해지의사를 회원에게 통지한 시점에 종료됩니다.<br />
<br />
3) 본 항에 의하여 회사가 이용계약을 해지하더라도, 해지 이전에 이미 체결된 매매계약의 완결과 관련해서는 이 약관이 계속 적용됩니다.<br />
<br />
4) 본 항에서 정한 바에 따라 이용계약이 종료될 시에는 회사는 회원에게 부가적으로 제공한 각종 혜택을 회수할 수 있습니다.<br />
<br />
5) 본 항에서 정한 바에 따라 이용계약이 종료된 경우에는, 회원의 재이용신청에 대하여 회사는 이에 대한 승낙을 거절할 수 있습니다.<br />
<br />
<br />
[제 6 장 분쟁 조정 및 기타 사항]<br />
<br />
<br />
제 21조 (손해배상)<br />
<br />
1. 온선데이는 무료로 제공되는 서비스와 관련하여 회원이나 이용자에게 어떠한 손해가 발생하더라도 회사가 고의로 행한 범죄행위를 제외하고는 이에 대하여 일체의 책임을 부담하지 않습니다.<br />
<br />
2. 온선데이는 제휴사가 취급하는 상품 또는 용역에 대하여 책임을 지지 않습니다.<br />
<br />
분쟁 조정 및 기타 사항<br />
<br />
<br />
제 22 조 (면책 조항)<br />
(1) 온선데이는 천재지변, 전쟁 및 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.<br />
(2) 온선데이는 기간통신 사업자가 전기통신 서비스를 중지하거나 정상적으로 제공하지 아니하여 손해가 발생한 경우 책임이 면제됩니다.<br />
(3) 온선데이는 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대한 책임이 면제됩니다.<br />
(4) 온선데이는 회원의 귀책사유로 인한 서비스 이용의 장애 또는 손해에 대하여 책임을 지지 않습니다.<br />
(5) 온선데이는 회원의 컴퓨터 오류에 의해 손해가 발생한 경우, 또는 회원이 신상정보 및 전자우편 주소를 부실하게 기재하여 손해가 발생한 경우 책임을 지지 않습니다.<br />
(6) 회원이 서비스의 이용과 관련하여 기대하는 이익이나 손해에 관하여 책임을 부담하지 않습니다.<br />
(7) 온선데이는 회원이 서비스를 이용하면서 얻은 자료로 인한 손해에 대하여 책임을 지지 않습니다. 또한 온선데이는 회원이 서비스를 이용하며 타 회원으로 인해 입게 되는 정신적 피해에 대하여 보상할 책임을 지지 않습니다.<br />
(8) 온선데이는 회원이 서비스에 게재한 각종 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 대하여 책임을 지지 않습니다.<br />
(9) 온선데이는 회원 상호간 및 회원와 제 3자 상호 간에 서비스를 매개로 발생한 분쟁에 대해 개입할 의무가 없으며, 이로 인한 손해를 배상할 책임도 없습니다.<br />
(10) 온선데이에서 회원에게 무료로 제공하는 서비스의 이용과 관련해서는 어떠한 손해도 책임을 지지 않습니다.<br />
(11) 온선데이는 등록 후 2~3개월 경과한 자료에 대해서는 사용권을 보장하지 않습니다.<br />
(9) 온선데이는 회원 상호간 및 회원와 제 3자 상호 간에 서비스를 매개로 발생한 분쟁에 대해 개입할 의무가 없으며, 이로 인한 손해를 배상할 책임도 없습니다.<br />
(10) 온선데이에서 회원에게 무료로 제공하는 서비스의 이용과 관련해서는 어떠한 손해도 책임을 지지 않습니다.<br />
(11) 온선데이는 등록 후 2~3개월 경과한 자료에 대해서는 사용권을 보장하지 않습니다.<br />
<br />
<br />
제23조 (관할법원)<br />
<br />
<br />
이 약관과 회사와 회원 간의 서비스 이용계약 및 회원 상호간의 분쟁에 대해 회사를 당사자로 하는 소송이 제기될 경우에는 회사의 본사 소재지를 관할하는 법원을 합의관할법원으로 정합니다.<br />
<br />
제24조 (기타조항)<br />
<br />
1. 회사는 필요한 경우 특정 서비스(혹은 그 일부)를 회사 홈페이지를 통하여 미리 공지한 후, 일시적 또는 영구적으로 수정하거나 중단할 수 있습니다.<br />
2. 회사와 회원은 상대방의 명백한 동의 없이 이 약관상의 권리와 의무를 제3자에게 양도 할 수 없습니다.<br />
3. 이 약관과 관련하여 당사자 간의 합의에 의하여 추가로 작성된 계약서, 협정서, 통보서 등과 회사의 정책변경, 법령의 제정&middot;개정 또는 공공기관의 고시&middot;지침 등에 의하여 회사가 G마켓을 통해 회원에게 공지하는 내용도 본 약관의 일부를 구성합니다.<br />
<br />
(시행일) 본 약관은 2012년 3월 16일 부터 적용됩니다.

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
