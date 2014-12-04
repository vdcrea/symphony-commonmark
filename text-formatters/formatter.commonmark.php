<?php

use ColinODell\CommonMark\CommonMarkConverter;

class FormatterCommonMark extends TextFormatter
{
    private $converter;

    public function __construct()
    {
        if (!$this->converter) {

            $this->converter = new CommonMarkConverter();
        }
    }

    public function about()
    {
        return array('name' => 'CommonMark');
    }

    public function run($string)
    {
        return $this->converter->convertToHtml($string);
    }
}
