<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ClientAccountRepository;
use App\Entities\ClientAccount;
use App\Validators\ClientAccountValidator;

/**
 * Class ClientAccountRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ClientAccountRepositoryEloquent extends BaseRepository implements ClientAccountRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ClientAccount::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function getToken($request)
    {
        $model =  $this->model();
        $entity = new $model();

        $token = [];

        $accounts = $entity->with(['account', 'client'])
        ->whereHas('account', function ($q) use ($request) {
            $q->whereNumber($request->account);
        })->whereHas('client', function ($q) use ($request) {
            $q->wherePassword($request->pass);
        })->get();

        if (count($accounts) > 0) {
            $agency = $accounts->first()->account()->with(['agency'])
                ->whereHas('agency', function ($q) use ($request) {
                    $q->whereNumber($request->agency);
                })->get();
        }

        if (!empty($agency)) {
            $token = $accounts->first()->client->with('token')->get();
            $token = $token->first()->token->token;
        }

        return $token;

    }
    
}
