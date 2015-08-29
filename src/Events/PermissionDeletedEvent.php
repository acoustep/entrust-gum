<?php namespace Acoustep\EntrustGui\Events;

use Acoustep\EntrustGui\Traits\SetPermissionModelTrait;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * This file is part of Entrust GUI,
 * A Laravel 5 GUI for Entrust.
 *
 * @license MIT
 * @package Acoustep\EntrustGui
 */
class PermissionDeletedEvent extends Event
{

    use SerializesModels, SetPermissionModelTrait;

}
