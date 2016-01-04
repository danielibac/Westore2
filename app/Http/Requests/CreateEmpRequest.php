<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEmpRequest extends Request {

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
            'rut_empleado' => 'required|integer',
            'rut_empresa' => 'required| integer',
            'nombre_empleado' => 'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'email' => 'required',
            'contrasena_empleado' => 'required|min:6|unique:empleado',
        ];
    }

}