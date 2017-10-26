<?php
/**
  * @package    app
  * @extends    Controller_Template
  */
use Fuel\Core\View;

class Controller_Base extends Controller_Template
{
  //変数初期化
  public $agent               = '';   //ユーザーエージェント識別
  public $controller          = '';   //コントローラー名
  public $action              = '';   //アクション名
  public $base_data = array();        //baseの受け渡す値（固定）
  public $view_front_data = array();  //受け渡し値（ページごとに可変）

  /**
   * @access  public
   * @return
   * メインが処理される前にする処理
   */
  public function before()
  {
    parent::before();

    $this->controller = Request::main()->controller;    //実行中するコントローラー名を取得
    $this->action     = Request::main()->action;        //実行中するアクション名を取得

    //ユーザーエージェント判別変数初期化
    $this->agent = (Agent::is_smartphone() || Agent::is_mobiledevice()) ? 'mb_' : '';

  }

  /**
   * @access  public
   * @return
   * メインが処理された後にする処理
   */
  public function after($response)
  {
    //  受け渡す値
    $this->base_data = array(
      'controller'  => Request::main()->uri->segment(1),        //現在の実行しているコントローラーの「Controller_」の後ろの名を取得
      'contents'    => Config::load('m_contents', 'contents'),  //メニュータブの作成に設定ファイルの読み込み
      'base_params' => $this->view_front_data,
    );

    //metas.phpをテンプレートの$metasとbind
    $this->template->metas = View::forge('base/' . $this->agent . 'metas', $this->base_data);
    //header.phpをテンプレートの$headerとbind
    $this->template->header = View::forge('base/' . $this->agent . 'header', $this->base_data);
    //header_menu.phpをテンプレートの$headerとbind
    $this->template->header_menu = View::forge('base/' . $this->agent . 'header_menu', $this->base_data);
    if ($this->agent == '') {
      //footer.phpをテンプレートの$side_menuとbind
      $this->template->side_menu = View::forge('base/' . $this->agent . 'side_menu', $this->base_data);
    }
    //footer.phpをテンプレートの$footerとbind
    $this->template->footer = View::forge('base/' . $this->agent . 'footer', $this->base_data);

    $response = parent::after($response);
    return $response;
  }
}
