<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

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
			'id_producto' => 'required|integer|unique:producto',
			'id_categoria' => 'required',
			'descripcion_producto' => 'required',
			'precio' => 'required|numeric',
			'cantidad_producto' => 'required|integer',
			'marca' => 'required',
			'modelo' => 'required',
			'variable_holgura' => 'required|min:1|numeric',
			'cantidad_ficticia_compra' => 'required|integer',
			'imagen' => 'required|image'

			//
		];
	}

}
