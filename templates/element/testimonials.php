<?php
$testimonials = $queryBuilder->get('Sliders.Slides')
    ->find()
    ->where([
        'Slides.published' => true,
        'Slides.slider_id' => 4
    ])
    ->all();
?>
<div class="testimonials-container">
    <div class="testimonials swiper">
        <div class="testimonials__upper">
            <div class="testimonials__upper__text">Ascolta alcune <strong>testimonianze</strong></div>
            <div class="buttons-container">
                <div class="swiper-button-prev"><?= $this->Frontend->svg('icons/arrow-left.svg'); ?></div>
                <div class="swiper-button-next"><?= $this->Frontend->svg('icons/arrow-right.svg'); ?></div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <?php foreach ($testimonials as $testimonial) { ?>
                <div class="swiper-slide">
                    <div class="testimonials__testimonial">
                        <?= $this->Frontend->svg('icons/heart.svg'); ?>
                        <?= $testimonial->text ?>
                        <div class="testimonials__name"><?= $testimonial->title ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>