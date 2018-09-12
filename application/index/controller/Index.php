<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;
use app\common\controller\User as userIndex;

class Index extends userIndex {
	public function index() {
		return "this is index";
	}

	public function common() {
		$commonTest = new commonIndex();
		// return $commonTest . index();
		return $commonTest->index();
	}

	public function getName() {
		return $this->getUserName("yapie");
	}
}
