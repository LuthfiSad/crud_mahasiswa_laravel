<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nim',
        'image',
        'class_mahasiswa_id',
        'tempat',
        'lahir'
    ];
    protected $with = ['classmahasiswa'];

    public function classMahasiswa(){
        return $this->belongsTo(ClassMahasiswa::class);
    }
    public function getRouteKeyName(){
        return 'nim';
    }
    public function scopeSearch($query, array $filter){

        $query->when($filter['kelas'] ?? false, fn($query, $class) => 
            $query->whereHas('classMahasiswa', fn($query) => $query->where('id', $class)));
        // dd($filter);
        $query->when($filter['search'] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')->orWhere('nim', 'like', '%' . $search . '%');
        });

    }
    
}
