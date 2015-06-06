<?php

/*
 * This file is part of the P13/URL package.
 * 
 * (c) Wagner Sicca <wssicca@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace p13\url\parts\hierarchical\authority;

use p13\url\parts\AbstractPart;
use p13\url\parts\hierarchical\authority\userInfo\Password;
use p13\url\parts\hierarchical\authority\userInfo\UserName;

/**
 * Description of UserInfo
 *
 * @author Wagner Sicca <wssicca@gmail.com>
 * @namespace p13\url\parts\hierarchical\authority
 * @package p13\url\parts\hierarchical\authority
 */
class UserInfo extends AbstractPart
{

    /**
     *
     * @var userInfo\Password
     */
    public $password;

    /**
     *
     * @var userInfo\UserName
     */
    public $userName;

    public function __construct()
    {
        $this->password = new Password();
        $this->userName = new UserName();
    }

    /**
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->userName != '' ? (
                $this->password != '' ? 
                        $this->userName . ':' . $this->password :
                        $this->userName
                ) : '';
    }

}
