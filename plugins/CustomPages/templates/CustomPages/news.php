<?php 
    $this->assign('headerClass', 'mb-h');
?>

<?= $this->element('img-text', [
    'miniTitle' => $item->string_1,
    'title' => $item->string_2
]); ?>

<div class="hr-l"></div>