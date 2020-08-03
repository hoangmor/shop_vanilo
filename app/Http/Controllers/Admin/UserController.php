<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Konekt\AppShell\Http\Controllers\UserController as KonektUserController;
use Konekt\User\Models\UserProxy;
use Illuminate\Http\Request;

class UserController extends KonektUserController
{
    public function index()
    {
        return $this->appShellView('user.index', [
            'users' => UserProxy::all()
        ]);
    }
}
