<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\UpdateRouanetProjectController as UpdateController;

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
 * @OA\Put(
 *     tags={"rouanetProject"},
 *     summary="Updates a Rouanet Project",
 *     description="Updates a object of Rouanet Project",
 *     path="api/V1/projects/{idProjeto}",
 *     @OA\Response(response="200", description="A Rouanet Project updated successfully"),
 * ),
 *
 */

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
    public function index(Request $request)
    {
        $updatedRouanetProject = (array) new RouanetProjectResource($this->updateRouanetProjectController->__invoke($request));

        return response($updatedRouanetProject, 200);
    }
}
