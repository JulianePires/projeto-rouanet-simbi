<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Src\BoundedContext\RouanetProject\Infrastructure\GetAllRouanetProjectController as GetAllController;

class GetAllRouanetProjectController extends Controller
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
    public function index()
    {
        $rouanetProjects = $this->getAllRouanetProjectController->__invoke();

        return response($rouanetProjects, 200);
    }

    /**
     * @var GetAllController
     */
    private $getAllRouanetProjectController;

    public function __construct(GetAllController $getAllRouanetProjectController)
    {
        $this->getAllRouanetProjectController = $getAllRouanetProjectController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $rouanetProjects = $this->getAllRouanetProjectController->__invoke();

        return response($rouanetProjects, 200);
    }
}
