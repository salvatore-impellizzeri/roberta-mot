<?php 
    $this->assign('headerClass', 'mb-h');
?>

<div class="contacts">
    <?= $this->element('img-text', [
        'img' => $images['image-2'],
        'miniTitle' => $item->string_1,
        'title' => $item->string_2,
        'contacts' => true,
        'extraClass' => ''
    ]) ?>

    <!-- FORM -->
    <div class="contacts__form">
        <!-- $this->element('Contacts.contact-form', ['id' => 1])  -->
    </div>
</div>
