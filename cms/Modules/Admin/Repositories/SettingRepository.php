<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\SettingRepositoryContract;
use Cms\Modules\Core\Models\Setting;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class SettingRepository extends CoreBaseRepository implements SettingRepositoryContract
{
    protected $setting;

    public function __construct(Setting $setting)
    {
        parent::__construct($setting);
        $this->setting = $setting;
    }

    public function cateWithParent()
    {
        return $this->setting->with('parent')->get();
    }
}
