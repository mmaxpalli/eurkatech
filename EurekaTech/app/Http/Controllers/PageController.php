<?php

namespace App\Http\Controllers;
use App;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

/*
| Autor: Max Palli
| Fecha: 22/08/2019
| Fines: Prueba de aptitud EUREKATECH
*/


class PageController extends Controller
{
    //
    public function inicio()
    {
        
        //$pacientes = DB::table('pacientes')->get();    
        $pacientes = App\Paciente::all();
        return view('inicio',compact('pacientes'));
    }

    public function login()
    {

        return view('login');
    }

    public function creditos()
    {

        return view('creditos');
    }

    public function detalle($id)
    {
        $paciente = App\Paciente::findOrFail($id);
        return view('detalle',compact('paciente'));

    }

    public function medicos()
    {
        $especialidades = App\Especialidad::all();
        $medicos = App\Medico::all();
        $espcialidadMedico = App\Medicoespecialidad::all();
        return view('medico',compact('medicos','especialidades','espcialidadMedico'));
    }

    public function crear(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'edad' => 'required'
        ]);


        $nuevoPaciente = new  App\Paciente;
        $nuevoPaciente->nombre = $request->nombre;
        $nuevoPaciente->apellido = $request->apellido;
        $nuevoPaciente->dni = $request->dni;
        $nuevoPaciente->edad = $request->edad;
        $nuevoPaciente->updated_at = Carbon::now();
        $nuevoPaciente->created_at = Carbon::now();

        $nuevoPaciente->save();
        return back()->with('mensaje', 'Paciente agregado');

    }

    public function actualizar(Request $request, $id)
    {
        $updatePaciente = App\Paciente::findOrFail($id);
        $updatePaciente->nombre = $request->nombre;
        $updatePaciente->apellido = $request->apellido;
        $updatePaciente->dni = $request->dni;
        $updatePaciente->edad = $request->edad;
        $updatePaciente->updated_at = Carbon::now();
        $updatePaciente->created_at = Carbon::now();

        $updatePaciente->save();
        return back()->with('mensaje', 'Paciente actualizado');

    }

    public function eliminar($id){

        $pacienteEliminar = App\Paciente::findOrFail($id);
        $pacienteEliminar->delete();
    
        return back()->with('mensaje', 'Pacientes Eliminado');
    }

    public function crearEspecialidad(Request $request)
    {

        $request->validate([
            'descripcion' => 'required'
        ]);


        $nuevoEspecialidad = new  App\Especialidad();
        $nuevoEspecialidad->descripcion = $request->descripcion;        
        $nuevoEspecialidad->updated_at = Carbon::now();
        $nuevoEspecialidad->created_at = Carbon::now();

        $nuevoEspecialidad->save();
        return back()->with('msgEspecialidad', 'Especialidad Registrada');

    }

    public function crearMedico(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'edad' => 'required'
        ]);


        $nuevoMedico = new  App\Medico();
        $nuevoMedico->nombre = $request->nombre;
        $nuevoMedico->apellido = $request->apellido;
        $nuevoMedico->dni = $request->dni;
        $nuevoMedico->edad = $request->edad;
        $nuevoMedico->updated_at = Carbon::now();
        $nuevoMedico->created_at = Carbon::now();

        $nuevoMedico->save();
        return back()->with('mensaje', 'Medico Registrado');

    }

    public function eliminarMedico($id){

        $medicoEliminar = App\Medico::findOrFail($id);
        $medicoEliminar->delete();
    
        return back()->with('msgMensajeEliminado', 'Medico Eliminado');
    }

    public function crearEspecialidadMedico(Request $request)
    {

      
        $nuevoMedicoEspecialidad = new  App\Medicoespecialidad();
        $nuevoMedicoEspecialidad->medico_id = $request->medico_id;        
        $nuevoMedicoEspecialidad->especialidad_id = $request->especialidad_id;      
        $nuevoMedicoEspecialidad->updated_at = Carbon::now();
        $nuevoMedicoEspecialidad->created_at = Carbon::now();

        $nuevoMedicoEspecialidad->save();
        return back()->with('msgEspecialidadMedico', 'Especialidad Asiganda al medico');

    }

    public function loguear(Request $request)
    {
        $usuario = $request->usuario;
        $password = $request->password;
        $valor = "igual a 1";

        $filas = DB::table('usuarios')->where('usuario',$usuario)->where('password',$password)->count();
        
            return response()->json($filas);


    }
}


