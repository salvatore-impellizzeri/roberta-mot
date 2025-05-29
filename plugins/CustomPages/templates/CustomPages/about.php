<?php 
    $this->assign('headerClass', 'mb-h');

    $accordions = $queryBuilder->get('Sliders.Slides')
    ->find()
    ->where([
        'Slides.published' => true,
        'Slides.slider_id' => 2
    ])
    ->all();
    $items = [];
    foreach ($accordions as $accordion) {
        $items[] = [
            'title' => $accordion->title,
            'text' => $accordion->text, 
        ];
    }
?>

<div>
    <!-- PRESENTAZIONE -->
    <?= $this->element('img-text', [
        'img' => $images['image-2'],
        'miniTitle' => $item->string_1,
        'title' => $item->string_2,
        'text' => $item->text_1,
    ]); ?>

    <!-- CARRIERA -->
    <?= $this->element('text-box', [
        'miniTitle' => $item->string_3,
        'title' => $item->text_8,
        'extraClass' => 'text-box--cream text-box--full'
    ]); ?>

    <?= $this->element('explain-block', [
        'text' => $item->text_2,
        'img' => $images['image-3']
    ]); ?>

    <!-- COSTELLAZIONI FAMILIARI -->
    <?= $this->element('img-text', [
        'miniTitle' => $item->string_5,
        'title' => $item->string_6,
        'text' => $item->text_3,
        'img' => $images['image-4'],
        'aide' => true,
        'extraClass' => 'invert'
    ]); ?>

    <?= $this->element('text-box', [
        'title' => $item->text_4,
        'extraClass' => 'text-box--cream text-box--full'
    ]); ?>

    <!-- APPROCCIO -->
    <?= $this->element('text-box', [
        'miniTitle' => $item->string_7,
        'title' => $item->string_8,
        'text' => $item->text_9,
        'extraClass' => 'text-box--white text-box--text'
    ]); ?>

    <!-- CARDS -->
    <?php 
        $cards = [
            [
                'text' => $item->text_5 ?? null,
                'title' => 'libertà',
                'svg' => 'icons/libertà.svg'
            ],
            [
                'text' => $item->text_6 ?? null,
                'title' => 'cambiamento',
                'svg' => 'icons/cambiamento.svg'
            ],
            [
                'text' => $item->text_7 ?? null,
                'title' => 'amore',
                'svg' => 'icons/heart.svg'
            ],
        ]
    ?>
    <?= $this->element('simple-card', [
        'cards' => $cards
    ]) ?>

    <!-- ACCORDION -->
    <?= $this->element('faq', [
        'titleAccordion' => 'Mi dedico <strong>con passione</strong> agli incontri di Costellazioni Familiari e <strong>offro il mio aiuto</strong> in modo profondo',
        'items' => $items
    ]); ?>
</div>