<?php 
    $this->assign('headerClass', 'mb-h');
?>

<article class="workshop">
    <div class="workshop__upper">
        <?= $this->element('img-text', [
            'miniTitle' => 'Incontri',
            'title' => $item->title_page
        ]); ?>
        <?= $this->element('cta', [
            'label' => "partecipa all'incontro",
            'url' => '#',
            'icon' => 'icons/arrow-down.svg',
            'extraClass' => 'cta--square cta--cream'
        ]) ?>
    </div>
    <div class="workshop__infos">
        <div class="workshop__infos__badges">
            <?= $this->element('badge', [
                'label' => 'workshop',
                'extraClass' => 'badge--green',
            ]) ?>
            <?= $this->element('badge', [
                'label' => $item->date,
                'extraClass' => 'badge--white',
            ]) ?>
            <?= $this->element('badge', [
                'label' => $item->hour,
                'extraClass' => 'badge--white',
            ]) ?>
            <?= $this->element('badge', [
                'label' => $item->location,
                'extraClass' => 'badge--white',
            ]) ?>
        </div>
        <div class="hr"></div>
    </div>
    <?= $this->element('explain-block', [
        'text' => $item->text,
        'img' => $images['preview'],
        'img_container' => 'container-img-view'
    ]) ?>

    <!-- FORM -->
</article>
