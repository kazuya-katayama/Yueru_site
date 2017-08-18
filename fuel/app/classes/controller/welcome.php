<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller_Base
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$count = \Model\Count::count();
		\Model\Count::incri_count($count);
		//インスタンスの作成
		$email=Email::forge();
		$email->from('kazuya080202@gmail.com','yueru');
		$email->to('kazuya080202@gmail.com');
		$email->subject('アクセス情報');
		$email->body($_SERVER['HTTP_USER_AGENT']);
		//メール送信
		$email->send();

		$data = array(
				'count'	=> ($count + 1),
		);
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
