<?php $meetings = $queryBuilder->get('Events.Events')
    ->find()
    ->where(['Events.published' => true])
    ->contain(['Preview'])
    ->all();
?>

<div class="swiper meeting-swiper">
    <div class="meeting-swiper__text">Partecipa ad uno dei miei <strong>incontri</strong></div>
    <div class="buttons-container">
        <div class="swiper-button-prev"><?= $this->Frontend->svg('icons/arrow-left.svg'); ?></div>
        <div class="swiper-button-next"><?= $this->Frontend->svg('icons/arrow-right.svg'); ?></div>
    </div>
    <div class="swiper-wrapper">
        <?php foreach ($meetings as $meeting) { ?>
            <div class="swiper-slide">
                <div class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => $this->Frontend->url('/events/view/' . $meeting->id),
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </div>
            </div>

            <!-- ELIMINARE I LE SLIDE UNA VOLTA FINITO IL SITO -->
            <div class="swiper-slide">
                <div class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => $this->Frontend->url('/events/view/' . $meeting->id),
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => $this->Frontend->url('/events/view/' . $meeting->id),
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => $this->Frontend->url('/events/view/' . $meeting->id),
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => $this->Frontend->url('/events/view/' . $meeting->id),
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>