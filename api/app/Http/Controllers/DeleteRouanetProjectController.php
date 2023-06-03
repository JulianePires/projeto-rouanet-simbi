<?php

namespace App\Http\Controllers;

use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infrastructure\DeleteRouanetProjectController as DeleteController;

class DeleteRouanetProjectController extends Controller
{
    /**
     * @var DeleteController
     */
    private $deleteRouanetProjectController;

    public function __construct(DeleteController $deleteRouanetProjectController)
    {
        $this->deleteRouanetProjectController = $deleteRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->deleteRouanetProjectController->__invoke($request);

        return response([], 204);
    }
}
