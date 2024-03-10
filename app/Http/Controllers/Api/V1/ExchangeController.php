<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\Interfaces\ExchangeControllerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExchangeRequest;
use App\Models\Exchange;
use App\Repositories\ExchangeRepository;

class ExchangeController extends Controller implements ExchangeControllerInterface
{

    public function __construct(
        public ExchangeRepository $exchangeRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExchangeRequest $request)
    {
        $payment = $this->exchangeRepository->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Exchange $exchange)
    {
        //
    }



}
