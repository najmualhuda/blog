<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{
  //kas sini nak dapatkan senarai user
  public function index(){
    $users = $this ->paginate('Users');

    //pr($users);

    $this->set('users', $users);



  }

}




 ?>
