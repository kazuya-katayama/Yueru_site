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
		//一旦回避
return Response::forge(View::forge('error/' . $this->agent . '404'), 404);
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
		//表示したい画像の一覧
		$img_array = array(
			"annaka_e-.png",
			"annaka_e-1.jpg",
		);

		//受け渡す値の設定
		$data = array(
			"img" => $img_array[rand(0,count($img_array) - 1)],
		);

		//画面を表示・値の受け渡し
		return Response::forge(View::forge('error/' . $this->agent . '404',$data), 404);
	}
}
