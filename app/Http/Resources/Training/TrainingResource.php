<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Traning resource  
 *========================================================================**/

namespace App\Http\Resources\Training;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainingResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'TrainingTitle' => $this->training_title,
            'NameTopic' => $this->topic,
            'InstituteName' => $this->institute_name,
            'Year' => $this->year,
            'Duration' => $this->duration,
        ];
    }
}
