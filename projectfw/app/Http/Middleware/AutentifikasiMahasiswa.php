<?php 
namespace App\Http\Middleware;

use Closure;

class AutentifikasiMahasiswa
{
	private $auth;
	public function __construct()
	{
		$this->auth = app('auth');
	}
	public function handle($request, Closure $next)
	{
		if($this->auth->check()&& $request->user()->level=='mahasiswa'){
			return $next($request);
		}
		return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');

	}
}