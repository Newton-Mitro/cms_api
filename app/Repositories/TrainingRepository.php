<?php

namespace App\Repositories;

use App\Models\Training;

use App\Repositories\Interfaces\TrainingRepositoryInterface;

class TrainingRepository implements TrainingRepositoryInterface {
    public function show($training) {
        return Training::where('applicant_id', $training)->get();
    }
}
