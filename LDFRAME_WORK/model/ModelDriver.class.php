<?php
interface  ModelDriver {
	public function select();
	public function insert();
	public function update();
	public function left();
	public function right();
	public function insert();
	public function order();
	public function limit();
	public function delete();
}
class Model implements ModelDriver {
	public function select(){}
	public function insert(){}
	public function update(){}
	public function left(){}
	public function right(){}
	public function insert(){}
	public function order(){}
	public function limit(){}
	public function delete(){}
}