<?php

/*
 * This file is part of the P13/URL package.
 * 
 * (c) Wagner Sicca <wssicca@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace p13\url\parts\hierarchical;

use p13\url\parts\AbstractPart;
use p13\url\parts\hierarchical\authority\Host;
use p13\url\parts\hierarchical\authority\Port;
use p13\url\parts\hierarchical\authority\UserInfo;

/**
 * Description of Authority
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url\parts\hierarchical
 * @package p13\url\parts\hierarchical
 * @link http://en.wikipedia.org/wiki/URI_scheme#Generic_syntax Sintaxe de uma URI
 */
class Authority extends AbstractPart
{

    /**
     *
     * @var authority\Host
     */
    public $host;

    /**
     *
     * @var authority\Port
     */
    public $port;

    /**
     *
     * @var authority\UserInfo
     */
    public $userInfo;

    public function __construct()
    {
        $this->host = new Host();
        $this->port = new Port();
        $this->userInfo = new UserInfo();
    }

    /**
     * 
     * @return string
     */
    public function __toString()
    {
        return (!empty((string) $this->userInfo) ? $this->userInfo . '@' : '') .
                $this->host .
                (!empty((string) $this->port) ? ':' . $this->port : '');
    }

}
