<?php

namespace App\Http\Resources\Api\Company;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\Company\RecruitersResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'company'=>$this->company->company_name,
            'industry_type'=> $this->company->industry_type,
            'recruiting_manager' =>$this->recruitingManager->name,
            'title'=>$this->title,
            'contract'=>$this->contract_type,
            'location'=>$this->location,
            'number_of_candidates'=>$this->head_count,
            'detail'=>$this->description,
            'education_degree'=>$this->level,
            'field_of_study'=>$this->field_of_study_table->field_name,
            'experience'=>$this->experience,
            'age'=>$this->age,
            'gender'=>$this->gender,
            'skills'=>$this->skills_required,
            'responsibilities'=>$this->responsibilities,
            'salary'=>$this->salary,
            'benefits'=>$this->benefits,
            'deadline'=>$this->deadline,
            'maximum_applicants'=>$this->maximum_applicants,
            'pipeline'=>$this->pipeline ? $this->pipeline: "No pipeline assigned",
            'recruiters'=>RecruitersResource::collection($this->recruiters),
        ];
    }
}
