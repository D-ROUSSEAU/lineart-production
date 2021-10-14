<?php namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model {
    protected $table = 'message';
    protected $allowedFields = ['nom', 'email', 'message'];
}