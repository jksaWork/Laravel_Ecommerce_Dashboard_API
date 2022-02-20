<?php
namespace App\Repositories;

abstract class BaseRepo
{
    public $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Create a model instance for this repository
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get model
     * @return mixed
     */
    public function model()
    {
        return $this->model;
    }
}
