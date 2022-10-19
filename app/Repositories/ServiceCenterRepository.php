<?php

namespace App\Repositories;

use App\Models\ServiceCenter;
use App\Http\Requests\UpdateServiceCenterRequest;
use App\Repositories\Interfaces\ServiceCenterRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :   
 *========================================================================**/

class ServiceCenterRepository implements ServiceCenterRepositoryInterface {

    public function all() {
        return ServiceCenter::paginate(10);
    }

    public function store($request) {
        $ServiceCenter = new ServiceCenter();
        $ServiceCenter->service_center_name = $request->ServiceCenterName;
        $ServiceCenter->address = $request->Address;
        $ServiceCenter->latitude = $request->Latitude;
        $ServiceCenter->longitude = $request->Longitude;
        $ServiceCenter->phone_number = $request->PhoneNumber;
        $ServiceCenter->fax = $request->Fax;
        $ServiceCenter->email = $request->Email;
        $ServiceCenter->work_days = $request->WorkDays;
        $ServiceCenter->opening_time = $request->OpeningTime;
        $ServiceCenter->closing_time = $request->ClosingTime;
        $ServiceCenter->acting_in_charge = $request->ActingInCharge;
        $ServiceCenter->in_charge_designation = $request->InChargeDesignation;
        $ServiceCenter->in_charge_designation = $request->InChargeDesignation;
        $ServiceCenter->service_center_type_id = $request->ServiceCenterTypeId;
        $ServiceCenter->save();
        return $ServiceCenter;
    }

    public function  update($request, $serviceCenterId) {
        $service = ServiceCenter::find($serviceCenterId);
        $service->service_center_name = $request->ServiceCenterName;
        $service->address = $request->Address;
        $service->latitude = $request->Latitude;
        $service->longitude = $request->Longitude;
        $service->phone_number = $request->PhoneNumber;
        $service->fax = $request->Fax;
        $service->email = $request->Email;
        $service->work_days = $request->WorkDays;
        $service->opening_time = $request->OpeningTime;
        $service->closing_time = $request->ClosingTime;
        $service->acting_in_charge = $request->ActingInCharge;
        $service->in_charge_designation = $request->InChargeDesignation;
        $service->in_charge_designation = $request->InChargeDesignation;
        $service->service_center_type_id = $request->ServiceCenterTypeId;
        $service->update();
        return $service;
    }

    public function show($serviceCenterId) {
        $serviceCenter = ServiceCenter::find($serviceCenterId);
        return  $serviceCenter;
    }

    public function destroy($serviceCenterId) {
        $serviceCenter = ServiceCenter::find($serviceCenterId);
        return $serviceCenter->delete();
    }
}
