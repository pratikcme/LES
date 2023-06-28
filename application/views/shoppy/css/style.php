<?php

// ==================== colors =============================
$primaryColor = "#F5512B";
$secondryColor = "#030235";
$footerBg = "#294695";
$footerExtraBg = "rgba(196, 30, 73, 0.2)";
$white = "#FFFFFF";

// ========== heading-text-color ==========
$headingBlack = '#030235';

// =========== paregraph-text-color ==========
$lightGray = "#4D4C61";
$ofwhiteColor = "rgba(255, 255, 255, 0.7)";

// =========== nav-hover-color ==============
$navHoverColor = "#F5512B";

// ============ banner-color ===========
$firstBgColor = "#FFE9E4";
$secondBgColor = "rgba(196, 30, 73, 0.1)";

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
$cartTdText3 = "#F5512B";
$cartCounterBorder = "#FFCEC2";
$cartCounterBg = "#fff";
$cartIcon = "#F5512B";
$proceedCheckoutBtnBg = "#F5512B";
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
$continueBtnBg = "#F5512B";
$continuebtntext = "#fff";
$closeBtn = "#F5512B";


/* ------myaccount-css--- */
$myaccoutnTabBg = "linear-gradient(43.01deg, #FFE9F1 19.04%, rgba(255, 233, 241, 0.28) 69.77%);;";
$myaccoutntabborder = "#FFCEC2";
$myaccoutntabtext = "#4D4C61";
$myaccoutntabactivebg = "#F5512B";
$myaccoutntabactiveborder = "#F5512B";
$myaccoutntablabeltext = "#030235";
$myaccoutntabinputbg = "#FFFFFF";
$myaccoutntabinputborder = "#F5512B";

$categoryheader = "#FFF0ED";

/*---------- pagination ----------*/
$pageborder = "#E7DCDA";
$nextpage = "#FDDCD5";

$commonborder = "rgba(196, 30, 73, 0.2)";
$supportivecolor = "#FFF0ED";

$bannerbgextra = "#F5512B";
$aboutboxbg = "#F5512B";


/* ----our-offer-color--- */
$offer1primarytext = "#F92672";
$offer1secondarytext = "#0F053F";
$offer1btn = "#0F053F";

$offer2primarytext = "#7749BE";
$offer2secondarytext = "#7C0580";
$offer2btn = "#7749BE";


$new_svg_color = "#FFE9E4";
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