<section class="banner login-section common-banner-bg">
    <img src="<?= $this->theme_base_url ?>/assets/img/common-star-bg.png" alt="" class="common-star-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('Return & Refund') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Return & Refund') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="privacy-policy p-100">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $return_refund[0]->title ?></h3>
                <p> <?= $return_refund[0]->sub_title ?></p>
            </div>
        </div>
    </div>
</section>