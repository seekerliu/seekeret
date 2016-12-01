<?php
/**
 * author: seekerliu
 * createTime: 2016/12/1 上午10:49
 * Description:
 */

namespace App\ViewComposers;
use App\Repositories\SettingsRepository as Setting;
use Illuminate\View\View;

class SettingComposer
{
    protected $setting;

    /**
     * CategoryComposer constructor.
     * @param $setting
     */
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function compose(View $view)
    {
        $view->with('settings', $this->setting->getList());
    }


}