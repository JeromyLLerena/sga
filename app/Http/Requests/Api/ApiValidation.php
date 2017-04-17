<?php

namespace App\Http\Requests\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;

class ApiValidation extends FormRequest
{
	/**
	 * Get the proper failed validation response for the request.
	 *
	 * @param  array  $errors
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function response(array $errors)
	{
		$response = [
			'error' => [
				'message' => "Validation Error",
				'code'    => CODE_VALIDATION_ERROR,
				'reasons' => array_collapse($errors),
			]
		];
		return new JsonResponse($response, 422);
	}
}