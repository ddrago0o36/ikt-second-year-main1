<?php


class MovieController extends BaseController
{
    private $movieModel;
    private $blogId;

    function __construct() {
        $this->movieModel = new MovieModel();


    }

    public function listAll(){
        return $this->movieModel->listAll();
    }
}