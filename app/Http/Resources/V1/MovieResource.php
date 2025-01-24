<?php

namespace App\Http\Resources\V1;

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
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'releaseDate' => $this->release_date,
            'duration' => $this->duration,
            'language' => $this->language,
            'country' => $this->country,
            'rating' => $this->rating,
            'posterUrl' => $this->poster_url,
            'trailerUrl' => $this->trailer_url,
        ];
    }
}
