<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\DeleteRouanetProjectController as DeleteController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="OpenApi Documentation",
 *      description="Swagger OpenApi description",
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="API Server"
 * )
 *
 * @OA\Tag(
 *     name="Rouanet Projects",
 *     description="Api Endpoints"
 * )
 */

/**
 * @OA\Delete(
 *     tags={"rouanetProject"},
 *     summary="Deletes a Rouanet Project",
 *     description="Deletes a object of Rouanet Project",
 *     path="api/V1/projects/{idProjeto}",
 *     @OA\Response(response="204", description="Project deleted"),
 * ),
 *
 */

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
    public function index(Request $request)
    {
        $this->deleteRouanetProjectController->__invoke($request);

        return response([], 204);
    }
}
