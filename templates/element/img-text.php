<div class="img-text <?= $extraClass ?? null ?>">
    <?php if(isset($img)): ?>
        <img src="<?= $this->Frontend->image($img->path); ?>" alt="<?= $img->title; ?>">
    <?php endif ?>
    <div class="img-text__text">
        <div class="img-text__text__mini-title"><?= $miniTitle ?? null ?></div>
        <h1><?= $title ?? null ?></h1>
        <?= $text ?? null ?>
    </div>
</div>