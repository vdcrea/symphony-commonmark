<?php

require_once EXTENSIONS . '/commonmark/vendor/autoload.php';

class FormatterCommonMark extends TextFormatter
{
    private $converter;

    public function __construct()
    {
        if (!$this->converter) {

            $this->converter = new League\CommonMark\CommonMarkConverter();
        }
    }

    public function about()
    {
        return array('name' => 'CommonMark');
    }

    public function run($string)
    {
        return trim($this->converter->convertToHtml($string));
    }
}
