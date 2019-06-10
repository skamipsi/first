<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 10.06.19
 * Time: 19:44
 */

class InputElement extends FormElement
{

    private $type = 'text';

    public function render(): string
    {
        // TODO: Implement render() method.
        $html = sprintf('<label for="%s>%s</label>', $this->getName(), $this->getLabel());
        $html .=sprintf('<input type="%s" name="$s" id="$s">', $this->type, $this->getName(),$this->getName());

        return $html;

    }

}