<div class="accordion-container">
    <div class="accordion-container__title">
        <?= $titleAccordion ?? '' ?>
    </div>
    <div class="accordion-wrapper">
       <?php foreach ($items as $index => $item): ?>
            <?php $num = str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT); ?>
            <div class="accordion" data-accordion>
                <div class="accordion__toggler" data-accordion-toggler>
                    <h3 class="accordion__title">
                        <span class="accordion__number"><?= $num ?></span>
                        <?= $item['title'] ?>
                    </h3>
                    <span class="accordion__toggler__indicator"></span>
                </div>
                <div class="accordion__content" data-accordion-content>
                    <div class="accordion__paragraph"><?= $item['text'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
