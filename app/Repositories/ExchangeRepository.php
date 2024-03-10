<?php

namespace  App\Repositories;

use App\Models\Exchange;
use App\Repositories\Interfaces\ExchangeRepositoryInterface;

class ExchangeRepository extends BaseRepository implements ExchangeRepositoryInterface
{

    protected function model(): string
    {
        return Exchange::class;
    }

}
