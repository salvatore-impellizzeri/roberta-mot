<div class="explain-block <?= $extraClass ?? null ?>">
    <?= $text ?? null ?>
    <div class="explain-bloc__img">
        <img src="<?= $this->Frontend->image($img->path); ?>" alt="<?= $img->title ?>">
    </div>
</div>