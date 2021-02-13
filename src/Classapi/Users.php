<?php
namespace Irfanmyj\Api\Api;

use Irfanmyj\Api\RsudService;

class Users extends RsudService {

    public function get($data = []){
    	$header['Content-Type'] = 'application/json';
        $response = $this->post('v1/users/get', $data,$header);

        if(is_array($data)){
        	if(json_decode($response,TRUE)){
	        	return json_decode($response,TRUE);
	        }
	        return ['response'=>['data'=>['datas'=>[],'count'=>0]],'metadata'=>['message'=>'Tidak ada data yang diterima','code'=>400]];
        }else{
        	return ['response'=>['data'=>['datas'=>[],'count'=>0]],'metadata'=>['message'=>'Data yang dikirim harus dalam bentuk array','code'=>403]];
        }  
    }
}