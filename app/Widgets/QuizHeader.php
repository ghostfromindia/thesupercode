<?php

namespace App\Widgets;

use App\Models\Youtube\Categories;
use App\Models\Quiz\Category;
use Arrilot\Widgets\AbstractWidget;

class QuizHeader extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.quiz_header', [
            'categories' => Category::all(),
            'config' => $this->config,
        ]);
    }
}
