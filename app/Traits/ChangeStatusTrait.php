<?php
namespace App\Traits;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


trait ChangeStatusTrait{
    public function ChangeStatusByModel($model , $id){
        $deID = Crypt::decrypt($id);
        $ModelInstance = $model::find($deID);
        // dd($Category);
        // dd();
        $Status = $ModelInstance->getAttributes()['status'];
        $Status  == 1 ? $ModelInstance->status  = 0 : $ModelInstance->status = 1;
        $ModelInstance->save();

        // dd('saved');
        notify('status change done successfuly ', 'success messages');
        // return $decrypted;
        return redirect()->back();

    }
}


