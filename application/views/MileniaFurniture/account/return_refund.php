<section class="hero-section common-banner-bg privacy-banner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
                <h1>Return & Refund</h1>
                <nav aria-label="breadcrumb" class="justify-content-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home"><?= $this->lang->line('home') ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->lang->line('Return & Refund') ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="privay-policy section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-3"><?= $return_refund[0]->title ?></h2>
                <?= $return_refund[0]->sub_title ?>
            </div>
        </div>
    </div>
</section>