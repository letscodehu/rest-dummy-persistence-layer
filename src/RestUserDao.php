<?php

namespace Letscodehu;


class RestUserDao implements UserDao
{

    /**
     * Finds a User by it's ID.
     * @param $id
     * @return User
     */
    public function findOne($id)
    {
        // the rest implementation
        return new User();
    }
}