<?php

// =============== colors ===================
$primaryColor = "#C41E49";
$secondryColor = "#FFE9E4";
$footerCg = "#294695";
$footerExtraBg = "rgba(196, 30, 73, 0.2)";
$white = " #FFFFFF";

/*========== heading-text-color ==========*/
$headingBlack = "#294695";

/*=========== paregraph-text-color ==========*/
$lightGray = "#4D4C61";
$ofwhiteColor = "rgba(255, 255, 255, 0.7)";

/*=========== nav-hover-color ==============*/
$navHoverColor = "#F5512B";

/*============ banner-color ===========*/
$firstBgcolor =  "#FFE9E4";
$secondBgColor =  "rgba(196, 30, 73, 0.1)";

/*============== card-color ============*/
$cardColor = "#3E8DC5";
$cardTextColor = "#031B61";

/*============== modern-card-color ==============*/
$modernCardColor = "#A05500";

/*============== practical-card-color ==============*/
$practicalCardColor = "#035B3E";

/* border-color */
$borderColor = "#C5CCD4";

/* ================= light-border-color ================ */
$lightBorderColor =  "rgba(245, 81, 43, 0.4)";

/* =========== card-border ============= */
$cardBorder = "#E7DCDA";

/* ---shop-cart-page-colors--- */
$cartTheadBg = "rgba(196, 30, 73, 0.1)";
$cartTheadText = "#030235";
$cartTdText1 = "#030235";
$cartTdText2 = "#414549";
$cartTdText3 = "#C41E49";
$cartCounterBorder = "#FFCEC2";
$cartCounterBg = "#fff";
$cartIcon = "#C41E49";
$proceedCheckoutBtnBg = "#C41E49";
$proceedCheckoutBtnText = "#fff";


/* ----------------checkout-process-color----- */
$accordianHeadBg = "rgba(196, 30, 73, 0.1)";
$accordianBg = "#fff";
$accordianBorder = "#C41E49";
$accordianHeadText = "#0F053F";
$accordianIcon = "#F92672";
$accordianContentText1 = "#0F053F";
$accordianContentText2 = "#555261";
$accordianStar = "#FF1D1D";


/* -------modal-popup-color---- */
$modalBg = "rgba(17, 64, 90, 0.9)";
$modalText1 = "#294695";
$modalText2 = "#030235";
$modalText3 = "#4D4C61";
$continueBtnBg = "#C41E49";
$continueBtnText = "#fff";
$closeBtn = "#C41E49";


/* ------myaccount-css--- */
$myaccoutnTabBg = "linear-gradient(43.01deg, #FFE9F1 19.04%, rgba(255, 233, 241, 0.28) 69.77%);";
$myaccoutnTabBorder = "rgba(196, 30, 73, 0.1)";
$myaccoutnTabText = "#4D4C61";
$myaccoutnTabActiveBg = "#F5512B";
$myaccoutnTabActiveBorder = "#C41E49";
$myaccoutnTabLabelText = "#030235";
$myaccoutnTabInputBg = "#FFFFFF";
$myaccoutnTabInputBorder = "#C41E49";

$categoryHeader = "rgba(196, 30, 73, 0.1)";

/*---------- pagination ----------*/
$pageBorder = "#E7DCDA";
$nextPage = "#FDDCD5";

$commonBorder = "rgba(196, 30, 73, 0.2)";
$supportiveColor = "#FFF0ED";

$bannerBgExtra = "#F5512B";
$aboutBoxBg = "#F5512B";


/* ----our-offer-color--- */
$offer1PrimaryText = "#F92672";
$offer1SecondaryText = "#0F053F";
$offer1Btn = "#0F053F";

$offer2PrimaryText = "#7749BE";
$offer2SecondaryText = "#7C0580";
$offer2Btn = "#7749BE";


// svg color //
$new_svg_color = "#F0DAC5";
?>


<style>
    :root {

        /* ======================================== fonts ======================================================= */
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

        /*=========================================== colors =====================================================*/
        --primary-color: <?= $primaryColor ?>;
        --secondry-color: <?= $secondryColor ?>;
        --footer-bg: <?= $footerCg ?>;
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
        --first-bg-color: <?= $firstBgcolor ?>;
        --second-bg-color: <?= $secondBgColor ?>;

        /*============== card-color ============*/
        --card-color: <?= $cardColor ?>;
        --card-text-color: <?= $cardTextColor ?>;

        /*============== modern-card-color ==============*/
        --modern-card-color: <?= $modernCardColor ?>;

        /*============== practical-card-color ==============*/
        --practical-card-color: <?= $practicalCardColor ?>;

        /* border-color */
        --border-color: <?= $borderColor ?>;

        /* light-border-color */
        --light-border-color: <?= $lightBorderColor ?>;

        /* card-border */
        --card-border: <?= $cardBorder ?>;

        /* ---shop-cart-page-colors--- */
        --cart-thead-bg: <?= $cartTheadBg ?>;
        --cart-thead-text: <?= $cartTheadText ?>;
        --cart-td-text-1: <?= $cartTdText1 ?>;
        --cart-td-text-2: <?= $cartTdText2 ?>;
        --cart-td-text-3: <?= $cartTdText1 ?>;
        --cart-counter-border: <?= $cartCounterBorder ?>;
        --cart-counter-bg: <?= $cartCounterBg ?>;
        --cart-icon: <?= $cartIcon ?>;
        --proceed-checkout-btn-bg: <?= $proceedCheckoutBtnBg ?>;
        --proceed-checkout-btn-text: <?= $proceedCheckoutBtnText ?>;


        /* ----------------checkout-process-color----- */
        --accordian-head-bg: <?= $accordianHeadBg ?>;
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
        --continue-btn-text: <?= $continueBtnText ?>;
        --close-btn: <?= $closeBtn ?>;


        /* ------myaccount-css--- */
        --myaccoutn-tab-bg: <?= $myaccoutnTabBg ?>;
        --myaccoutn-tab-border: <?= $myaccoutnTabBorder ?>;
        --myaccoutn-tab-text: <?= $myaccoutnTabText ?>;
        --myaccoutn-tab-active-bg: <?= $myaccoutnTabActiveBg ?>;
        --myaccoutn-tab-active-border: <?= $myaccoutnTabActiveBorder ?>;
        --myaccoutn-tab-label-text: <?= $myaccoutnTabLabelText ?>;
        --myaccoutn-tab-input-bg: <?= $myaccoutnTabInputBg ?>;
        --myaccoutn-tab-input-border: <?= $myaccoutnTabInputBorder ?>;

        --category-header: <?= $categoryHeader ?>;

        /*---------- pagination ----------*/
        --page-border: <?= $pageBorder ?>;
        --next-page: <?= $nextPage ?>;

        --common-border: <?= $commonBorder ?>;
        --supportive-color: <?= $supportiveColor ?>;

        --banner-bg-extra: <?= $bannerBgExtra ?>;
        --about-box-bg: <?= $aboutBoxBg ?>;


        /* ----our-offer-color--- */
        --offer-1-primary-text: <?= $offer1PrimaryText ?>;
        --offer-1-secondary-text: <?= $offer1SecondaryText ?>;
        --offer-1-btn: <?= $offer1Btn ?>;

        --offer-2-primary-text: <?= $offer2PrimaryText ?>;
        --offer-2-secondary-text: <?= $offer2SecondaryText ?>;
        --offer-2-btn: <?= $offer1Btn ?>;
        /* -- svg-color */
        --new-svg-color: <?= $new_svg_color ?>;

    }
</style>