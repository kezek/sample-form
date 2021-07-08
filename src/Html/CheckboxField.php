<?php

namespace Html;

class CheckboxField extends InputField
{
    public function getType(): InputFieldType
    {
        return new InputFieldType(InputFieldType::CHECKBOX);
    }
}