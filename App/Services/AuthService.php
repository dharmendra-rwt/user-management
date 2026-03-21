<?php
namespace App\Services;

use App\Core\AuthInterface;

class AuthService {

    private $user;

    public function __construct(AuthInterface $user) {
        $this->user = $user;
    }

    public function login($email, $password) {
        return $this->user->login($email, $password);
    }

    public function logout() {
        return $this->user->logout();
    }
}
?>