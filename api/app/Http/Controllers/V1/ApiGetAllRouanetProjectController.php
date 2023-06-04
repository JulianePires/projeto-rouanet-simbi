<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Src\BoundedContext\RouanetProject\Infraestructure\GetAllRouanetProjectController;

/**
 * @OA\Info(title="My First API", version="0.1")
 */
class ApiGetAllRouanetProjectController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"rouanetProject"},
     *     summary="Returns a list of Rouanet Projects",
     *     description="Returns a object of Rouanet Projects",
     *     path="/V1/rouanet-project",
     *     @OA\Response(response="200", description="A list with projects"),
     * ),
     *
    */
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
     * @var GetAllRouanetProjectController
     */
    private $getAllRouanetProjectController;

    public function __construct(GetAllRouanetProjectController $getAllRouanetProjectController)
    {
        $this->getAllRouanetProjectController = $getAllRouanetProjectController;
    }
}
