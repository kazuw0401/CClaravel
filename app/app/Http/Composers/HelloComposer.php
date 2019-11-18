<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    public function compose(View $view)
    {
        // . $view->getName() .でビューの名前を取得して連結
        $view->with('view_message', 'this view is "' . $view->getName() . '"!!');
    }
}