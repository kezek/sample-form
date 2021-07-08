<?php

namespace Html;

class HtmlForm implements \Form
{
    private $action;
    private $method;
    /** @var \FormField[] */
    private $fields = [];

    public function __construct(string $action, string $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function addField(\FormField $field)
    {
        if (!array_key_exists($field->getName(), $this->fields)) {
            $this->fields[$field->getName()] = $field;
        }
    }

    public function display(): string
    {
        $html = sprintf('<form action="%s" method="%s">', $this->action, $this->method);
        foreach ($this->fields as $field) {
            $html .= $field->display();
        }
        $html .= '</form>';

        return $html;
    }

}