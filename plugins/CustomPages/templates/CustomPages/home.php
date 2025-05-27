<div class="home">
    <div class="home__top">

        <!-- PRESENTAZIONE -->
        <div class="home__top__presentation">
            <h1><?= $item->string_1 ?></h1>
            <img src="<?= $this->Frontend->image($images['image-1']['path']) ?>" data-image="roberta-home" alt="<?= $images['image-1']['title'] ?>">
            <h1><?= $item->string_2 ?></h1>
            <img src="img/AIDE Banner.png" alt="Aide banner" data-image="aide-home">
        </div>

        <!-- TEXT BOX -->
        <?= $this->element('text-box', [
            'title' => $item->string_3,
            'text' => $item->text_1,
            'url' => '#',
            'button' => 'chi sono',
            'extraClass' => 'text-box--white text-box--text'
        ]); ?>
    </div>
</div>