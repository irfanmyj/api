<?php
namespace Irfanmyj\Api\Classapi;

use Irfanmyj\Api\RsudService;

class Auth extends RsudService {

	public function login($data = [])
    {
    	$header['Content-Type'] = 'application/json';
        $response = $this->post('v1/auth/login', $data,$header);

        if(is_array($data)){
        	if(json_decode($response,TRUE)){
	        	return json_decode($response,TRUE);
	        }
	        return ['response'=>['body'=>'System Not Working'],'metadata'=>['message'=>'Tidak ada data yang diterima','code'=>400]];
        }else{
        	return ['response'=>['body'=>'System Blocking Request'],'metadata'=>['message'=>'Data yang dikirim harus dalam bentuk array','code'=>403]];
        }   
    }
}