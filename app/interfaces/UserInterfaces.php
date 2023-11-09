<?php
require_once(dirname(__DIR__)."/models/User.php");
interface UserInterface {

    public function cleanLetter($str);
    public function cleanText($str);
    public function cleanName($str);
    public function cleanCurriculum($str);
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function update(User $user, $redirect = true);
    public function verifyToken($protected = false);
    public function setTokenSession($token, $redirect = true);
    public function authenticateUser($email, $password);
    public function findByEmail($email);
    public function findById($id);
    public function findByToken($token);
    public function destroyToken();
    public function changePassword(User $user);
    public function countBook();
    public function countUser();
      
}