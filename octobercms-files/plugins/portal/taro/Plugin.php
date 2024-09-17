<?php namespace Portal\Taro;

use Backend;
use Portal\Taro\Models\UserSetting;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Taro',
            'description' => 'No description provided yet...',
            'author' => 'Portal',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Portal\Taro\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'portal.taro.some_permission' => [
                'tab' => 'Taro',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'taro' => [
                'label' => 'Taro',
                'url' => Backend::url('portal/taro/cardset'),
                'icon' => 'icon-leaf',
                'permissions' => ['portal.taro.*'],
                'order' => 500,
                'sideMenu' => [
                    'timelines' => [
                        'label' => "Card Sets",
                        'icon' => 'icon-bars',
                        'url' => Backend::url('portal/taro/cardset'),
                    ],
                    'users' => [
                        'label' => "Cards",
                        'icon' => 'icon-user',
                        'url' => Backend::url('portal/taro/card'),
                    ],
                ]
            ],

        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Настройки сайта',
                'description' => 'Общие настройки сайта.',
                'category' => SettingsManager::CATEGORY_SYSTEM,
                'icon' => 'icon-cog',
                'class' => UserSetting::class,
                'order' => 1,
                'keywords' => 'security location',
                'permissions' => ['acme.users.access_settings']
            ]
        ];
    }
}
