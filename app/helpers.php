<?php

use App\Models\Client;
use App\Models\Entraineur;
use Illuminate\Support\Facades\Auth;

function clientpermission(){
    $client = Client::where('user_id', Auth::id())->first();
    if ($client != null) {
        return true;
    }else {
        return false;
    }
}

function entraineurpermission(){
    $entraineur = Entraineur::where('user_id', Auth::id())->first();
    if  ($entraineur != null){
        return true;
    }else {
        return false;
    }
}
function administrateurparmission(){
    $client = Client::where('user_id', Auth::id())->first();
    $entraineur = Entraineur::where('user_id', Auth::id())->first();
    if ($client == null && $entraineur == null){
        return true;
    }else{
        return false;
    }
}
?>