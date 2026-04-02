<?php
require 'autoload.php';

use App\Models\Admin;
use App\Models\RegularUser;
use App\Services\AuthService;

// Admin
$admin = new Admin("Dharmendra", "admin@mail.com", "1234");
$adminService = new AuthService($admin);

echo $adminService->login("admin@mail.com", "1234");
echo "<br>";
echo $adminService->logout();

echo "<br><br>";

// Regular User
$user = new RegularUser("User", "user@mail.com", "abcd");
$userService = new AuthService($user);

echo $userService->login("user@mail.com", "abcd");
echo "<br>";
echo $userService->logout(); 
// Version 2 update
?>