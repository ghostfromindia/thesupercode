<?php

namespace App\Http\Controllers\Admin\Quiz;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Quiz\Category;
use App\Models\Quiz\Quiz;
use App\Models\Youtube\Channels;
use App\Models\Youtube\Statistics;
use App\Traits\ResourceTrait;
use App\Traits\UploaderTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\One\User;
use Yajra\DataTables\DataTables;

class CategoryController extends BaseController
{
    use ResourceTrait;
    use UploaderTrait;

    public function __construct()
    {
        Parent::__construct();

        $this->model = new Category();
        $this->route .= '.qcategory';
        $this->views .= '.modules.quiz.category';
        $this->url = "admin/qcategory/";

        $this->resourceConstruct();

    }

    protected function getCollection()
    {
        return DB::table('quiz_categories as q')
            ->select('q.id', 'q.category_name', 'q.slug','q.updated_at');
    }

    protected function initDTData($collection, $queries = []) {
        $route = $this->route;
        return DataTables::of($collection)
            ->setRowId('row-{{ $id }}')
            ->addColumn('updated_at', function($obj) use ($route, $queries) {
                return Carbon::parse($obj->updated_at)->format('d-M-y H:i');
            })
            ->addColumn('action_edit', function($obj) use ($route, $queries) {
                return '<a href="'.route($route.'.edit', [encrypt($obj->id)]).'"><img src="https://img.icons8.com/cotton/64/000000/edit--v1.png" width="20px"/></a>';
            })
            ->addColumn('action_delete', function($obj) use ($route, $queries) {
                return '<a  class="btn-warning-popup" href="'.route($route.'.destroy', [encrypt($obj->id)]).'" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." ><img src="https://img.icons8.com/fluent/48/000000/delete-sign.png" width="20px"/></a>';
            })->rawColumns(['action_edit', 'action_delete']);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = BaseController::slugify($data['category_name'].'-'.rand(1111,9999));
        $this->model->validate($data);;
        return $this->_store($data);
    }

}
