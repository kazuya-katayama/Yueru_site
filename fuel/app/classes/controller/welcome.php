<?php
/**
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Welcome extends Controller_Base
{

	public function action_index()
	{
		//受け渡す値の設定
		$data = array(
		);

		//画面を表示・値の受け渡し
		$this->template->content = View::forge('home/' . $this->agent . 'index', $data);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
