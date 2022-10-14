<?php

namespace App\Repositories;

use App\Models\Training;

use App\Http\Resources\Training\TrainingCollection;
use App\Repositories\Interfaces\TrainingRepositoryInterface;

class TrainingRepository implements TrainingRepositoryInterface
{
    public function show($training)
    {
        return TrainingCollection::collection(Training::where('applicant_id', $training)->get());
    }
}
