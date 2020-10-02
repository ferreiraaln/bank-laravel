<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\ClientRepository;
use App\Repositories\ClientAccountRepository;

/**
 * Class ClientsController.
 *
 * @package namespace App\Http\Controllers\Api;
 */
class ClientsController extends Controller
{
    /**
     * @var ClientRepository
     */
    protected $clientRepository;

    /**
     * @var AccountRepository
     */
    protected $accountRepository;


    /**
     * ClientsController constructor.
     *
     * @param ClientRepository $clientRepository
     * @param AccountRepository $accountRepository
     */
    public function __construct(
        ClientRepository $clientRepository,
        ClientAccountRepository $accountRepository
    ) {
        $this->clientRepository = $clientRepository;
        $this->accountRepository = $accountRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json([
            'data' => $this->clientRepository->index($request),
        ]);
    }

    public function getToken(Request $request)
    {
        return response()->json([
            'token' => $this->accountRepository->getToken($request),
        ]);
    }
}
