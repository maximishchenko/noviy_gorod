<?php

namespace common\models;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\LinkPager;

class NoWrapLinkPager extends LinkPager{

    /**
       * Renders a page button.
       * You may override this method to customize the generation of page buttons.
       * @param string $label the text label for the button
       * @param int $page the page number
       * @param string $class the CSS class for the page button.
       * @param bool $disabled whether this page button is disabled
       * @param bool $active whether this page button is active
       * @return string the rendering result
       */
    protected function renderPageButton($label, $page, $class, $disabled, $active)
    {
        $options = $this->linkOptions;
        Html::addCssClass($options, empty($class) ? $this->pageCssClass : $class);
  
        if ($active) {
            Html::addCssClass($options, $this->activePageCssClass);
        }
        if ($disabled) {
            Html::addCssClass($options, $this->disabledPageCssClass);
            $disabledItemOptions = $this->disabledListItemSubTagOptions;
            $tag = ArrayHelper::remove($disabledItemOptions, 'tag', 'span');
  
            return Html::tag($tag, $label, $options);
        }
        $linkOptions = $this->linkOptions;
        $linkOptions['data-page'] = $page;
  
        return Html::a($label, $this->pagination->createUrl($page), $options);
    }
}