<?php
$this->extend('/Admin/Common/edit');
?>

<?= $this->Form->create($item, ['type' => 'file', 'id' => 'superForm']) ?>

    <div class="tabs" data-tabs>
        <?php echo $this->element('admin/tabs-menu');?>
        <div class="tabs__content">
            <div class="tabs__tab" data-tab="edit">
                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Generali
                    </legend>
                    <?php
                    echo $this->Form->control('title', ['label' => __d('admin', 'title'), 'extraClass' => 'span-10']);
                    echo $this->Form->control('published', ['label' => __d('admin', 'published'), 'type' => 'checkbox', 'extraClass' => 'span-1']);
                    ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Presentazione
                    </legend>
                    <?php echo $this->Form->inlineEditor('string_1', ['label' => 'Titolo a sinistra', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->inlineEditor('string_2', ['label' => 'Titolo a destra', 'class' => 'span-12']); ?>
                    <?php echo $this->element('admin/uploader/image', ['scope' => 'image-1', 'title' => 'Immagine presentazione', 'width' => 602, 'height' => 751, 'mobile' => ['width' => 480, 'height' => 751]]); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Chi sono
                    </legend>
                    <?php echo $this->Form->inlineEditor('string_2', ['label' => 'Titolo', 'class' => 'span-12']); ?>
                    <?php echo $this->Form->inlineEditor('text_1', ['label' => 'Testo', 'class' => 'span-12']); ?>    
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Approccio
                    </legend>
                    <?php echo $this->Form->inlineEditor('string_3', ['label' => 'Titolo', 'class' => 'span-12']); ?>
                    <?php echo $this->Form->inlineEditor('text_2', ['label' => 'Testo', 'class' => 'span-12']); ?>    
                </fieldset>
            </div>
            <?php echo $this->element('admin/tab-seo');?>
			<?php echo $this->element('admin/tab-social');?>            
        </div>
    </div>

<?php echo $this->element('admin/save');?>

<?= $this->Form->end() ?>