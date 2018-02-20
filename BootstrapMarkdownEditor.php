<?php
/**
 * @author Alexander Smirnov <smirnoff.kz@gmail.com>
 */

namespace redspace\markdown;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class BootstrapMarkdownEditor extends InputWidget{
    public $editorOptions = [];
    public $containerOptions = [];
    private $_inline = false;

    public function init()
    {
        parent::init();

        if (array_key_exists('inline', $this->editorOptions)) {
            $this->_inline = $this->editorOptions['inline'];
            unset($this->editorOptions['inline']);
        }

        if (array_key_exists('preset', $this->editorOptions)) {
            if($this->editorOptions['preset'] == 'basic'){
                $this->presetBasic();
            }elseif($this->editorOptions['preset'] == 'standard'){
                $this->presetStandard();
            }elseif($this->editorOptions['preset'] == 'full'){
                $this->presetFull();
            }
            unset($this->editorOptions['preset']);
        }

        if($this->_inline && !isset($this->editorOptions['height']))
            $this->editorOptions['height'] = 100;

        if($this->_inline && !isset($this->containerOptions['id']))
            $this->containerOptions['id'] = $this->id.'_inline';
    }


    public function run()
    {
        BootstrapMarkdownEditorAsset::register($this->getView());

        echo Html::beginTag('div', $this->containerOptions);

        Html::addCssClass($this->options, 'markdown-editor');


        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }

        echo Html::endTag('div');

        /*
        $js = [
            'mihaildev.ckEditor.registerOnChange('.Json::encode($this->options['id']).');'
        ];

        if(isset($this->editorOptions['filebrowserUploadUrl']))
            $js[] = "mihaildev.ckEditor.registerCsrf();";

        if(!isset($this->editorOptions['on']['instanceReady']))
            $this->editorOptions['on']['instanceReady'] = new JsExpression("function( ev ){".implode(' ', $js)."}");

        if($this->_inline){
            $JavaScript = "CKEDITOR.inline(";
            $JavaScript .= Json::encode($this->options['id']);
            $JavaScript .= empty($this->editorOptions) ? '' : ', '.Json::encode($this->editorOptions);
            $JavaScript .= ");";

            $this->getView()->registerJs($JavaScript, View::POS_END);
            $this->getView()->registerCss('#'.$this->containerOptions['id'].', #'.$this->containerOptions['id'].' .cke_textarea_inline{height: '.$this->editorOptions['height'].'px;}');
        }else{
            $JavaScript = "CKEDITOR.replace(";
            $JavaScript .= Json::encode($this->options['id']);
            $JavaScript .= empty($this->editorOptions) ? '' : ', '.Json::encode($this->editorOptions);
            $JavaScript .= ");";

            $this->getView()->registerJs($JavaScript, View::POS_END);
        }
        */
    }

}