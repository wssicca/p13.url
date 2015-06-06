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
 * The query is an optional part, separated by a question mark ("?"), that 
 * contains additional identification information that is not hierarchical in 
 * nature. The syntax of the query string is not well defined; however by 
 * convention it is most often a sequence of <key>=<value> pairs separated by a 
 * semicolon[1][2][3] or an ampersand. 
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url\parts
 * @package p13\url\parts
 * @link http://en.wikipedia.org/wiki/URI_scheme#Generic_syntax Sintaxe de um URI
 */
class Query extends AbstractPart
{

    /**
     * @return string
     */
    public function __toString()
    {
        if (empty($this->value)) {
            return '';
        } else if (is_array($this->value)) {
            return http_build_query($this->value);
        } else {
            return mb_ereg_match('^\\?', $this->value) === true ?
                    mb_substr($this->value, 1) :
                    $this->value;
        }
    }

    /**
     * 
     * @param mixed $value
     */
    public function setValue($value)
    {
        if (is_string($value)) {
            if (!empty($value)) {
                $queryArray = array();
                parse_str($value, $queryArray);
                parent::setValue($queryArray);
            }
        } else {
            parent::setValue($value);
        }
    }

}
