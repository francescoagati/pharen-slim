<?php
require_once('/Users/Francesco/github_projects/agosto2011/pharen/lang.php');
Lexical::$scopes['idiorm'] = array();
	ORM::configure(("mysql" . ":host=" . "127.0.0.1" . ";dbname=" . "db_my"));
	ORM::configure("username", "root");
	ORM::configure("password", "root");

ORM::for_table("users")->where("id", 5)->find_one();
ORM::for_table("users")->select("name,surname")->where(("id=" . 2))->order("id desc")->find_many();
