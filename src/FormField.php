<?php


interface FormField
{
    public function getName(): string;

    public function getType(): \Html\InputFieldType;

    public function display(): string;
}