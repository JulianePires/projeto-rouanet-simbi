<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\DeleteRouanetProjectController as DeleteController;

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
