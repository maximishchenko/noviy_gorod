<?php

use yii\widgets\ListView;

$this->title = 'Ход строительства';
$this->params['breadcrumbs'][] = $this->title;
?>



<section class="construction" id="pdopage">
  <div class="container">
    <h1>
      <?= $this->title; ?>
    </h1>

    <div class="construction__wrap rows">
      
      <?= ListView::widget([
              'dataProvider' => $dataProvider,
              'itemView' => '_item',
              'layout' => "{items}",
              'options' => [
                'tag' => false,
              ],
              'itemOptions' => [
                  'tag' => false,
              ],
            ]);
      ?>

    </div>
    
    <?= $this->render('_pager', ['dataProvider' => $dataProvider]); ?>

  </div>
</section>
