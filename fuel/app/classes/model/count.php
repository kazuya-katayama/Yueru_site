<?php
namespace Model;
use \DB;

/**
 * Model : company
**/
class Count extends \Model
{
	/**
	 * 求人情報（条件）検索取得
	 * @param array $search_key 検索用のキー
	 * @return array 'joboffer':検索結果のコラムデータ（４件まで） 'count':検索結果の件数
	 */
   public static function count()
   {
     try {
       //DB基本
       $query = DB::select()->from('master')
														->where('id', '=' , 1)
														->execute()
														->as_array();
		   //戻り値
       return $query[0]['cnt'];

     } catch(Exception $e){
       throw new \Exception('おすすめ求人情報検索中にエラーが発生しました。');
     }
   }
   public static function incri_count($count)
   {
     try {
       //DB基本
       $query = DB::update('master')
                          ->set(array(
                            'cnt' =>  $count + 1,
                          ))
                           ->where('id', '=' , 1)
                           ->execute();

      //戻り値
       return true;

     } catch(Exception $e){
       throw new \Exception('おすすめ求人情報検索中にエラーが発生しました。');
     }
   }


}
