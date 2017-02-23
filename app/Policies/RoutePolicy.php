<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Routing\Router;
use App\User;

class RoutePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 可以通过此方法对指定的用户以及路由进行授权,返回结果为真则表示权限通过，否则不通过.
     * 在控制器中调用:Gate::denies('checkRouter', self::$router)
     *
     * @param User $user
     * @param Router $router
     * @return bool
     */
    public function checkRouter(User $user, Router $router)
    {
        return true;
    }
}
