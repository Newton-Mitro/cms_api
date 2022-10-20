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
            'serviceCenterId'       => $this->id,
            'serviceCenterName'     => $this->service_center_name,
            'address'               => $this->address,
            'latitude'              => $this->latitude,
            'longitude'             => $this->longitude,
            'phoneNumber'           => $this->phone_number,
            'fax'                   => $this->fax,
            'email'                 => $this->email,
            'workDays'              => $this->work_days,
            'openingTime'           => $this->opening_time,
            'closingTime'           => $this->closing_time,
            'actingInCharge'        => $this->acting_in_charge,
            'inChargeDesignation'   => $this->in_charge_designation,
            'serviceCenterType'     => $this->serviceCenterType->serviceCenterTypeName,
        ];
    }
}
