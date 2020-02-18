<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(){
    return view('home');
  }

  public function registro(){
    return view('auth.register');
  }

  public function newregistro()
  {
    $user = new User;
    $user->name=$_POST['name'];
    $user->email=$_POST['email'];
    $user->password=bcrypt($_POST['password']);
    $user->roll=$_POST['roll'];
    $user->matricula=$_POST['matricula'];
    $user->save();
    return redirect('/lista');
  }

  public function lista(){
    $users = User::all();
    return view('admin.lista',compact('users'));
  }

  public function editar($id){
    $user = User::find($id);
    return view('auth.editar',compact('user'));
  }

  public function update($id)
  {
    $user = User::find($id);
    $user->name=$_POST['name'];
    $user->email=$_POST['email'];
    $user->password=bcrypt($_POST['password']);
    $user->roll=$_POST['roll'];
    $user->matricula=$_POST['matricula'];
    $user->save();
    return redirect('/lista');
  }

  public function nmateria(){
    $maestros=DB::table('users')->where('roll','=','2')->get();
    return view('admin.nmateria',compact('maestros'));
  }

  public function newmateria(){
    $data=$_POST;
    unset($data['_token']);
    DB::table('materias')->insert($data);
    return redirect('/lmateria');
  }

  public function lmateria(){
    if (Auth::user()->roll==2) {
      $materias=DB::table('materias')->where('maestro','=',Auth::user()->id)->get();
    }
    else{
      $materias=DB::table('materias')->get();
    }
    return view('admin.lmaterias',compact('materias'));
  }

  public function editarm($id){
    $materia=DB::table('materias')->where('id','=',$id)->get()->first();
    $maestros=DB::table('users')->where('roll','=','2')->get();
    return view('admin.emateria',compact('maestros','materia'));
  }

  public function updatem($id){
    $data=$_POST;
    unset($data['_token']);
    DB::table('materias')->where('id', '=',$id)->update($data);
    return redirect('/lmateria');
  }

  public function inscribir($id){
    $user = User::find($id);
    $materias=DB::table('materias')->get();
    return view('admin.inscribir',compact('user','materias'));
  }

  public function inscribirse($id){
    $data['materia']=$_POST['materia'];
    $data['alumno']=$id;
    DB::table('relacion')->insert($data);
    return redirect('/relacion/'.$data['materia']);
  }

  public function calificar($id){
    return view('admin.calificar',compact('user','materias'));
  }

  public function calificarse($id){
    $data=$_POST;
    unset($data['_token']);
    DB::table('relacion')->where('id', '=',$id)->update($data);
    $data=DB::table('relacion')->where('id', '=',$id)->get()->first();
    return redirect('/relacion/'.$data->materia);
  }

  public function relacion($id){
    $relacion=DB::table('relacion')
    ->where('materia', '=',$id)
    ->join('users', 'users.id', '=', 'relacion.alumno')
    ->select('relacion.*','users.name','users.matricula')
    ->get();
    //dd($relacion);
    return view('admin.relacion',compact('relacion'));
  }

  public function calificaciones($id){
    $user = User::find($id);
    $materias=DB::table('relacion')
    ->where('alumno', '=',$id)
    ->join('materias', 'materias.id', '=', 'relacion.materia')
    ->select('materias.*','relacion.calificacion')
    ->get();
    //dd($relacion);
    return view('admin.lcalificaciones',compact('materias','user'));
  }
}
