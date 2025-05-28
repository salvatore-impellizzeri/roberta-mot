<?php 
    $this->assign('headerClass', 'mb-h');
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
</div>