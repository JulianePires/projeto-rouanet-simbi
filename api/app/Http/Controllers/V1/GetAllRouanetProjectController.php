<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Src\BoundedContext\RouanetProject\Infraestructure\GetAllRouanetProjectController as GetController;

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
 *     summary="Returns a list of Rouanet Projects",
 *     description="Returns a object of Rouanet Projects",
 *     path="api/V1/projects",
 *     @OA\Response(response="200", description="A list with projects"),
 * ),
 *
 */

class GetAllRouanetProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rouanetProjects = $this->getAllRouanetProjectController->__invoke();

        return response($rouanetProjects, 200);
    }

    /**
     * @var GetController
     */
    private $getAllRouanetProjectController;

    public function __construct(GetController $getAllRouanetProjectController)
    {
        $this->getAllRouanetProjectController = $getAllRouanetProjectController;
    }
}
