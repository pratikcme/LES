<section class="hero-section banner common-banner-bg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1><?= $this->lang->line('Privacy Policy') ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'home' ?>"><?= $this->lang->line('home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Privacy Policy') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="privay-policy p-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?= $privacy[0]->sub_title ?>
            </div>
        </div>
    </div>
</section>