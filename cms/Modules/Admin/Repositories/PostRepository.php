<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\PostRepositoryContract;
use Cms\Modules\Core\Models\Post;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class PostRepository extends CoreBaseRepository implements PostRepositoryContract
{
    protected $post;

    public function __construct(Post $post)
    {
        parent::__construct($post);
        $this->post = $post;
    }
}
