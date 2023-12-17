<?php
class AuthenticationController{
    public static function register($connect,$post){
        return Authentication::register($connect,$post);
    }

    public static function signIn($connect,$post){
        return Authentication::signIn($connect,$post);
    }

    public static function uploadAvatar($connect,$post){
        return Authentication::uploadAvatar($connect,$post);
    }
}