<?php
    $news_list = $queryBuilder->get('News.News')
    ->find()
    ->where(['News.published' => true])
    ->contain(['Preview'])
    ->all();
?>

<ul class="news-list">
    <?php foreach ($news_list as $news) { ?>
        <li>
            <a href="<?= $this->Frontend->url('/news/view/' . $news->id) ?>">
                <?= $this->element('card', [
                    'extraClass' => 'card--news',
                    'item' => $news,
                ]); ?>
            </a>
        </li>

        <!-- ELIMINARE LE ALTRE CARD A FINE PRODUZIONE -->
        <li>
            <a href="<?= $this->Frontend->url('/news/view/' . $news->id) ?>">
                <?= $this->element('card', [
                    'extraClass' => 'card--news',
                    'item' => $news,
                ]); ?>
            </a>
        </li>
        <li>
            <a href="<?= $this->Frontend->url('/news/view/' . $news->id) ?>">
                <?= $this->element('card', [
                    'extraClass' => 'card--news',
                    'item' => $news,
                ]); ?>
            </a>
        </li>
        <li>
            <a href="<?= $this->Frontend->url('/news/view/' . $news->id) ?>">
                <?= $this->element('card', [
                    'extraClass' => 'card--news',
                    'item' => $news,
                ]); ?>
            </a>
        </li>
        <li>
            <a href="<?= $this->Frontend->url('/news/view/' . $news->id) ?>">
                <?= $this->element('card', [
                    'extraClass' => 'card--news',
                    'item' => $news,
                ]); ?>
            </a>
        </li>
        <li>
            <a href="<?= $this->Frontend->url('/news/view/' . $news->id) ?>">
                <?= $this->element('card', [
                    'extraClass' => 'card--news',
                    'item' => $news,
                ]); ?>
            </a>
        </li>
    <?php } ?>
</ul>