<?php

namespace Directee\Interfaces\Auth;

final class AuthInfo
{
    public bool $authOk            = false;
    public string $userId          = '';
    public string $userName        = '';
}
