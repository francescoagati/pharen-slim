<?php
require_once('/Users/Francesco/github_projects/agosto2011/pharen/lang.php');
Lexical::$scopes['slim1'] = array();
$__scope_id = Lexical::init_closure("slim1", 136);
require_once("slim.php");
$app = new Slim();
Lexical::bind_lexing("slim1", 136, '$app', $app);
$n = 123;
Lexical::bind_lexing("slim1", 136, '$n', $n);
	$app->get("/books/:one/:two", "get_book")->name("get_book");
	function get_book($one, $two){
		$app =& Lexical::get_lexical_binding('slim1', 136, '$app', isset($__closure_id)?$__closure_id:0);;
		$n =& Lexical::get_lexical_binding('slim1', 136, '$n', isset($__closure_id)?$__closure_id:0);;
		$app = Slim::getInstance();
		$params = slim_params();
		echo($n);
		echo(slim_rq()->params("ciccio"));
				if(slim_rq()->isget()){
			echo("get");
		}
		else{
			FALSE;
		}

				if(slim_rq()->isAjax()){
						$app->response()->body(json_encode(array(array("a" => 1), array("a" => 2))));
		}
		else{
			FALSE;
		}

		echo(("first parameter" . $one));
		echo(("second parameter" . $two));
		return FALSE;
	}
	


