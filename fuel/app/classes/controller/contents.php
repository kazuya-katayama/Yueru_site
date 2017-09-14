<?php
/**
 * The Welcome Controller.
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Contents extends Controller_Base
{
  //現在未使用のため、リターン
	public function action_index()
	{
		//受け渡す値の設定
		$data = array(
		);

		//画面を表示・値の受け渡し
		$this->template->content = View::forge('home/' . $this->agent . 'index', $data);
	}

  //「ぷよぷよ」のコンテンツ
  public function action_puyo()
  {
    //受け渡す値の設定
    $data = array(
    );
    //画面を表示・値の受け渡し
		$this->template->content = View::forge('contents/puyo/' . $this->agent . 'index', $data);
  }

}
