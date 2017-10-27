<?php
/**
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Error extends Controller_Base
{

	public function action_index()
	{
		//受け渡す値の設定
		$data = array(
		);

		//画面を表示・値の受け渡し
		$this->template->content = View::forge('error/' . $this->agent . 'index', $data);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(View::forge('error/' . $this->agent . '404'), 404);
	}
}