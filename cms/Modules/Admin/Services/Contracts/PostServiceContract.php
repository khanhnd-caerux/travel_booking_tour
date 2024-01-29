<?php

namespace Cms\Modules\Admin\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreBaseServiceContract;

interface PostServiceContract extends CoreBaseServiceContract
{
    public function getPostByType($type);

    public function getFirstPost($type);

    public function getPostBySlug($slug);

    public function getPostRelated($id, $type);
}
