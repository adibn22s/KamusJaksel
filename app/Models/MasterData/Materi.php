<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MasterData\Category;

use Illuminate\Database\Eloquent\SoftDeletes;

class Materi extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare:table
    public $table = 'materi';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'user_id',
        'judul',
        'kategori',
        'isi_materi',
        'contoh1',
        'isi_contoh1',
        'contoh2',
        'isi_contoh2',
        'video',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function users()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->belongsTo('App\Models\User','user_id','id');
    } 
}
