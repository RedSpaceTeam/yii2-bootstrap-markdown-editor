<?php
/**
 * @author Alexander Smirnov <smirnoff.kz@gmail.com>
 */

namespace redspace\markdown;


use yii\bootstrap\BootstrapPluginAsset;

class BootstrapMarkdownEditorAsset extends BaseAssetBundle
{
    public $css = [
        'css/bootstrap-markdown.min.css',
    ];


    public $js = [
        'js/bootstrap-markdown.js'
    ];

    public $depends = [
        BootstrapPluginAsset::class,
    ];
}