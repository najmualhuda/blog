<?php


namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
public function initialize (array &config){
  parent::initialize(&config);

  $this -> setTable('users');
  $this -> setPrimarykey('id');
  $this -> setDisplayfield('name');



}
?>