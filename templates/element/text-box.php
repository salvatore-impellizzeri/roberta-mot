<div class="text-box <?= $extraClass ?? null ?>">
    <div>
        <?php if(isset($miniTitle)): ?>
            <div class="text-box__mini"><?= $miniTitle ?></div>
        <?php endif ?>
        <?php if(strpos($extraClass, 'text-box--full')): ?>
            <?= $title ?? null ?>
        <?php else: ?>
            <h1><?= $title ?? null ?></h1>
        <?php endif ?>
    </div>
    <div class="text-box__text">
        <?= $text ?? null ?>
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