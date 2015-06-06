<?php

/*
 * This file is part of the P13/URL package.
 * 
 * (c) Wagner Sicca <wssicca@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace p13\url;

use p13\url\parts\Fragment;
use p13\url\parts\HierarchicalPart;
use p13\url\parts\Query;
use p13\url\parts\Scheme;

/**
 * Description of URL
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url
 * @package p13\url
 */
class URL
{

    /**
     *
     * @var parts\Fragment
     */
    public $fragment;

    /**
     *
     * @var parts\HierarchicalPart
     */
    public $hierarchicalPart;

    /**
     *
     * @var parts\Query
     */
    public $query;

    /**
     *
     * @var parts\Scheme
     */
    public $scheme;

    public function __construct()
    {
        $this->fragment = new Fragment();
        $this->hierarchicalPart = new HierarchicalPart();
        $this->query = new Query();
        $this->scheme = new Scheme();
    }

    /**
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->scheme . ':' .
                '//' . $this->hierarchicalPart .
                ($this->query != '' ? '?' . $this->query : '' ).
                ($this->fragment != '' ? '#' . $this->fragment : '');
    }

}
