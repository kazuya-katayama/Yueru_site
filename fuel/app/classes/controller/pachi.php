<?php
/**
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Pachi extends Controller_Base
{

  /**
		* @access  public
		* @return  Response
		* パチンコ画面のTOP現在未使用
		*/
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

  /**
		* @access  public
		* @return  Response
		* パチンコ動画詳細
		*/
  public function action_movie_list()
  {
    echo "ただいま作成中です。"
    exit;
    //受け渡す値の設定
    $data = array(
    );
    $this->view_front_data = array(
      'title' => 'ゆえる',
    );
    //画面を表示・値の受け渡し
    $this->template->content = View::forge('home/' . $this->agent . 'index', $data);
  }

  /**
    * @access  public
    * @return  Response
    * パチンコ動画一覧
    */
  public function action_movie()
  {
    echo "ただいま作成中です。"
    exit;
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
