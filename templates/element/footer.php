<footer class="footer">

    <div class="footer__infos">
        <div class="footer__social">
            <div class="footer__type">Social</div>
            <?= $this->cell('Menu.Menu', [7]) ?>
        </div>

        <div class="footer__contacts">
            <div class="footer__type">Contatti</div>
            <ul class="menu">
                <li class="menu_item">
                    <?= $this->element('snippet', ['id' => 15])?>
                </li>
                <li class="menu_item">
                    <?= $this->element('snippet', ['id' => 16])?>
                </li>
            </ul>
        </div>
        <div class="footer__legal">
            <ul class="menu">
                <li><?= $this->Frontend->seolink(__d('policies', 'Privacy policy'), '/policies/view/1'); ?></li>
                <li><?= $this->Frontend->seolink(__d('policies', 'Cookie policy'), '/policies/view/2'); ?></li>
                <li><span id="cookie_reload"><?php echo __d('policies', 'manage cookies'); ?></span></li>
            </ul>
        </div>
    </div>
    
    <a href="/" class="footer__logo">
        <?= $this->Frontend->svg('logo-footer.svg') ?>
    </a>

    <div class="footer__menu">
        <div>
            <div class="footer__type">menu</div>
            <?= $this->cell('Menu.Menu', [8]) ?>
        </div>
    </div>
<!-- 
    <div class="footer__credits">
        <a href="https://www.webmotion.it" title="Web Agency Verona">Credits</a>
    </div> -->
</footer>
