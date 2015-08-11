<?php

use League\CommonMark\CommonMarkConverter;

class FormatterCommonMark extends TextFormatter
{
    private $converter;

    public function __construct()
    {
        $this->converter = new CommonMarkConverter();
    }

    public function about()
    {
        return [ 'name' => 'CommonMark' ];
    }

    public function run($string)
    {
        return trim($this->converter->convertToHtml($string));
    }
}
