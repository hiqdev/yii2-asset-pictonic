<?php

namespace hiqdev\assets\pictonic;

class PictonicAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hiqdev/assets/pictonic/files';

    public $css = [
        'css/pictonic.css',
    ];

    public $js = [
        'js/pictonic.min.js'
    ];
}
