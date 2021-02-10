<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'start_date' => $this->start_date,
            'classroom' => $this->classroom,
            'length' => $this->length,
            'schedule' => $this->schedule,
            'professor' => $this->professor,
            'students' => $this->students
        ];
    }
}
