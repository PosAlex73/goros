<?php

namespace Portal\Taro\enums;

enum Statuses: string
{
    case ACTIVE = 'active';
    case DISABLED = 'disabled';

    public static function getStatuses()
    {
        return [
            'Active' => 'Active',
            'Disabled' => 'Disabled'
        ];
    }
}
