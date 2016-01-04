<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateClienteRequest extends Request {

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
			'id_direccion' => 'required |integer',
			'id_cliente' => 'required|integer',
			'nombre_cliente' => 'required|min:4',
			'apellido_p' => 'required',
			'apellido_m' => 'required',
			'email_cliente' => 'required',
			'calle' => 'required',
			'numero' => 'required|integer',
			'ciudad' => 'required',
			'ciudad' => 'required',
			'region' => 'required',
			'contrasena_cliente' => 'required|min:6|unique:cliente',
		];
	}

}
