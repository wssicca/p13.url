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
 * The fragment is an optional part separated from the front parts by a 
 * hash ("#"). It holds additional identifying information that provides 
 * direction to a secondary resource, e.g., a section heading (in an article) 
 * identified by the remainder of the URI. When the primary resource is an 
 * HTML document, the fragment is often an id attribute of a specific element 
 * and web browsers will make sure this element is visible.
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url\parts
 * @package p13\url\parts
 */
class Fragment extends AbstractPart
{
    
}
