<?php

/**
 * Model Class
 *
 * @package		ConfigSystem
 * @subpackage	classes
 * @category	Libraries
 * @author		Apolinário Ernesto
 * @date_create 15-02-2021		
 */

class Modelo_Gets_Sets
{
    public function __get($property)
    {
        if (!property_exists($this, $property)) {
            throw new \Error("A Propriedade {$property} Não Existe");
        }

        return $this->{$property};
    }

    public function __set($property, $value)
    {
        $this->{$property} = $value;
    }
}

// 0040 0000 6277 7511 1010 6