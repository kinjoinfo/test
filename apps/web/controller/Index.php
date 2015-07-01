<?php
/**
 * コントローラの説明を記載して下さい
 * 
 * @version   2015/02/19 -
 * @author    -
 * @since     2015/02/19
 * @copyright (C)2015 All Rights Reserved
 */
class Index extends AppWebController {
	/**
	 * コントローラ動作設定を記述してください
	 * 
	 */
	public function configure() {
		// ------------------------------------------------------------------------------------------------
		// １． To Do ここにValidatorの初期化条件を書いてください。（第1引数はInvalidAction列挙体から取得）
		// また初期化条件に従いsetInValidCallbackController、setInValidRedirectUrl、setInValidResponseData
		// メソッドのいずれか1つを記述して下さい
		// ------------------------------------------------------------------------------------------------
		$this->initValidator(InValidAction::$none);

		// ------------------------------------------------------------------------------------------------
		// ２． To Do ここにValidatorの評価条件を書いてください。
		// 1つのキーに複数の設定がある場合は上に書いてあるほうが優先です。

		// example  $this->setValidator(string キー, string 評価メソッド, array 渡す変数)
		// ------------------------------------------------------------------------------------------------
		

		// ------------------------------------------------------------------------------------------------
		// ３． アクセス制限を設定する場合はsetAccessLimitメソッドを設定して下さい
		// example  $this->setAccessLimit('aheahe',10,1,1);
		// ------------------------------------------------------------------------------------------------
		
	}

	/**
	 * コントローラ実行処理を記述してください
	 * 
	 */
	public function execute() {
		// ------------------------------------------------------------------------------------------------
		// ３． To Do ここにモデルへのデータ操作系てください
		// ------------------------------------------------------------------------------------------------


		// ------------------------------------------------------------------------------------------------
		// ４． To Do ここにViewに値を送る処理書いてください
		// ------------------------------------------------------------------------------------------------
		$this->setViewData('result', 'hello testa!');

		// ------------------------------------------------------------------------------------------------
		// ５． view上で表示する情報を返します。必要に応じテンプレート名を設定してください。
		// ------------------------------------------------------------------------------------------------
		return $this->render();
	}
}
