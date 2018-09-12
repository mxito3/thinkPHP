<?php
namespace app\common\controller;
class User {
	public function getUserName($name = '') {
		return "name is {$name}";
	}
}