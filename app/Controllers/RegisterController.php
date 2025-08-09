<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\View\View;

use function Tempest\view;

final class RegisterController
{
    #[Get(uri: '/register')]
    public function __invoke(): View
    {
        return view('register.view.php');
    }
}
