<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 10.06.19
 * Time: 19:30
 */

abstract class FormElement
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @var string
     */
    private $name;
    /**
     * @var
     */
    private $label;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }


    public function __construct(string $name, string $label)
    {
        $this->name = $name;
        $this->label = $label;
    }

    abstract public function render(): string;



}