<?php 
    $this->assign('headerClass', 'mb-h');
?>

<div class="family">
    <?= $this->element('img-text', [
        'miniTitle' => $item->string_1,
        'title' => $item->string_2
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
</div>