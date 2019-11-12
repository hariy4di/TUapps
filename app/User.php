<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFotoUrlAttribute(){
        $nip_id = substr($this->email, -5);
        // if($this->is_foto_exist("https://community.bps.go.id/images/avatar/".$nip_id.".JPG")){
            return "https://community.bps.go.id/images/avatar/".$nip_id.".JPG";
        // }
        // else{
        //     return "https://community.bps.go.id/images/avatar/".$nip_id.".jpg";    
        // }
    }

    public function getPimpinanAttribute(){
        if($this->kdstjab<4){
            if($this->kdstjab==2 && $this->kdgol>32){
                $bos = $this->getEselon3();
    
                if($bos!=null) return $bos;
                else{
                    $bos = $this->getEselon2();
                    
                    if($bos!=null) return $bos;
                    else return $this->getBosRI();
                }
            }
            else{
                $bos = $this::where([
                    ['kdorg', '=', $this->kdorg],
                    ['kdesl', '=', 4], 
                    ['kdprop', '=', $this->kdprop], 
                    ['kdkab', '=', $this->kdkab], 
                ])->first();
    
                if($bos!=null) return $bos;
                else{
                    $bos = $this->getEselon3();
    
                    if($bos!=null) return $bos;
                    else{
                        $bos = $this->getEselon2();
                        
                        if($bos!=null) return $bos;
                        else return $this->getBosRI();
                    }
                }
            }
        }
        else{
            if($this->kdesl==4){
                $bos = $this->getEselon3();

                if($bos!=null) return $bos;
                else{
                    $bos = $this->getEselon2();
                    
                    if($bos!=null) return $bos;
                    else return $this->getBosRI();
                }
            }
            else if($this->kdesl==3){
                $bos = $this->getEselon2();
                
                if($bos!=null) return $bos;
                else return $this->getBosRI();
            }
        }
    }

    function getEselon3(){
        $kdorg = substr($this->kdorg, 0,3).'00';
        $bos = $this::where([
            ['kdorg', '=', $kdorg],
            ['kdesl', '=', 3], 
            ['kdprop', '=', $this->kdprop], 
            ['kdkab', '=', $this->kdkab], 
        ])->first();

        return $bos;
    }

    function getEselon2(){
        $kdorg = substr($this->kdorg, 0,2).'000';
        $bos = $this::where([
            ['kdorg', '=', $kdorg],
            ['kdesl', '=', 2], 
            ['kdprop', '=', $this->kdprop], 
            ['kdkab', '=', $this->kdkab], 
        ])->first();

        return $bos;
    }

    function getBosRI(){
        $bos = new User;
        $bos->name = 'Dr. Suhariyanto';
        $bos->nip_baru = '196106151983121001';

        return $bos;
    }

    function getPegawaiAnda(){
        $pegawai = array();
        // print_r('hai');
        // print_r($this->kdstjab);
        // print_r($this->kdesl);
        // die();

        if($this->kdstjab==4){
            if($this->kdesl==4){
                $pegawai = $this::where([
                    ['kdorg', '=', $this->kdorg],
                    ['kdstjab', '<>', 4], 
                    ['kdprop', '=', $this->kdprop], 
                    ['kdkab', '=', $this->kdkab], 
                ])->paginate();
            }
            else if($this->kdesl==3){
                $pegawai = $this::where([
                    [\DB::raw('substr(kdorg, 1, 3)'), '=', substr($this->kdorg,0,3)],
                    ['kdstjab', '<>', 3], 
                    ['kdprop', '=', $this->kdprop], 
                    ['kdkab', '=', $this->kdkab], 
                ])->paginate();
            }
            else{
                $pegawai = $this::where([
                    [\DB::raw('substr(kdorg, 1, 2)'), '=', substr($this->kdorg,0,2)],
                    ['kdstjab', '<>', 2], 
                    ['kdprop', '=', $this->kdprop], 
                    // ['kdkab', '=', $this->kdkab], 
                ])->paginate();
            }
        }
        else{
            $pegawai = $this::where([
                ['kdstjab', '=', '999'],
            ])->paginate();
        }

        return $pegawai;
    }

    

    function is_foto_exist($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
        $result = curl_exec($ch);
        curl_close($ch);
        if($result !== FALSE)
        {
            return true;
        }
        else
        {
            return false;
        }
        // $headers=get_headers($url);
        // return stripos($headers[0],"200 OK")?true:false;
    }
}
