<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\GetByNameRouanetProjectController as GetByNameController;

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
 * @OA\Get(
 *     tags={"rouanetProject"},
 *     summary="Returns a Rouanet Project",
 *     description="Returns a object of Rouanet Project seached by name",
 *     path="api/V1/project",
 *     @OA\Response(response="200", description="A Rouanet Project"),
 * ),
 *
 */

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
    public function index(Request $request)
    {
        $rouanetProject = (array) new RouanetProjectResource($this->getByNameRouanetProjectController->__invoke($request));

        return response($rouanetProject, 200);
    }
}
