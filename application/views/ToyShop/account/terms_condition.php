<section class="banner login-section common-banner-bg">
    <img src="<?= $this->theme_base_url ?>/assets/img/common-star-bg.png" alt="" class="common-star-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('Term & Conditions') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Term & Conditions') ?></li>
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
                <?= $term[0]->sub_title ?>
            </div>
        </div>
    </div>
</section>