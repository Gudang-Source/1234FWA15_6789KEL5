<?php 
namespace App\Http\Middleware;

use Closure;

class AutentifikasiAslab
{
	private $auth;
	public function __construct()
	{
		$this->auth = app('auth');
	}
	public function handle($request, Closure $next)
	{
		if($this->auth->check()&& $request->user()->level=='aslab'){
			return $next($request);
		}
		return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');

	}
}