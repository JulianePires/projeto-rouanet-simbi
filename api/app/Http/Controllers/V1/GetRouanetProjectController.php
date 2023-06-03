<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infrastructure\GetRouanetProjectController as GetController;

class GetRouanetProjectController extends Controller
{
    /**
     * @var GetController
     */
    private $getRouanetProjectController;

    public function __construct(GetController $getRouanetProjectController)
    {
        $this->getRouanetProjectController = $getRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $rouanetProject = new RouanetProjectResource($this->getRouanetProjectController->__invoke($request));

        return response($rouanetProject, 200);
    }
}
