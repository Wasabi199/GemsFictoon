<?php

namespace App\Enums;

enum UserType:int
{
    case ADMIN = 1;
    case WRITER = 2;
    case READER = 3;
}