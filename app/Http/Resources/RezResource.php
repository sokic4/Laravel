<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap= 'rezervacija';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
'ime'=>$this->resource->ime,
'prezime'=>$this->resource->prezime,
'datum_preuzimanja'=>$this->resource->datum_preuzimanja,
'polazna_destinacija'=>$this->resource->polazna_destinacija,
'datum_vracanja'=>$this->resource->datum_vracanja,
'krajnja_destinacija'=>$this->resource->krajnja_destinacija,
'brDana'=>$this->resource->brDana,
'brPutnika'=>$this->resource->brPutnika,
'model'=>$this->resource->model,
'user'=>new UserResource($this->resource->user),
'automobil'=>new AutomobilResource($this->resource->automobil),
//'user'=>$this->resource->user,
//'grad'=>$this->resource->grad,

        ];
    }
}
