<?php


interface Form
{
    public function getAction(): string;

    public function getMethod(): string;

    public function addField(FormField $field);

    public function display(): string;
}