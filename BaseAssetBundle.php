<?php
/**
 * @author Alexander Smirnov <alexander@smirnoff.kz>
 * @copyright (2018) Red Space Team <info@redspace.pro>
 */

namespace redspace\markdown;

use const DIRECTORY_SEPARATOR;
use yii\web\AssetBundle;

class BaseAssetBundle extends AssetBundle
{
    public $sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets';
}