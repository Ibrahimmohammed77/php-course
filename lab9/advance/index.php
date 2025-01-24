<?php
include 'App/Services/UserServices.php';
include 'Vendor/Services/UserServices.php';

use App\Services\UserService as AppUserService;
use Vendor\Services\UserService as VendorUserService;

$appService = new AppUserService();
echo $appService->getUser(); // Output: Fetching user from App\Services

$vendorService = new VendorUserService();
echo $vendorService->getUser(); // Output: Fetching user from Vendor\Services