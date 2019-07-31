<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  public function profile()
  {
      return view('admin.profile');
  }

  public function profileUpdate(Request $request)
  {
    $data = $request->all();

    if($data['password'] != null) $data['password'] = bcrypt($data['password']);
    else unset($data['password']);

    $update = auth()->user()->update($data);

    if($update)
      return redirect()
                  ->route('admin.profile')
                  ->with('success', 'Sucesso ao atualizar!');

      return redirect()
                  ->back()
                  ->with('error', 'Falha ao atualizar!');
  }
}
