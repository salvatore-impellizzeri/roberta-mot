<div class="explain-block <?= $extraClass ?? null ?>">
    <?= $text ?? null ?>
    <div class="explain-block__img <?= $img_container ?? null ?>">
        <img src="<?= $this->Frontend->image($img->path); ?>" alt="<?= $img->title ?>">
        <?php if(isset($badge)): ?>
            <div class="explain-block__info">
                <?php foreach ($badge as $single_badge) { ?>
                    <?=  $this->element('badge', [
                        'label' => $single_badge,
                        'extraClass' => 'badge--view'
                    ]) ?>
                <?php } ?>
            </div>
        <?php endif ?>
    </div>
</div>