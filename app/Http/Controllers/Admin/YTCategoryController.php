<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Youtube\Categories;
use App\Traits\ResourceTrait;
use Illuminate\Http\Request;

class YTCategoryController extends BaseController
{
    use ResourceTrait;

    public function __construct()
    {
        Parent::__construct();

        $this->model = new Categories();
        $this->route .= '.ytcategory';
        $this->views .= '.modules.youtube.ytcategory';
        $this->url = "admin/ytcategory/";

        $this->resourceConstruct();

    }


    protected function getCollection()
    {
        return $this->model->select('id', 'category_name','updated_at');
    }
}
