<?php
/**
 * User: Lessmore92
 * Date: 8/30/2020
 * Time: 3:24 AM
 */

namespace App\Http\View\Composers;


use App\Models\Category;
use Illuminate\View\View;

class BlogComposer
{
    /**
     * The user repository implementation.
     *
     * @var Category
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::get();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
    }
}
