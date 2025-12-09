<?php

class TextInput
{
    private $value = "";
    
    public function add($text) {
        $this->value .= $text;
    }

    public function getValue() : string {
        return $this->value;
    }
}

class NumericInput extends TextInput
{
    #[\Override]
    public function add($text) {
        if (is_numeric($text)) {
            parent::add($text);
        }
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();