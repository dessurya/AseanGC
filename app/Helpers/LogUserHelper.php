<?php
namespace App\Helpers;

use App\Models\User;
use App\Models\UserLog;
use App\Models\BankPenerimaZIS;

use Auth;

class LogUserHelper {
	
	// user
	    public static function userAdd($data) {
	    	$text = 'Menambahakan User Baru Nama '.$data->name.' email '.$data->email;
	        $record = new UserLog;
	        $record->user_id = Auth::user()->id;
	        $record->logs = $text;
	        $record->save();
	    }
	    public static function userChangeStatus($data) {
	    	$text = 'Mengubah Status User '.$data->name.'/'.$data->email;
	    	if($data->confirmed == 'Y'){
	    		$text = $text.' Menjadi Aktif';
	    	}
	    	else{
	    		$text = $text.' Menjadi Non-Aktif';	
	    	}
	        $record = new UserLog;
	        $record->user_id = Auth::user()->id;
	        $record->logs = $text;
	        $record->save();
	    }
	    public static function userResetPassword($data) {
	    	$text = 'Me-Reset Ulang Password User '.$data->name.'/'.$data->email;
	        $record = new UserLog;
	        $record->user_id = Auth::user()->id;
	        $record->logs = $text;
	        $record->save();
	    }
	    public static function userDelete($data) {
	    	$text = 'Menghapus User '.$data->name.'/'.$data->email;
	        $record = new UserLog;
	        $record->user_id = Auth::user()->id;
	        $record->logs = $text;
	        $record->save();
	    }
	// user

}