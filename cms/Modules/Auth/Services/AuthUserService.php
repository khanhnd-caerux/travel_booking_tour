<?php

namespace Cms\Modules\Auth\Services;

use Cms\Modules\Auth\Services\Contracts\AuthUserServiceContract;
use Cms\Modules\Auth\Repositories\Contracts\AuthUserRepositoryContract;
use Cms\Modules\Core\Services\CoreBaseService;

class AuthUserService extends CoreBaseService implements AuthUserServiceContract
{
	protected $repository;

	function __construct(AuthUserRepositoryContract $repository)
	{
	    $this->repository = $repository;
	}
}
