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
                <a href="<?= $this->Frontend->url('/events/view/' . $meeting->id); ?>" class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => '#',
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </a>
            </div>
             <div class="swiper-slide">
                <a href="<?= $this->Frontend->url('/events/view/' . $meeting->id); ?>" class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => '#',
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </a>
            </div>
             <div class="swiper-slide">
                <a href="<?= $this->Frontend->url('/events/view/' . $meeting->id); ?>" class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => '#',
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </a>
            </div>
             <div class="swiper-slide">
                <a href="<?= $this->Frontend->url('/events/view/' . $meeting->id); ?>" class="prodotti__item">
                    <?= $this->element('card', [
                        'extraClass' => 'card--meeting',
                        'item' => $meeting,
                        'label' => "workshop",
                        'button' => 'info',
                        'url' => '#',
                        'icon' => 'icons/arrow-right.svg'
                    ]); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>