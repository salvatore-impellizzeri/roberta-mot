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
            <hr>
        </div>
    <?php } else { ?>
        <div class="card__date"><?= $item->date ?></div>
    <?php } ?>
</div>