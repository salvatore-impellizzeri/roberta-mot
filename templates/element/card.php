<div class="card <?= $extraClass ?? '' ?>">
    <div class="card__img">
        <?php if (strpos($extraClass, 'card--meeting') !== false) { ?>
            <div class="card__badge">
                <div class="card__badge__date"><?= $item->date ?></div>
                <div class="card__badge__hour"><?= $item->hour ?></div>
            </div>
        <?php } ?>
        <?php if($item->preview->path): ?>
            <img src="<?= $this->Frontend->resize($item->preview->path, 492 * 2, 390 * 2); ?>" alt="<?= $item->title ?>">
        <?php endif; ?>
    </div>
    <?php if (strpos($extraClass, 'card--meeting') !== false) { ?>
        <div class="card__workshop">
            <?= $this->element('badge', [
                'label' => $label,
                'extraClass' => 'badge--green'
            ]); ?>
            <div class="hr"></div>
        </div>
    <?php } else { ?>
        <div class="card__date"><?= $item->date ?></div>
    <?php } ?>
    <div class="card__title"><?= $item->title ?></div>
    <?php if(isset($button)): ?>
        <div class="cta-wrapper">
            <?= $this->element('cta', [
                'label' => $button,
                'url' => $url,
                'extraClass' => 'cta--rose cta--square',
                'icon' => $icon
            ]); ?>
        </div>
    <?php endif ?>
</div>