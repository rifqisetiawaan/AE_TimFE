<?php

namespace App\Models;

use CodeIgniter\Model;

class enterprise_feModel extends Model
{
  protected $table = 'tdb_pemesan'; 
  protected $useTimestamps = false;
  protected $allowedFields = ['perusahaan', 'contact_person', 'no_tlp', 'alamat'];
}