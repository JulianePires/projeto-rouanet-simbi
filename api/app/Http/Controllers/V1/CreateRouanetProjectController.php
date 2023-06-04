<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouanetProjectResource;
use Illuminate\Http\Request;
use Src\BoundedContext\RouanetProject\Infraestructure\CreateRouanetProjectController as CreateController;

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
 * @OA\Post(
 *     tags={"rouanetProject"},
 *     summary="Creates a Rouanet Project",
 *     description="Creates a object of Rouanet Project",
 *     path="api/V1/projects",
 *     @OA\Response(response="201", description="Project created"),
 * ),
 *
 */

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
    public function index(Request $request)
    {
        $newRouanetProject = (array) new RouanetProjectResource($this->createRouanetProjectController->__invoke($request));

        return response($newRouanetProject, 201);
    }
}
