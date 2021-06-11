<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\UserRequest;

class Project extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            // "user_id" => UserResource::collection(),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
    public function with($request)
    {
        return [
            'status' => "OK"
        ];
    }
}
