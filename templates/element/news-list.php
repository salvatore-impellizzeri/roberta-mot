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
            <?= $this->element('card', [
                'extraClass' => 'card--news',
                'item' => $news,
                'url' => $this->Frontend->url('/news/view/' . $news->id),
            ]); ?>
        </li>

        <!-- ELIMINARE LE ALTRE CARD A FINE PRODUZIONE -->
        <li>
            <?= $this->element('card', [
                'extraClass' => 'card--news',
                'item' => $news,
                'url' => $this->Frontend->url('/news/view/' . $news->id),
            ]); ?>
        </li>
        <li>
            <?= $this->element('card', [
                'extraClass' => 'card--news',
                'item' => $news,
                'url' => $this->Frontend->url('/news/view/' . $news->id),
            ]); ?>
        </li>
        <li>
            <?= $this->element('card', [
                'extraClass' => 'card--news',
                'item' => $news,
                'url' => $this->Frontend->url('/news/view/' . $news->id),
            ]); ?>
        </li>
        <li>
            <?= $this->element('card', [
                'extraClass' => 'card--news',
                'item' => $news,
                'url' => $this->Frontend->url('/news/view/' . $news->id),
            ]); ?>
        </li>
        <li>
            <?= $this->element('card', [
                'extraClass' => 'card--news',
                'item' => $news,
                'url' => $this->Frontend->url('/news/view/' . $news->id),
            ]); ?>
        </li>
    <?php } ?>
</ul>