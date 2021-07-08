<?php

namespace Html;

class TextareaField extends AbstractHtmlField
{
    public function display(): string
    {
        return sprintf('<textarea name="%s"></textarea>', $this->getName());
    }

    public function getType(): InputFieldType
    {
        return new InputFieldType(InputFieldType::TEXTAREA);
    }
}