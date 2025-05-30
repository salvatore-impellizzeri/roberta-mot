<?php 
    $this->assign('headerClass', 'mb-h');
?>

<article class="news-view">
    <?= $this->element('img-text', [
        'miniTitle' => 'News',
        'title' => $item->title,
        'extraClass' => 'img-text--ng'
    ]); ?>
    <?= $this->element('explain-block', [
        'text' => $item->text,
        'img' => $images['preview'],
        'badge' => [$item->date],
        'extraClass' => 'invert explain-block--badge'
    ]) ?>
    <?= $this->element('text-box', [
        'text' => $item->last_text,
        'extraClass' => 'text-box--white text-box--full'
    ]) ?>
    <div class="news-view__cta">
        <?= $this->element('cta', [
            'label' => 'tutte le news',
            'extraClass' => 'cta--square cta--cream',
            'icon' => 'icons/arrow-right.svg'
        ]) ?>
    </div>
</article>
