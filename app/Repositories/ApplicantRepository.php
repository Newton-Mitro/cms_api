<?php



namespace App\Repositories;

use App\Models\Training;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\JobHistory;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements applicant interface
 *------------------------------------------------------------------------**/

class ApplicantRepository implements ApplicantRepositoryInterface {

    public function all() {
        return Applicant::all();
    }

    public function store($request) {
        $applicant = new Applicant;
        $applicant->image = base64_decode($request->applicant['Image']);
        $applicant->name = $request->applicant['FullName'];
        $applicant->email = $request->applicant['Email'];
        $applicant->phone_number = $request->applicant['PhoneNumber'];
        $applicant->emergency_contact = $request->applicant['EmergencyContact'];
        $applicant->father_name = $request->applicant['FatherName'];
        $applicant->mother_name = $request->applicant['MotherName'];
        $applicant->spouse_name = $request->applicant['SpouseName'];
        $applicant->present_address_1 = $request->applicant['PresentAddress1'];
        $applicant->present_address_2 = $request->applicant['PresentAddress2'];
        $applicant->present_address_3 = $request->applicant['PresentAddress3'];
        $applicant->present_address_4 = $request->applicant['PresentAddress4'];
        $applicant->permanent_address_1 = $request->applicant['PermanentAddress1'];
        $applicant->permanent_address_2 = $request->applicant['PermanentAddress2'];
        $applicant->permanent_address_3 = $request->applicant['PermanentAddress3'];
        $applicant->permanent_address_4 = $request->applicant['PermanentAddress4'];
        $applicant->blood_group = $request->applicant['BloodGroup'];
        $applicant->date_of_birth = $request->applicant['DateOfBirth'];
        $applicant->gender = $request->applicant['Gender'];
        $applicant->religion = $request->applicant['Religion'];
        $applicant->nationality = $request->applicant['Nationality'];
        $applicant->marital_status = $request->applicant['MaritalStatus'];
        $applicant->job_circular_id = $request->applicant['job_circular_id'];
        $applicant->expected_salary = $request->applicant['ExpectedSalary'];
        $applicant->cv = $request->applicant['Cv'];
        $applicant->save();

        foreach ($request->educations as $educations) {
            $education = new Education;
            $education->name_of_degree = $educations['NameOfDegree'];
            $education->institute_name = $educations['InstituteName'];
            $education->major = $educations['Major'];
            $education->board = $educations['EductionBoard'];
            $education->result = $educations['Result'];
            $education->applicant_id = $applicant['id'];
            $education->save();
        }

        foreach ($request->jobHistories as $jobHistories) {
            $history = new JobHistory;
            $history->organization_name = $jobHistories['OrganizationName'];
            $history->designation = $jobHistories['Designation'];
            $history->responsibilities = $jobHistories['Responsibilities'];
            $history->resignation_for_leaving = $jobHistories['ReasonForLeaving'];
            $history->salary = $jobHistories['Salary'];
            $history->applicant_id = $applicant['id'];
            $history->save();
        }

        foreach ($request->training as $requestTraining) {
            $training = new Training;
            $training->training_title = $requestTraining['TrainingTitle'];
            $training->topic = $requestTraining['NameTopic'];
            $training->institute_name = $requestTraining['InstituteName'];
            $training->year = $requestTraining['Year'];
            $training->duration = $requestTraining['Duration'];
            $training->applicant_id = $applicant['id'];
            $training->save();
        }

        return response()->json(['message' => 'You are successfully Applied']);
    }

    public function destroy($applicant) {
        $applicant = Applicant::find($applicant);
        $applicant->delete();
    }

    public function show($applicant) {
        return $applicant;
    }
}
