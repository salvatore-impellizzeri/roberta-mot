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
                    <?php echo $this->Form->control('string_1', ['label' => 'Mini titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->inlineEditor('string_2', ['label' => 'Titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->editor('text_1', ['label' => 'Testo', 'class' => 'span-12']); ?>
                    <?php echo $this->element('admin/uploader/image', ['scope' => 'image-2', 'title' => 'Immagine presentazione', 'width' => 599, 'height' => 727]); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Carriera
                    </legend>
                    <?php echo $this->Form->control('string_3', ['label' => 'Mini titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->editor('text_8', ['label' => 'Titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->editor('text_2', ['label' => 'Testo', 'class' => 'span-12']); ?>
                    <?php echo $this->element('admin/uploader/image', ['scope' => 'image-3', 'title' => 'Immagine Carriera', 'width' => 1305, 'height' => 526, 'mobile' => ['width' => 480, 'height' => 751]]); ?>
                </fieldset>
                
                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Costellazioni Familiari
                    </legend>
                    <?php echo $this->Form->control('string_5', ['label' => 'Mini titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->inlineEditor('string_6', ['label' => 'Titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->editor('text_3', ['label' => 'Testo', 'class' => 'span-12']); ?>
                    <?php echo $this->element('admin/uploader/image', ['scope' => 'image-4', 'title' => 'Immagine Costellazioni Familiari', 'width' => 619, 'height' => 787]); ?>
                    <?php echo $this->Form->editor('text_4', ['label' => 'Testo nel box', 'class' => 'span-12']); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Approccio
                    </legend>
                    <?php echo $this->Form->control('string_7', ['label' => 'Mini titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->inlineEditor('string_8', ['label' => 'Titolo', 'class' => 'span-12']); ?> 
                    <?php echo $this->Form->editor('text_4', ['label' => 'Testo', 'class' => 'span-12']); ?>
                </fieldset>

                <fieldset class="input-group">
                    <legend class="input-group__info">
                        Tre box
                    </legend>
                    <?php echo $this->Form->editor('text_5', ['label' => 'Testo primo box', 'class' => 'span-4']); ?> 
                    <?php echo $this->Form->editor('text_6', ['label' => 'Testo secondo box', 'class' => 'span-4']); ?> 
                    <?php echo $this->Form->editor('text_7', ['label' => 'Testo terzo box', 'class' => 'span-4']); ?>
                </fieldset>
            </div>
            <?php echo $this->element('admin/tab-seo');?>
			<?php echo $this->element('admin/tab-social');?>            
        </div>
    </div>

<?php echo $this->element('admin/save');?>

<?= $this->Form->end() ?>