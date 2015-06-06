<?php

/*
 * This file is part of the P13/URL package.
 * 
 * (c) Wagner Sicca <wssicca@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace p13\url\parts;

/**
 * Description of AbstractURLPart
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url\parts
 * @package p13\url\parts
 * @abstract
 */
abstract class AbstractPart
{

    /**
     * String que representa a parte na URL
     * @var string
     */
    protected $value;

    /**
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->value ? : '';
    }

    /**
     * 
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}
