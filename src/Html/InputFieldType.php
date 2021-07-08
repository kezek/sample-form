<?php

namespace Html;

// or extend /SplEnum , if available
final class InputFieldType
{
    const TEXT = 'text',
        TEXTAREA = 'textarea',
        CHECKBOX = 'checkbox'
    ;

    private $value;

    public function __construct(string $value)
    {
        $allowed = [self::TEXT, self::CHECKBOX, self::TEXTAREA];
        if (!\in_array($value, $allowed, true)) {
            throw new \InvalidArgumentException("Invalid value '$value' on instantiating ".static::class);
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}