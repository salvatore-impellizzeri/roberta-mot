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
        <?php if($contacts): ?>
            <div class="img-text__contacts">
                <span>Compila la <strong>form sottostante</strong> o contattami nelle <strong>modalità qui indicate</strong>. Ti aspetto!</span>
                <div class="img-text__contacts__buttons">
                    <div class="img-text__contacts__badge-info">
                        <?= $this->element('badge', [
                            'label' => $this->element('snippet', ['id' => 15]),
                            'extraClass' => 'badge--green'
                        ]) ?>
                        <?= $this->element('badge', [
                            'label' => $this->element('snippet', ['id' => 16]),
                            'extraClass' => 'badge--green'
                        ]) ?>
                    </div>
                    <div class="img-text__contacts__socials">
                        <a href="">
                            <?= $this->element('badge', [
                                'label' => 'rm_costellazioni',
                                'extraClass' => 'badge--view'
                            ]) ?>
                        </a>
                        <a href="">
                            <?= $this->element('badge', [
                                'label' => 'roberta mott - costellazioni',
                                'extraClass' => 'badge--view'
                            ]) ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>