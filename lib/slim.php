<?php
require_once('/Users/Francesco/github_projects/agosto2011/pharen/lang.php');
Lexical::$scopes['slim'] = array();
function slim_rq(){
		$app = Slim::getInstance();
	return $app->request;
}

function slim_params(){
	return slim_rq()->params();
}

