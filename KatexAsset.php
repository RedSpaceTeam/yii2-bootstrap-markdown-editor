<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace redspace\markdown;


/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class KatexAsset extends AssetBundle
{

    public $css = [
        'plugins/katex/katex.css',
    ];

    public $js = [
        'plugins/katex/katex.js',
    ];

}
