<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infrastructure\CreateRouanetProjectController as CreateController;

class CreateRouanetProjectController extends Controller
{
    /**
     * @var CreateController
     */
    private $createRouanetProjectController;

    public function __construct(CreateController $createRouanetProjectController)
    {
        $this->createRouanetProjectController = $createRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $newRouanetProject = new RouanetProjectResource($this->createRouanetProjectController->__invoke($request));

        return response($newRouanetProject, 201);
    }
}
