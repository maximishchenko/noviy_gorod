<?php

use yii\helpers\Html;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Акции', 'url' => ['/offer']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="text-sec">
    <div class="container">
        <article> 
            <h1><?= $this->title; ?></h1>

            <br>

            <p>
                <?= Html::img($model->descriptionThumb, ['alt' => $this->title]); ?>
            </p>

            <br>

            <p>
                <strong><?= $model->preview_text; ?></strong>
            </p>
            <div class="room__btn js-open-feedback" align="center">Оставить заявку</div>
        </article>
    </div>
</section>
<section class="choose-feedback choose-feedback--inner">
    <?= $this->render('//layouts/template/form/_inline'); ?>
</section>