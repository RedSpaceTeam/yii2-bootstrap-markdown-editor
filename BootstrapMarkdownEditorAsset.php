<?php
/**
 * @author Alexander Smirnov <smirnoff.kz@gmail.com>
 */

namespace redspace\markdown;


use yii\bootstrap\BootstrapPluginAsset;

class BootstrapMarkdownEditorAsset extends BaseAssetBundle
{
    public $css = [
        'plugins/bootstrap-markdown/css/bootstrap-markdown.min.css',
        //'plugins/editor.md/css/editormd.min.css',
    ];


    public $js = [
        'plugins/bootstrap-markdown/js/bootstrap-markdown.js',
        'plugins/bootstrap-markdown/locale/bootstrap-markdown.ru.js',
        'plugins/flowchart.min.js',
        'js/markdown.js',
        'js/init.js',

        //'plugins/editor.md/editormd.min.js',
    ];

    public $depends = [
        BootstrapPluginAsset::class,
    ];
}