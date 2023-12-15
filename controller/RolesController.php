<?php

class RolesController
{

    public static function getRoles($connect)
    {

        $data =Roles::getRoles($connect);
        return $data;
    }

    public static function addRoles($connect, $post)
    {

        return Roles::addRoles($connect,$post);
    }

    public static function updateRoles($connect, $post){
       return  Roles::updateRoles($connect,$post);
    }

    public static function deleteRoles($connect,$userId){
        return Roles::deleteRoles($connect,$userId);
    }
}
