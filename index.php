<?php

spl_autoload_register(function ($className) {
    $namespace=str_replace("\\","/",__NAMESPACE__);
    $className=str_replace("\\","/",$className);
    $class= "src/".(empty($namespace)?"":$namespace."/")."{$className}.php";
    include_once($class);
});


$action = '/doStuff';
$method = 'POST';
$form = new Html\HtmlForm($action, $method);


$form->addField(new Html\InputField('nume'));
$form->addField(new Html\InputField('prenume'));
$form->addField(new Html\TextareaField('adresa'));
$form->addField(new Html\CheckboxField('termeni_si_conditii'));

echo $form->display();
