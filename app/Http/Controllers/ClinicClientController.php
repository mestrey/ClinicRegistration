<?php

namespace App\Http\Controllers;

use App\Contracts\ClinicClientRepositoryContract;
use App\Http\Requests\ClinicRequest;

class ClinicClientController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClinicRequest $request, ClinicClientRepositoryContract $clinicClientRepository)
    {
        $status = $clinicClientRepository->store($request->validated());
        return redirect()->route('home')->with('status', 'STATUS: ' . ($status ? 'Успешно' : 'Проблем'));
    }
}
