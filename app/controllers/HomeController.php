<?php
/**

 * \HomeController

 */

class HomeController extends BaseController

{

  public function home()
  {

    $this->view = View::make('home')->with('article',Article::where('id', 1)->get())

        ->withTitle('MFFC :-D')

        ->withFuck('OK!');

  }

}