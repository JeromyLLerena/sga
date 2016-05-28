<?php
namespace App\Http\Requests\Api\Alert;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Api\ApiValidation;

class AlertCreateValidation extends ApiValidation
{
	public function rules() {
		return [
			'imei'                   => ['required', 'digits:15'],
			'type'                   => ['exists:TA_TIPO,IN_ID_TIPO'],
			'coord_x'                => [ 'numeric', 'float_between:-90,90'],
			'coord_y'                => [ 'numeric', 'float_between:-180,180'],
			'affected_persons_range' => ['required'],
			'comment'                => ['string'],
			'photo'                  => ['Image']
		];
	}

	public function authorize() {
		return true;
	}

	public function messages()
	{
		return [
			'coord_x.float_between' => 'the :attribute must be between -90 and 90.',
			'coord_y.float_between' => 'the :attribute must be between -180 and 180.'
		];
	}

	public function attributes()
	{
		return [
		];
	}
}