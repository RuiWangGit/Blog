<?php

class PostsTest extends WebTestCase
{
	public $fixtures=array(
		'posts'=>'Posts',
	);

	public function testShow()
	{
		$this->open('?r=posts/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=posts/create');
	}

	public function testUpdate()
	{
		$this->open('?r=posts/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=posts/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=posts/index');
	}

	public function testAdmin()
	{
		$this->open('?r=posts/admin');
	}
}
