<?php
// app/Enums/UserRole.php

namespace App\Enums;

use UnitEnum;

enum UserRole: string
{
    case ADMIN = 'admin';
    case JUDGE = 'admin';
    case USER = 'user';
}