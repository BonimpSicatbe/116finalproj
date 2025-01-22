<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return [
//            'id' => $this->id,
//            'title' => $this->title,
//            'director' => $this->director,
//            'date' => $this->date,
//            'cast' => $this->cast,
//            'runTime' => $this->run_time,
//            'synopsis' => $this->synopsis,
//            'createdAt' => $this->created_at->toDateTimeString(),
//            'updatedAt' => $this->updated_at->toDateTimeString(),
//        ];
        return parent::toArray($request);
    }
}
