<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Event;

use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Response;

class UserResponseEvent extends UserEvent
{
    private $response;

    public function __construct(UserInterface $user, Response $response)
    {
        parent::__construct($user);
        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
