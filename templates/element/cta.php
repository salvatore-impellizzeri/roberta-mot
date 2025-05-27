<?php if (empty($label)) return; ?>

<?php if (!empty($url)) : ?>
    <a class="cta <?= $extraClass ?? '' ?>" href="<?= $url ?>">
        <?php if (!empty($icon)) : ?>
            <span class="cta__icon">
                <?= $this->Frontend->svg($icon) ?>
            </span>
        <?php endif; ?>
        <span class="cta__label">
            <?= $label ?>
        </span>
    </a>
<?php else : ?>
    <button class="cta <?= $extraClass ?? '' ?>" type="submit">
        <?php if (!empty($icon)) : ?>
            <span class="cta__icon">
                <?= $this->Frontend->svg($icon) ?>
            </span>
        <?php endif; ?>
        <span class="cta__label">
            <?= $label ?>
        </span>
    </button>
<?php endif; ?>