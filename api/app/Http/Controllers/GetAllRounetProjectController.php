<?php

namespace App\Http\Controllers;

use Src\BoundedContext\RouanetProject\Infrastructure\GetAllRouanetProjectController as GetAllController;

class GetAllRouanetProjectController extends Controller
{
    /**
     * @var GetAllController
     */
    private $getAllRouanetProjectController;

    public function __construct(GetAllController $getAllRouanetProjectController)
    {
        $this->getAllRouanetProjectController = $getAllRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $rouanetProjects = $this->getAllRouanetProjectController->__invoke();

        return response($rouanetProjects, 200);
    }
}
