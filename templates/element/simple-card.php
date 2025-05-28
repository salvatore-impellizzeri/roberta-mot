<div class="simple-cards">
    <?php foreach ($cards as $card) { ?>
        <?php if($card['text'] !== null): ?>
            <div class="simple-cards__card">
                <div class="simple-cards__title">
                    <?= $card['title'] ?? null ?>
                </div>
                <?php if(isset($svg)): ?>
                    <?= $this->Frontend->svg($svg); ?>
                <?php endif ?>
                <?= $card['text'] ?? null ?>
            </div>
        <?php endif ?>
    <?php } ?>
</div>