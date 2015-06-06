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

use p13\url\parts\hierarchical\Authority;
use p13\url\parts\hierarchical\Path;

/**
 * The hierarchical part of the URI is intended to hold identification 
 * information hierarchical in nature. If this part begins with a double 
 * forward slash ("//"), it is followed by an authority part and a path. 
 * If the hierarchical part doesn't begin with ("//") it contains only a path.
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url\parts
 * @package p13\url\parts
 */
class HierarchicalPart extends AbstractPart
{

    /**
     *
     * @var hierarchical\Authority
     */
    public $authority;

    /**
     *
     * @var hierarchical\Path
     */
    public $path;

    public function __construct()
    {
        $this->authority = new Authority();
        $this->path = new Path();
    }

    /**
     * Retorna uma string no formato user:password@host:port/path
     * @return string
     */
    public function __toString()
    {
        return $this->authority . $this->path;
    }

}
