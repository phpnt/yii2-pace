<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 01.04.2017
 * Time: 13:47
 */

namespace common\widgets\Pace;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class PaceAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/pace';

    /**
     * @inherit
     */ 
    public $css = [

    ];

    /**
     * @inherit
     */
    public $js = [
        'pace.min.js',
    ];

    public function init()
    {
        parent::init();
    }
}