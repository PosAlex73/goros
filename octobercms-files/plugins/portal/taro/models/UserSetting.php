<?php

namespace Portal\Taro\Models;

use System\Models\SettingModel;

/**
 * UserSetting Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class UserSetting extends SettingModel
{
    public $settingsCode = 'portal_taro_settings';

    public $settingsFields = 'fields.yaml';
}
