<?php namespace ApartmentApi\Http\Requests;

use ApartmentApi\Http\Requests\Request;
use Api\Traits\ApiResponseTrait;

class SocietyIdRequest extends Request
{
    use ApiResponseTrait;

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'society_id' => 'required|integer'
		];
	}

    public function response(array $error)
    {
        return response()->make($this->make400Response('Society id is required or invalid.', $error));
    }

}
