<?php $meetings = $queryBuilder->get('Events.Events')
    ->find()
    ->where(['Events.published' => true])
    ->contain(['Preview'])
    ->all();
?>

<div class="swiper meeting-swiper">
    <div class="meeting-swiper__text">Partecipa ad uno dei miei <strong>incontri</strong></div>
    <div class="swiper-wrapper">
        <?php foreach ($meetings as $meeting) { ?>
            <div class="swiper-slider">
                <a href="<?= $this->Frontend->url('/events/view/' . $meeting->id); ?>" class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting
                    ]); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>