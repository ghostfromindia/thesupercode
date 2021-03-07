<?php

namespace App\Widgets;


use App\Models\Youtube\Categories;
use Arrilot\Widgets\AbstractWidget;

class Header extends AbstractWidget
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


        return view('widgets.header', [
            'categories' => Categories::all(),
            'config' => $this->config,
        ]);
    }
}
