<?php

// ==================== colors =============================
$primaryColor = "#aa8434";
$secondryColor = "#030235";
$footerBg = "#000";
$footerExtraBg = "rgba(196, 30, 73, 0.2)";
$white = "#FFFFFF";

// ========== heading-text-color ==========
$headingBlack = '#030235';

// =========== paregraph-text-color ==========
$lightGray = "#4D4C61";
$ofwhiteColor = "rgba(255, 255, 255, 0.7)";

// =========== nav-hover-color ==============
$navHoverColor = "#aa8434";

// ============ banner-color ===========
$firstBgColor = "#FFE9E4";
$secondBgColor = "rgba(187 187 187 / 10%)";

// ============== card-color ============
$cardColor = "#3E8DC5";
$cardTextColor = "#031B61";

// ============== modern-card-color ==============
$modernCardColor = "#A05500";

// ============== practical-card-color ==============
$practicalCardColor = "#035B3E";

// ============= border-color =================
$borderColor = "#C5CCD4";

// =========== light-border-color ==========
$lightBorderColor = "rgba(245, 81, 43, 0.4)";

// ============== card-border ===============
$cardBorder = "#E7DCDA";

// ============= shop-cart-page-colors ============
$cartTheadBg = "#FFF0ED";
$cartTheadText = "#030235";
$cartTdText1 = "#030235";
$cartTdText2 = "#414549";
$cartTdText3 = "#aa8434";
$cartCounterBorder = "#FFCEC2";
$cartCounterBg = "#fff";
$cartIcon = "#aa8434";
$proceedCheckoutBtnBg = "#aa8434";
$proceedCheckoutBtnText = "#fff";

// ================= checkout-process-color ===========
$accordianhHeadBg = "#FFF0ED";
$accordianBg = "#fff";
$accordianBorder = "#FFCEC2";
$accordianHeadText = "#0F053F";
$accordianIcon = "#F92672";
$accordianContentText1 = "#0F053F";
$accordianContentText2 = "#555261";
$accordianStar = "#FF1D1D";

/* -------modal-popup-color---- */
$modalBg =  "rgba(17, 64, 90, 0.9)";
$modalText1 = "#294695";
$modalText2 = "#030235";
$modalText3 = "#4D4C61";
$continueBtnBg = "#aa8434";
$continuebtntext = "#fff";
$closeBtn = "#aa8434";


/* ------myaccount-css--- */
$myaccoutnTabBg = "linear-gradient(43.01deg, #FFE9F1 19.04%, rgba(255, 233, 241, 0.28) 69.77%);;";
$myaccoutntabborder = "#FFCEC2";
$myaccoutntabtext = "#4D4C61";
$myaccoutntabactivebg = "#aa8434";
$myaccoutntabactiveborder = "#aa8434";
$myaccoutntablabeltext = "#030235";
$myaccoutntabinputbg = "#FFFFFF";
$myaccoutntabinputborder = "#aa8434";

$categoryheader = "#FFF0ED";

/*---------- pagination ----------*/
$pageborder = "#E7DCDA";
$nextpage = "#FDDCD5";

$commonborder = "rgba(196, 30, 73, 0.2)";
$supportivecolor = "#FFF0ED";

$bannerbgextra = "#aa8434";
$aboutboxbg = "#aa8434";


/* ----our-offer-color--- */
$offer1primarytext = "#F92672";
$offer1secondarytext = "#0F053F";
$offer1btn = "#0F053F";

$offer2primarytext = "#7749BE";
$offer2secondarytext = "#7C0580";
$offer2btn = "#7749BE";


$new_svg_color = "#FFE9E4";


if ($_SERVER['SERVER_NAME'] == 'kishoricreation.launchestore.com' ||  $_SERVER['SERVER_NAME'] == 'www.kishoricreation.launchestore.com') {

        $primaryColor = "#aa8434";
        $secondaryColor = "#1A1A1A";
        $lightColor =  "#fff";
        $borderColor = "#aa8434";
        $borderColor2 = "#aa8434";
        $lightPrimary = "#ff774b";
        $headerBackground = "#000";
        $navbarColor = "#fff";
        $cartBtnBackground = "#aa8434";
        $cartBtnColor = "#fff";
        $loginBtnBackground = "#aa8434";
        $loginBtnColor = "#fff";
        $loginBtnborder = "#aa8434";
        $logoWidth = "200px";
        $abtImgWidth = "350px";
        $hvrClr = "#1A1A1A";
        $cartNum =  "#000";
        $categoryColor = "#000";
        $categoryActiveBg = "#fff";
        $categoryActiveColor = "#fff";
    } 
?>


<style>
    :root {

        /*============================================== fonts ================================================*/
        /*====== PublicSans-font ========*/
        --PublicSans-Black: 'PublicSans-Black';
        --PublicSans-Bold: 'PublicSans-Bold';
        --PublicSans-SemiBold: 'PublicSans-SemiBold';
        --PublicSans-ExtraBold: 'PublicSans-ExtraBold';
        --PublicSans-Regular: 'PublicSans-Regular';
        --PublicSans-Medium: 'PublicSans-Medium';
        --PublicSans-Light: 'PublicSans-Light';

        /*======== Damion-regular-font =======*/
        --Damion-regular: 'Damion, cursive ';

        /*================================================= colors ==============================================*/
        --primary-color: <?= $primaryColor ?>;
        --secondary-color: <?= $secondryColor ?>;
        --footer-bg: <?= $footerBg ?>;
        --footer-extra-bg: <?= $footerExtraBg ?>;
        --white: <?= $white ?>;

        /*========== heading-text-color ==========*/
        --heading-black: <?= $headingBlack ?>;
        --headerBackground : <?= $headerBackground ?>;
        --navbarColor : <?= $navbarColor ?>;
        --cartBtnBackground : <?= $cartBtnBackground ?>;
        --logoWidth :<?= $logoWidth?>

        /*=========== paregraph-text-color ==========*/
        --light-gray: <?= $lightGray ?>;
        --ofwhite-color: <?= $ofwhiteColor ?>;

        /*=========== nav-hover-color ==============*/
        --nav-hover-color: <?= $navHoverColor ?>;

        /*============ banner-color ===========*/
        --first-bg-color: <?= $firstBgColor ?>;
        --second-bg-color: <?= $secondBgColor ?>;

        /*============== card-color ============*/
        --card-color: <?= $cardColor ?>;
        --card-text-color: <? $cardTextColor ?>;

        /*============== modern-card-color ==============*/
        --modern-card-color: <?= $modernCardColor ?>;

        /*============== practical-card-color ==============*/
        --practical-card-color: <?= $practicalCardColor ?>;

        /* =========== border-color ======= */
        --border-color: <?= $borderColor ?>;

        /* ======== light-border-color ======== */
        --light-border-color: <?= $LightBorderColor ?>;

        /* ======== card-border  ============ */
        --card-border: <?= $cardBorder ?>;

        /* ---shop-cart-page-colors--- */
        --cart-thead-bg: <?= $cartTheadBg ?>;
        --cart-thead-text<?= $cartTheadText ?>;
        --cart-td-text-1: <?= $cartTdText1 ?>;
        --cart-td-text-2: <?= $cartTdText2 ?>;
        --cart-td-text-3: <?= $cartTdText3 ?>;
        --cart-counter-border: <?= $cartCounterBorder ?>;
        --cart-counter-bg: <?= $cartCounterBg ?>;
        --cart-icon: <?= $cartIcon ?>;
        --proceed-checkout-btn-bg: <?= $proceedCheckoutBtnBg ?>;
        --proceed-checkout-btn-text: <?= $proceedCheckoutBtnText ?>;

        /* ----------------checkout-process-color----- */
        --accordian-head-bg: <?= $accordianhHeadBg ?>;
        --accordian-bg: <?= $accordianBg ?>;
        --accordian-border: <?= $accordianBorder ?>;
        --accordian-head-text: <?= $accordianHeadText ?>;
        --accordian-icon: <?= $accordianIcon ?>;
        --accordian-content-text-1: <?= $accordianContentText1 ?>;
        --accordian-content-text-2: <?= $accordianContentText2 ?>;
        --accordian-star: <?= $accordianStar ?>;


        /* -------modal-popup-color---- */
        --modal-bg: <?= $modalBg ?>;
        --modal-text-1: <?= $modalText1 ?>;
        --modal-text-2: <?= $modalText2 ?>;
        --modal-text-3: <?= $modalText3 ?>;
        --continue-btn-bg: <?= $continueBtnBg ?>;
        --continue-btn-text: <?= $continuebtntext  ?>;
        --close-btn: <?= $closeBtn ?>;


        /* ------myaccount-css--- */
        --myaccoutn-tab-bg: <?= $myaccoutnTabBg ?>;
        --myaccoutn-tab-border: <?= $myaccoutntabborder ?>;
        --myaccoutn-tab-text: <?= $myaccoutntabtext ?>;
        --myaccoutn-tab-active-bg: <?= $myaccoutntabactivebg ?>;
        --myaccoutn-tab-active-border: <?= $myaccoutntabactiveborder ?>;
        --myaccoutn-tab-label-text: <?= $myaccoutntablabeltext ?>;
        --myaccoutn-tab-input-bg: <?= $myaccoutntabinputbg ?>;
        --myaccoutn-tab-input-border: <?= $myaccoutntabinputborder ?>;

        --category-header: <?= $categoryheader ?>;

        /*---------- pagination ----------*/
        --page-border: <?= $pageborder ?>;
        --next-page: <?= $nextpage ?>;

        --common-border: <?= $commonborder ?>;
        --supportive-color: <?= $supportivecolor ?>;

        --banner-bg-extra: <?= $bannerbgextra ?>;
        --about-box-bg: <?= $aboutboxbg ?>;


        /* ----our-offer-color--- */
        --offer-1-primary-text: <?= $offer1primarytex ?>;
        --offer-1-secondary-text: <?= $offer1secondarytext ?>;
        --offer-1-btn: <?= $offer1btn ?>;

        --offer-2-primary-text: <?= $offer2primarytext ?>;
        --offer-2-secondary-text: <?= $offer2secondarytext ?>;
        --offer-2-btn: <?= $offer2btn ?>;


        --new-svg-color: <?= $new_svg_color ?>;

    }
</style>