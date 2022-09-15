<?php

namespace App\Http\Controllers;

use App\Contracts\ClinicRepositoryContract;
use Illuminate\Http\Request;

class ClinicApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ClinicRepositoryContract $clinicRepository)
    {
        $data = $request->collect()->toArray();

        try {
            $clinicRepository->store($data);
            return ['success' => true, 'clinic' => $data];
        } catch (\Throwable $th) {
            return ['success' => false, 'error' => $th->getMessage()];
        }
    }
}
