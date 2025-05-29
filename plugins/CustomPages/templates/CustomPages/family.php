<?php 
    $this->assign('headerClass', 'mb-h');

    $family = $queryBuilder->get('Sliders.Slides')
    ->find()
    ->where([
        'Slides.published' => true,
        'Slides.slider_id' => 3
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

<div class="family">
    <?= $this->element('img-text', [
        'miniTitle' => $item->string_1,
        'title' => $item->string_2,
        'extraClass' => 'family__img-text'
    ]); ?>

    <div class="family__images">
        <?php foreach ($images['family-1'] as $img) { ?>
            <img src="<?= $this->Frontend->image($img->path) ?>" alt="<?= $img->title ?>">
        <?php } ?>
    </div>

    <?= $this->element('text-box', [
        'title' => $item->string_3,
        'text' => $item->text_1,
        'extraClass' => 'text-box--cream text-box--text'
    ]) ?>

    <?php 
        $cards = [
            [
                'text' => $item->text_4 ?? null,
                'title' => $item->string_4 ?? null,
                'svg' => 'icons/conflitto.svg'
            ],
            [
                'text' => $item->text_5 ?? null,
                'title' => $item->string_5 ?? null,
                'svg' => 'icons/rappresentazione.svg'
            ],
            [
                'text' => $item->text_6 ?? null,
                'title' => $item->string_6 ?? null,
                'svg' => 'icons/comprensione.svg'
            ],
        ]
    ?>
    <?= $this->element('simple-card', [
        'cards' => $cards
    ]) ?>

    <?= $this->element('img-text', [
        'img' => $images['family_approach'],
        'miniTitle' => $item->string_7,
        'title' => $item->string_8,
        'text' => $item->text_7,
        'extraClass' => 'invert'
    ]) ?>

    <?= $this->element('text-box', [
        'title' => $item->text_8,
        'extraClass' => 'text-box--white text-box--full'
    ]); ?>

    <?= $this->element('faq', [
        'titleAccordion' => 'Alcune <strong>domande frequenti</strong> sulle Costellazioni Familiari',
        'items' => $itemsFamily
    ]); ?>

    <!-- FORM -->
</div>