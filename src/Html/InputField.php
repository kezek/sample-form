<?php

namespace Html;

class InputField extends AbstractHtmlField
{
    public function display(): string
    {
        return sprintf('<input type="%s" name="%s">', $this->getType(), $this->getName());
    }

    public function getType(): InputFieldType
    {
        return new InputFieldType(InputFieldType::TEXT);
    }
}