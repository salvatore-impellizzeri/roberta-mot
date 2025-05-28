<div class="text-box <?= $extraClass ?? null ?>">
    <?php if(isset($miniTitle)): ?>
        <div class="text-box__mini"><?= $miniTitle ?></div>
    <?php endif ?>
    <?php if(strpos($extraClass, 'text-box--full')): ?>
        <?= $title ?? null ?>
    <div>
    <?php else: ?>
        <h1><?= $title ?? null ?></h1>
    <?php endif ?>
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