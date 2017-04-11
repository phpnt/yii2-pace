<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 11.04.2017
 * Time: 18:00
 */

namespace phpnt\pace;


use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class PaceCssAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@phpnt/pace';

    /**
     * @inherit
     */
    public $css = [
        'css/style.css'
    ];
}