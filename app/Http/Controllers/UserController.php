<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
      return view('profile');
    }

    public function profileUpdate(Request $request)
    {
      $data = $request->all();

      if($data['password'] != null) $data['password'] = bcrypt($data['password']);
      else unset($data['password']);

      if ($data['resposta'] != null) {
        $data['resposta'] = bcrypt($data['resposta']);
      }else {
        unset($data['resposta']);
      }

      $update = auth()->user()->update($data);

      if($update)
        return redirect()
                    ->route('profile')
                    ->with('success', 'Sucesso ao atualizar!');

        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar!');
    }
}
