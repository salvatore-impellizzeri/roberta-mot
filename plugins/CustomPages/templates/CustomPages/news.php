<?php 
    $this->assign('headerClass', 'mb-h');
?>
<div class="news">
    <?= $this->element('img-text', [
        'miniTitle' => $item->string_1,
        'title' => $item->string_2,
        'extraClass' => 'img-text--ng'
    ]); ?>
    
    <div class="hr-l"></div>

    <?= $this->element('news-list') ?>
</div>