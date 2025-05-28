<div class="text-box <?= $extraClass ?? '' ?>">
    <h1><?= $title ?></h1>
    <div>
        <?= $text ?>
        <?php if(isset($button) && !empty($button)){ ?>
            <?= $this->element('cta', [
                'label' => $button,
                'url' => $url,
                'icon' => 'icons/arrow-right.svg',
                'extraClass' => 'cta--square cta--white',
            ]); ?>
        <?php } ?>
    </div>
</div>