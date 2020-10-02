<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\AccountRepository;


/**
 * Class OrderControllersController.
 *
 * @package namespace App\Http\Controllers;
 */
class OrderController extends Controller
{
    /**
     * @var AccountRepository
     */
    protected $accountRepository;

    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $account = $this->accountRepository->findByField('number', $request->account);
        $account = $account->first();
        
        if ($account->saldo >= $request->value || $request->fator == 1 ) {
            $account->saldo = $this->calc($account->saldo, $request->value, $request->fator);
            $account->save();

            return response()->json([
                'data' => [
                    'message' => "Operação Efetuada",
                    'money' => $account->saldo
                ]
            ]);
        } else {
            return response()->json([
                'data' => "Valo não disponivel",
            ]);
        }
    }
    public function calc($saldo, $value, $fator)
    {
        return $saldo + ($value * $fator);
    }
}
