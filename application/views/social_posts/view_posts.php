<?php $this->load->view('header.php'); ?>
<!--main content start-->
<div id="loader"></div>
<style>
    .blurred {
        filter: blur(5px);
        position: relative;
        z-index: 2;
        /* Adjust the blur intensity as needed */
    }

    .radio-wrapper {
        display: flex;
        flex-direction: row !important;
        justify-content: space-between;
        max-width: 465px !important;
        margin: 20px 0;
    }

    .radio-wrapper .radio-box {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .radio-box label {
        margin-bottom: 0;
    }

    .radio-box input {
        width: 15px;
        height: 15px;
        margin-top: 0;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url() . 'admin/index'; ?>">Home</a> / Social Media Post</a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div id="msg">
            <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
                <div class="alert alert-success fade in">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading">View Post</header>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-12 col-lg-12 mb-4">
                                <h5 class="title"><span><?= $getPostsDetail[0]->festival_name ?> - </span><span><?= date('l d M Y', strtotime($getPostsDetail[0]->date)) ?></span></h5>

                                <div class="row">
                                    <?php
                                    foreach ($getThemePost as $key => $value) { ?>


                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-3">
                                            <div class="card-img month-card <?= ($key == 0) ? "active" : "" ?> postTheme" theme_name="<?= pathinfo($value->theme_image, PATHINFO_FILENAME) ?>">
                                                <img src="<?= base_url() . 'public/festival_post_images/' . $value->theme_image ?>" alt="india">
                                            </div>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>

                            <div class="col-lg-12 col-lg-12 mb-4">
                                <div class="input-wrapper">
                                    <div class="input-box radio-wrapper">
                                        <div class="radio-box">
                                            <label for="">All</label>
                                            <input class="form-control detail_set" type="radio" name="detail" value="all" checked>
                                        </div>
                                        <div class="radio-box">
                                            <label for="">Contact , Web Url , Social</label>
                                            <input class="form-control detail_set" type="radio" name="detail" value="contact_web_social">
                                        </div>
                                        <div class="radio-box">
                                            <label for="">Contact , Web Url</label>
                                            <input class="form-control detail_set" type="radio" name="detail" value="contact_web">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12 col-lg-12 mb-4">
                                <div class="input-wrapper">
                                    <div class="input-box">
                                        <label for="">Quotes</label>
                                        <input type="text" name="new_quotes" id="new_quotes" placeholder="type here...........">
                                        <span class="validation-message" id="quotesValidation"></span>
                                    </div>
                                    <div class="input-box">
                                        <label for="">Change Color</label>
                                        <input type="color" name="new_color" id="new_color" placeholder="#fff">
                                        <span class="validation-message" id="colorValidation"></span>
                                    </div>
                                    <div class="button-wrapper">
                                        <button type="button" id="changePost">change</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-lg-12 mb-4 Preview">
                                <h5 class="title">Preview</h5>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-4">
                                        <div class="card-img position-relative preview-img">
                                            <img id="previewPost" src="" alt="preview-img">
                                            <div class="card-overlay"></div>
                                            <div class="download-icon" id="download_post">
                                                <img src="<?= base_url() . 'public/festival_post_images/download.svg' ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="content">

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

<script>
    $(".Preview").addClass('d-none');
    var theme_name = "";
    var detail_set = "";


    $('input[type="radio"][name="detail"]').each(function() {
        if ($(this).is(':checked')) {
            detail_set = $(this).val();
        }
    });

    if ($(".postTheme").hasClass('active')) {
        theme_name = $('.postTheme').attr('theme_name');

    }

    if (detail_set != "" && theme_name != "") {

        $.ajax({
            type: "POST",
            url: "<?= base_url() . 'social_media_post/gettheme' ?>",
            data: {
                detail_set: detail_set,
                theme_name: theme_name
            },
            success: function(output) {

                $("body").toggleClass("blurred");


                $("#content").html(output);
                return false;
                html2canvas(document.querySelector('#content')).then(function(canvas) {
                    var image = canvas.toDataURL('image/png');
                    // var imgElement = document.createElement('img');
                    // imgElement.src = image;
                    $("#previewPost").attr("src", image);
                    $("#content").html("");
                    $("body").removeClass("blurred");
                    $(".Preview").removeClass('d-none');
                });

            },

        });
    }

    $(".postTheme").click(function() {


        $('.postTheme').removeClass('active');
        theme_name = $(this).attr('theme_name');


        $('input[type="radio"][name="detail"]').each(function() {
            if ($(this).is(':checked')) {
                detail_set = $(this).val();

            }
        });


        $(this).addClass('active');

        if (detail_set != "" && theme_name != "") {

            $.ajax({
                type: "POST",
                url: "<?= base_url() . 'social_media_post/gettheme' ?>",
                data: {
                    detail_set: detail_set,
                    theme_name: theme_name
                },
                success: function(output) {

                    $("body").toggleClass("blurred");


                    $("#content").html(output);

                    html2canvas(document.querySelector('#content')).then(function(canvas) {

                        var image = canvas.toDataURL('image/png');
                        // var imgElement = document.createElement('img');
                        // imgElement.src = image;
                        $("#previewPost").attr("src", image);
                        $("#content").html("");
                        $("body").removeClass("blurred");
                        $(".Preview").removeClass('d-none');
                    });
                },

            });
        }
    });



    $("input[type=radio][name=detail]").change(function() {
        detail_set = $(this).val();

        if (detail_set != "" && theme_name != "") {

            $.ajax({
                type: "POST",
                url: "<?= base_url() . 'social_media_post/gettheme' ?>",
                data: {
                    detail_set: detail_set,
                    theme_name: theme_name
                },
                success: function(output) {

                    $("body").toggleClass("blurred");


                    $("#content").html(output);

                    html2canvas(document.querySelector('#content')).then(function(canvas) {
                        var image = canvas.toDataURL('image/png');
                        // var imgElement = document.createElement('img');
                        // imgElement.src = image;
                        $("#previewPost").attr("src", image);
                        $("#content").html("");
                        $("body").removeClass("blurred");
                        $(".Preview").removeClass('d-none');
                    });

                },

            });
        }

    });


    $("#changePost").click(function() {

        var newQuotes = $("#new_quotes").val();
        var newColor = $("#new_color").val();
        var isValid = true;
        $(".validation-message").text("");
        if (newQuotes === "") {
            $("#quotesValidation").text("Please enter a quote.").addClass('text-danger');
            isValid = false;
        }
        if (newColor === "") {
            $("#colorValidation").text("Please select a color.").addClass('text-danger');
            isValid = false;
        }

        if (isValid) {

            theme_name = $(".postTheme").attr('theme_name');
            var detail_set = "";

            $('input[type="radio"][name="detail"]').each(function() {
                if ($(this).is(':checked')) {
                    detail_set = $(this).val();

                }
            });

            if (detail_set != "" && theme_name != "" && newQuotes != "" && newColor != "") {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url() . 'social_media_post/gettheme' ?>",
                    data: {
                        detail_set: detail_set,
                        theme_name: theme_name,
                        newQuotes: newQuotes,
                        newColor: newColor
                    },
                    success: function(output) {

                        $("body").toggleClass("blurred");


                        $("#content").html(output);

                        html2canvas(document.querySelector('#content')).then(function(canvas) {

                            var image = canvas.toDataURL('image/png');
                            // var imgElement = document.createElement('img');
                            // imgElement.src = image;
                            $("#previewPost").attr("src", image);
                            $("#content").html("");
                            $("body").removeClass("blurred");
                            $(".Preview").removeClass('d-none');
                        });





                    },

                });
            }
        }

    });

    $("#download_post").click(function() {
        var imageSrc = $("#previewPost").attr("src");
        var downloadLink = document.createElement("a");
        downloadLink.href = imageSrc;
        downloadLink.download = "downloaded_image.jpg"; // You can set the desired download filename here
        downloadLink.target = "_blank"; // Open in a new tab/window

        // Trigger a click on the link element
        downloadLink.click();
    });
</script>

<?php $this->load->view('footer.php'); ?>