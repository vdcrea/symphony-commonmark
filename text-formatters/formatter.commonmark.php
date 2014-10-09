<?php

use ColinODell\CommonMark\DocParser;
use ColinODell\CommonMark\HtmlRenderer;

class FormatterCommonMark extends TextFormatter
{
    private static $parser;
    private static $renderer;

    public function __construct()
    {
        if (!self::$parser) {

            // init parser

            self::$parser = new DocParser();
        }

        if (!self::$renderer) {

            // init renderer

            self::$renderer = new HtmlRenderer();
        }
    }

    public function about()
    {
        return array('name' => 'CommonMark');
    }

    public function run($string)
    {
        // parse & render

        $string = self::$parser->parse($string);
        $string = self::$renderer->render($string);

        // return

        return $string;
    }
}
