<?php


class MovieModel extends BaseModel
{
    function __construct()
    {   $this->movieRepo = new MovieRepository();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
    public function listAll()
    {
       return $this->movieRepo->getAll();
    }
    public function update($id)
    {
        // TODO: Implement update() method.
    }
    public function view($id)
    {
        // TODO: Implement view() method.
    }
}