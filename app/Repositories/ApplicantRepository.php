<?php

namespace App\Repositories;

use App\Models\Training;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\JobHistory;
use App\Models\JobCircular;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  
 *------------------------------------------------------------------------**/

class ApplicantRepository implements ApplicantRepositoryInterface {

    public function all() {
        return Applicant::paginate(10);
    }

    public function store($request) {
        $applicant = new Applicant;
        $jobCircular = JobCircular::findOrFail($request->jobCircularId);
        $photoFilePath =  'public/images/application/photos/' . date_timestamp_get(date_create()) . '.jpg';
        $resumeFilePath =  'public/documents/application/resumes/' . date_timestamp_get(date_create()) . '.pdf';
        Storage::disk('local')->put($photoFilePath, base64_decode($request->applicantPhoto, false));
        Storage::disk('local')->put($resumeFilePath, base64_decode($request->attachedResume, false));
        $applicant->applicant_photo = Storage::url($photoFilePath);
        $applicant->applicant_name = $request->applicantFullName;
        $applicant->applicant_email = $request->applicantEmail;
        $applicant->applicant_phone_number = $request->applicantPhoneNumber;
        $applicant->applicant_emergency_contact = $request->applicantEmergencyContact;
        $applicant->father_name = $request->fatherName;
        $applicant->mother_name = $request->motherName;
        $applicant->spouse_name = $request->spouseName;
        ($request->presentAddress1 != null || $request->presentAddress1 != "") ? $applicant->present_address_1 = $request->presentAddress1 : null;
        $applicant->present_address_2 = $request->presentAddress2;
        $applicant->present_address_3 = $request->presentAddress3;
        $applicant->present_address_4 = $request->presentAddress4;
        $applicant->permanent_address_1 = $request->permanentAddress1;
        $applicant->permanent_address_2 = $request->permanentAddress2;
        $applicant->permanent_address_3 = $request->permanentAddress3;
        $applicant->permanent_address_4 = $request->permanentAddress4;
        $applicant->blood_group = $request->bloodGroup;
        $applicant->date_of_birth = $request->dateOfBirth;
        $applicant->gender = $request->gender;
        $applicant->religion = $request->religion;
        $applicant->nationality = $request->nationality;
        $applicant->marital_status = $request->maritalStatus;
        $applicant->job_circular_id = $request->jobCircularId;
        $applicant->attached_resume = Storage::url($resumeFilePath);
        $applicant->cover_letter = $request->coverLetter;
        $applicant->expected_salary = $request->expectedSalary;
        $applicant->save();



        foreach ($request->educations as $educationRequestItem) {
            $education = new Education;
            $education->name_of_degree = $educationRequestItem['nameOfDegree'];
            $education->institute_name = $educationRequestItem['instituteName'];
            $education->major = $educationRequestItem['major'];
            $education->board = $educationRequestItem['eductionBoard'];
            $education->result = $educationRequestItem['result'];
            $education->passing_year = $educationRequestItem['passingYear'];
            $education->applicant_id = $applicant->id;
            $education->save();
        }

        foreach ($request->jobHistories as $jobHistoryRequestItem) {
            $history = new JobHistory;
            $history->organization_name = $jobHistoryRequestItem['organizationName'];
            $history->designation = $jobHistoryRequestItem['designation'];
            $history->responsibilities = $jobHistoryRequestItem['responsibilities'];
            $history->reason_for_leaving = $jobHistoryRequestItem['reasonForLeaving'];
            $history->salary = $jobHistoryRequestItem['salary'];
            $history->applicant_id = $applicant->id;
            $history->save();
        }

        foreach ($request->trainings as $trainingRequestItem) {
            $training = new Training;
            $training->training_title = $trainingRequestItem['trainingTitle'];
            $training->topic = $trainingRequestItem['topic'];
            $training->institute_name = $trainingRequestItem['instituteName'];
            $training->from_date = $trainingRequestItem['fromDate'];
            $training->to_date = $trainingRequestItem['toDate'];
            $training->applicant_id = $applicant->id;
            $training->save();
        }

        return $applicant;
    }

    public function updateApplicationStatus($applicant_id, $status_id) {
        $applicant = Applicant::findOrFail($applicant_id);
        $applicant->application_stage_id = $status_id;
        $applicant->update();
        return $applicant;
    }

    public function destroy($applicantId) {
        return Applicant::findOrFail($applicantId)->delete();
    }

    public function show($applicantId) {
        return Applicant::findOrFail($applicantId);
    }
}
