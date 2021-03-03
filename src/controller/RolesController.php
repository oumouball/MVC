<?php
 namespace src\controller;
 use libs\system\Controller;
 use libs\model\RolesDb;
class RolesController extends controller
{
    public function add()
    {
        return $this->view->load("roles/add"); 

    }
    function getAll()
    {
        $rolesdao = new RolesDb();
        $roles =   $roles->findAll();  //array("Role_USER", "ROLE_ADMIN");
        return $this->view->load("roles/getAll", $roles); 
    }
    public function delete($id)
    {
        echo $id;
       // return $this->view->load("roles/add"); 

    }
}
?>