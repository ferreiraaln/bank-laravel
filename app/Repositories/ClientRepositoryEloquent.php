<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ClientRepository;
use App\Entities\Client;
use App\Validators\ClientValidator;

/**
 * Class ClientRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function index($request)
    {
        $model =  $this->model();
        $entity = new $model();
        $result = [];

        $token = $request->bearerToken();

        $clients = $entity->with(['clientAccount', 'token'])
            ->whereHas('token', function ($q) use ($token) {
                $q->whereToken($token);
            })->get();
        $account = $clients->first()->clientAccount->first()->with('account')->get();

        $result['money'] = (int)$account->first()->account->saldo;
        $result['accountNumber'] = $account->first()->account->number;
        $result['name'] = $clients->first()->name; 
        
        return $result;
    }
}
