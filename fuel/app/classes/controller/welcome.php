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
		$this->view_front_data = array(
			'title' => 'ゆえる',
		);
		//画面を表示・値の受け渡し
		$this->template->content = View::forge('home/' . $this->agent . 'index', $data);
	}
}
