<?php

namespace Cms\Modules\Admin\Repositories;

use Cms\Modules\Admin\Repositories\Contracts\ContactRepositoryContract;
use Cms\Modules\Core\Models\Contact;
use Cms\Modules\Core\Repositories\CoreBaseRepository;

class ContactRepository extends CoreBaseRepository implements ContactRepositoryContract
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        parent::__construct($contact);
        $this->contact = $contact;
    }
}
