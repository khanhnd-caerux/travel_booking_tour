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

    public function getPostByType($type)
    {
        return $this->post
            ->where('deleted_at', null)
            ->where('status', 0)
            ->where('type', $type)
            ->get();
    }

    public function getFirstPost($type)
    {
        return $this->post
            ->where('deleted_at', null)
            ->where('type', $type)
            ->where('status', 0)
            ->orderBy('created_at', 'desc')
            ->first();
    }

    public function getPostBySlug($slug)
    {
        return $this->post
            ->where('slug', $slug)
            ->where('status', 0)
            ->where('deleted_at', null)
            ->first();
    }

    public function getPostRelated($id, $type)
    {
        return $this->post
            ->where('id', '<>', $id)
            ->where('status', 0)
            ->whereNotIn('type', $type)
            ->where('deleted_at', null)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
