<div class="list">
    <div class="list__title">
        <?= $title_list ?? null ?>
    </div>

    <!-- LISTA -->
    <ul>
        <?php foreach ($items as $item) { ?>
            <li>
                <img src="<?= $this->Frontend->image($item->preview->path); ?>" alt="<?= $item->title ?>">
                <div class="list__content">
                    <div class="list__badge">
                        <?= $this->element('badge', [
                            'label' => $badge,
                            'extraClass' => 'badge--green'
                        ]); ?>
                        <div class="hr"></div>
                    </div>
                    <h3><?= $item->title ?? null ?></h3>
                    <div class="list__info">
                        <div><?= $item->date ?? null ?></div>
                        <div><?= $item->hour ?? null ?></div>
                        <div><?= $item->location ?? null ?></div>
                    </div>
                    <div class="list__excerpt">
                        <?= $item->excerpt ?? null ?>
                        <?= $this->element('cta', [
                            'label' => $button,
                            'url' => $this->Frontend->url("/$url/view/{$item->id}"),
                            'icon' => 'icons/arrow-right.svg',
                            'extraClass' => 'cta--rose cta--square',
                        ]) ?>
                    </div>
                </div>
            </li>

            <!-- ELIMINARE LE SLIDE UNA VOLTA FINITO IL SITO -->
            <li>
                <img src="<?= $this->Frontend->image($item->preview->path); ?>" alt="<?= $item->title ?>">
                <div class="list__content">
                    <div class="list__badge">
                        <?= $this->element('badge', [
                            'label' => $badge,
                            'extraClass' => 'badge--green'
                        ]); ?>
                        <div class="hr"></div>
                    </div>
                    <h3><?= $item->title ?? null ?></h3>
                    <div class="list__info">
                        <div><?= $item->date ?? null ?></div>
                        <div><?= $item->hour ?? null ?></div>
                        <div><?= $item->location ?? null ?></div>
                    </div>
                    <div class="list__excerpt">
                        <?= $item->excerpt ?? null ?>
                        <?= $this->element('cta', [
                            'label' => $button,
                            'url' => "#",
                            'icon' => 'icons/arrow-right.svg',
                            'extraClass' => 'cta--rose cta--square',
                        ]) ?>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= $this->Frontend->image($item->preview->path); ?>" alt="<?= $item->title ?>">
                <div class="list__content">
                    <div class="list__badge">
                        <?= $this->element('badge', [
                            'label' => $badge,
                            'extraClass' => 'badge--green'
                        ]); ?>
                        <div class="hr"></div>
                    </div>
                    <h3><?= $item->title ?? null ?></h3>
                    <div class="list__info">
                        <div><?= $item->date ?? null ?></div>
                        <div><?= $item->hour ?? null ?></div>
                        <div><?= $item->location ?? null ?></div>
                    </div>
                    <div class="list__excerpt">
                        <?= $item->excerpt ?? null ?>
                        <?= $this->element('cta', [
                            'label' => $button,
                            'url' => "#",
                            'icon' => 'icons/arrow-right.svg',
                            'extraClass' => 'cta--rose cta--square',
                        ]) ?>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= $this->Frontend->image($item->preview->path); ?>" alt="<?= $item->title ?>">
                <div class="list__content">
                    <div class="list__badge">
                        <?= $this->element('badge', [
                            'label' => $badge,
                            'extraClass' => 'badge--green'
                        ]); ?>
                        <div class="hr"></div>
                    </div>
                    <h3><?= $item->title ?? null ?></h3>
                    <div class="list__info">
                        <div><?= $item->date ?? null ?></div>
                        <div><?= $item->hour ?? null ?></div>
                        <div><?= $item->location ?? null ?></div>
                    </div>
                    <div class="list__excerpt">
                        <?= $item->excerpt ?? null ?>
                        <?= $this->element('cta', [
                            'label' => $button,
                            'url' => "#",
                            'icon' => 'icons/arrow-right.svg',
                            'extraClass' => 'cta--rose cta--square',
                        ]) ?>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>