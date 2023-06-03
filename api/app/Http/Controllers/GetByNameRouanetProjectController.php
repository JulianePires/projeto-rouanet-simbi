<?php

namespace App\Http\Controllers;

use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infrastructure\GetByNameRouanetProjectController as GetByNameController;

class GetByNameRouanetProjectController extends Controller
{
    /**
     * @var GetByNameController
     */
    private $getByNameRouanetProjectController;

    public function __construct(GetByNameController $getByNameRouanetProjectController)
    {
        $this->getByNameRouanetProjectController = $getByNameRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $rouanetProject = new RouanetProjectResource($this->getByNameRouanetProjectController->__invoke($request));

        return response($rouanetProject, 200);
    }
}
