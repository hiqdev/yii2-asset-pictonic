<?php

/*
 * Yii 2 asset for Pictonic
 *
 * @link      https://github.com/hiqdev/yii2-asset-pictonic
 * @package   yii2-asset-pictonic
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\assets\pictonic;

class PictonicAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hiqdev/assets/pictonic/files';

    public $css = [
        'css/pictonic.css',
    ];

/* not used
    public $js = [
        'js/pictonic.min.js',
    ];
*/
}
