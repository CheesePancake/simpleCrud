<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama', 'nim', 'alamat', 'telepon'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
