<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutomobilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

        // return parent::toArray($request);
        public function toArray($request)
        {
            return [
                'regBr'=>$this->resource->regBr,
                'gorivo'=>$this->resource->gorivo,
                'cena'=>$this->resource->cena,
                'godiste'=>$this->resource->godiste,
                        ];
        }
    }

