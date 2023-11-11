<?php

namespace Directee\Interfaces\Data;

interface FilterExpression
{
    function generate(object $walker): mixed;
}
