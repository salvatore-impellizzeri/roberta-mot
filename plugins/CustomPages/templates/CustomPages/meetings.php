<?php 
    $this->assign('headerClass', 'mb-h');

    $workshops = $queryBuilder->get('Events.Events')
    ->find()
    ->where(['Events.published' => true])
    ->contain(['Preview'])
    ->all();

?>

<?= $this->element('img-text', [
    'img' => $images['image-2'],
    'miniTitle' => $item->string_1,
    'title' => $item->string_2,
    'text' => $item->text_1,
    'extraClass' => 'invert'
]); ?>

<div class="hr-l"></div>

<?= $this->element('list', [
    'title_list' => 'Prossimi <strong>incontri</strong> e <strong>workshop</strong>',
    'badge' => 'workshop',
    'items' => $workshops,
    'button' => 'info'
]) ?>