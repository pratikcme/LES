    <!-- meta tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title><?= $this->siteTitle ?></title>
    <?php $this->load->view('MileniaFurniture/css/style.php'); ?>
    <!-- css links -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- drift -->
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/drift-basic.css' />



    <!-- owl.carousel.min -->
    <link rel="stylesheet" href="<?= $this->theme_base_url . '/assets/css/owl.carousel.min.css' ?>">

    <!-- owl.theme -->
    <link rel="stylesheet" href="<?= $this->theme_base_url . '/assets/css/owl.theme.default.min.css' ?>">

    <!-- -----responsive-table-css--- -->
    <link rel="stylesheet" href="<?= $this->theme_base_url . '/assets/css/basictable.min.css' ?>">

    <!-- style -->
    <link rel="stylesheet" href="<?= $this->theme_base_url . '/assets/css/style.css' ?>">

    <!-- animate -->
    <link rel="stylesheet" href="<?= $this->theme_base_url . '/assets/css/animate.css' ?>">

    <!-- Bootstrap datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
    <!-- <body dir="rtl" class="rtl"> -->

    <body>


        <div class="overlay"></div>
        <?php $lang = json_encode($this->lang->language);
        // dd($lang);
        ?>
        <script type="text/javascript">
            var language = <?= $lang; ?>;
        </script>

        <style>
            /* google traslater*/
            body {
                top: 0px !important;
            }

            .goog-logo-link {
                display: none !important;
            }

            .goog-te-gadget {
                color: transparent !important;
                font-size: 0 !important;
            }

            .goog-te-banner-frame.skiptranslate {
                display: none !important;
            }

            .goog-te-gadget .goog-te-combo {
                margin: 4px 0;
                /* width: 150px; */
            }

            .VIpgJd-ZVi9od-ORHb-OEVmcd.skiptranslate {
                display: none !important;
            }

            .VIpgJd-ZVi9od-l4eHX-hSRGPd {
                display: none !important;
            }

            .pac-container {
                z-index: 10000 !important;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f4f4f4;
            }

            .loader {
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }
        </style>
        <input type="hidden" id="siteCurrency" value="<?= $this->siteCurrency ?>">
        <input type="hidden" id="information" value="<?= $_SESSION['is_ecommerce'] ?>">