<?php
/**
 * Created by PhpStorm.
 * User: cs3620
 * Date: 11/24/15
 * Time: 6:04 PM
 */

namespace Notes\Persistence\Entity;

use Notes\Domain\Entity\UserRepositoryInterface;
use Notes\Db\Adapter\PdoAdapter;
use Notes\Domain\Entity\User;

use Notes\Domain\ValueObject\Uuid;


class MysqlUserRepository implements UserRepositoryInterface
{

    /**
     * @param User $user
     * @return mixed
     */
    public function add(User $user)
    {
        // TODO: Implement add() method.
    }

    /**
     * @return mixed
     */
    public function count()
    {
        // TODO: Implement count() method.
    }

    /**
     * @param \Notes\Domain\Entity\Uuid $id
     * @return mixed
     */
    public function getById(\Notes\Domain\Entity\Uuid $id)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        // TODO: Implement getUsers() method.
    }

    /**
     * @param \Notes\Domain\Entity\Uuid $id
     * @param User $user
     * @return mixed
     */
    public function modifyById(\Notes\Domain\Entity\Uuid $id, User $user)
    {
        // TODO: Implement modifyById() method.
    }

    /**
     * @param \Notes\Domain\Entity\Uuid $id
     * @return mixed
     */
    public function removeById(\Notes\Domain\Entity\Uuid $id)
    {
        // TODO: Implement removeById() method.
    }
}