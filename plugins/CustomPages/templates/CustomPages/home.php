<?php
$family = $queryBuilder->get('Sliders.Slides')
    ->find()
    ->where([
        'Slides.published' => true,
        'Slides.slider_id' => 1
    ])
    ->all();
    $itemsFamily = [];
    foreach ($family as $accordion) {
        $itemsFamily[] = [
            'title' => $accordion->title,
            'text' => $accordion->text, 
        ];
    }
?>

<div class="home">
    <!-- TOP -->
    <div class="home__top">

        <!-- PRESENTAZIONE -->
        <div class="home__top__presentation">
            <h1><?= $item->string_1 ?></h1>
            <?php if(isset($image['image-1'])): ?>
                <img src="<?= $this->Frontend->image($images['image-1']['path']) ?>" data-image="roberta-home" alt="<?= $images['image-1']['title'] ?>">
            <?php endif ?>
            <h1><?= $item->string_2 ?? null ?></h1>
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

    <!-- INCONTRI -->
    <div class="home__meetings">
        <?= $this->element('meeting-swiper'); ?>
        <?= $this->element('cta', [
            'label' => 'tutti gli incontri',
            'url' => '#',
            'icon' => 'icons/arrow-right.svg',
            'extraClass' => 'cta--white cta--square'
        ]); ?>
    </div>

    <!-- SECOND TEXT BOX -->
    <div class="home__approach">
        <?= $this->element('text-box', [
            'title' => $item->string_4,
            'text' => $item->text_2,
            'url' => '#',
            'button' => 'il mio approccio',
            'extraClass' => 'text-box--white text-box--text'
        ]); ?>
    </div>

    <!-- ACCORDION -->
    <div class="home__accordion">
        <?= $this->element('faq', [
            'titleAccordion' => 'Approfondisci le <strong>Costellazioni Familiari</strong>',
            'items' => $itemsFamily
        ]); ?>
        <?= $this->element('cta', [
            'label' => 'costellazioni familiari',
            'url' => '#',
            'extraClass' => 'cta--square cta--white',
            'icon' => 'icons/arrow-right.svg'
        ]); ?>
    </div>

    <!-- TESTIMONIANZE -->
    <div class="home__testimonials">
        <?= $this->element('testimonials'); ?>
    </div>
</div>