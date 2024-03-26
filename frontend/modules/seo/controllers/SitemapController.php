<?php

namespace frontend\modules\seo\controllers;

use common\models\Status;
use frontend\controllers\BaseController;
use frontend\modules\catalog\models\Apartment;
use Yii;
use yii\web\Response;
use yii2tech\sitemap\File;


class SitemapController extends BaseController
{
    public function actionIndex()
    {
        // get content from cache:
        $content = Yii::$app->cache->get('sitemap.xml');
        if ($content === false) {
            // if no cached value exists - create an new one
            // create sitemap file in memory:
            $sitemap = new File();
            $sitemap->fileName = 'php://memory';

                    
            // write your site URLs:
            $sitemap->writeUrl(['site/index'], ['priority' => '0.9']);

            $sitemap->writeUrl(['contact'], ['priority' => '0.9']);
            $sitemap->writeUrl(['offer'], ['priority' => '0.9']);
            $sitemap->writeUrl(['/payment/mortgage'], ['priority' => '0.9']);
            $sitemap->writeUrl(['filter'], ['priority' => '0.9']);
            $sitemap->writeUrl(['gallery'], ['priority' => '0.9']);
            $sitemap->writeUrl(['parking'], ['priority' => '0.9']);
            $sitemap->writeUrl(['storage'], ['priority' => '0.9']);
            $sitemap->writeUrl(['commercial'], ['priority' => '0.9']);
            $sitemap->writeUrl(['documents'], ['priority' => '0.9']);
            $sitemap->writeUrl(['payment'], ['priority' => '0.9']);
            

            // foreach filter
            // foreach gallery

            $apartments = Apartment::find()->where([
                'status' => Status::STATUS_ACTIVE
            ])->all();
            foreach ($apartments as $apartment) {
                $sitemap->writeUrl(['filter/' . $apartment->slug], ['priority' => '0.9']);
            }
            
            // get generated content:
            $content = $sitemap->getContent();
        
            // save generated content to cache
            Yii::$app->cache->set('sitemap.xml', $content);
        }
        
        // send sitemap content to the user agent:
        $response = Yii::$app->getResponse();
        $response->format = Response::FORMAT_RAW;
        $response->getHeaders()->add('Content-Type', 'application/xml;');
        $response->content = $content;
                
        return $response;
    }
}