<?php

namespace Cms\Modules\Admin\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreBaseRepositoryContract;

interface PostRepositoryContract extends CoreBaseRepositoryContract
{
    public function getPostByType($type);

    public function getFirstPost($type);

    public function getPostBySlug($slug);

    public function getPostRelated($id, $type);
}
