<div class="img-text <?= $extraClass ?? null ?>">
    <?php if(isset($img)): ?>
        <div class="img-text__img">
            <img class="img-text__img__content" src="<?= $this->Frontend->image($img->path); ?>" alt="<?= $img->title; ?>">
            <?php if(isset($aide) && $aide): ?>
                <img class="img-text__aide" src="img/AIDE Banner.png" alt="AIDE Banner">
            <?php endif ?>
        </div>
    <?php endif ?>
    <div class="img-text__text">
        <div class="img-text__text__mini-title"><?= $miniTitle ?? null ?></div>
        <h1><?= $title ?? null ?></h1>
        <?= $text ?? null ?>
    </div>
</div>