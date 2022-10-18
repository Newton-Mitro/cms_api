<?php

namespace App\Http\Resources\ServiceCenter;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : job circular resource collection.
 *========================================================================**/

class ServiceCenterCollection extends JsonResource {

    public function toArray($request) {
        return [
            'ServiceCenterId'       => $this->id,
            'ServiceCenterName'     => $this->service_center_name,
            'Address'               => $this->address,
            'Latitude'              => $this->latitude,
            'Longitude'             => $this->longitude,
            'PhoneNumber'           => $this->phone_number,
            'Fax'                   => $this->fax,
            'Email'                 => $this->email,
            'WorkDays'              => $this->work_days,
            'OpeningTime'           => $this->opening_time,
            'ClosingTime'           => $this->closing_time,
            'ActingInCharge'        => $this->acting_in_charge,
            'InChargeDesignation'   => $this->in_charge_designation,
            'ServiceCenterTypeId'   => $this->service_center_type_id,
        ];
    }
}
