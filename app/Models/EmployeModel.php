<?php

namespace App\Models;
use CodeIgniter\Model;

class EmployeModel extends Model {
    protected $table = 'employe';
    protected $allowedFields = ['nom', 'prenom', 'email', 'telephone'];
}