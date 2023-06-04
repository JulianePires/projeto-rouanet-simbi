<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\UpdateRouanetProjectController as UpdateController;

class UpdateRouanetProjectController extends Controller
{
    /**
     * @var UpdateController
     */
    private $updateRouanetProjectController;

    public function __construct(UpdateController $updateRouanetProjectController)
    {
        $this->updateRouanetProjectController = $updateRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $updatedRouanetProject = new RouanetProjectResource($this->updateRouanetProjectController->__invoke($request));

        return response($updatedRouanetProject, 200);
    }
}
