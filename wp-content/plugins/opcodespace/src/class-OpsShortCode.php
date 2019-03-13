<?php 
/**
* 
*/

class OpsShortCode
{

	public static function init()
	{
		$self = new self;
		add_shortcode( 'crud1',array($self, 'crud1') );
		add_shortcode( 'crud2',array($self, 'crud2') );
		add_shortcode( 'crud_update', array($self, 'crud_update') );
		add_shortcode( 'crud_delete', array($self, 'crud_delete') );
	}

	public function crud()
	{
		echo "string";
	}

	public function crud1()
	{
		return get_view(OP_VIEW_PATH . "crud.php", compact('var'));
	}

	public function crud2()
	{
		return get_view(OP_VIEW_PATH . "create.php", compact('var'));
	}

	public function crud_update()
	{
		return get_view(OP_VIEW_PATH . "update.php", compact('var'));
	}

	public function crud_delete()
	{
		return get_view(OP_VIEW_PATH . "delete.php", compact('var'));
	}

	public function ViewEvents() {
		return get_view(OP_VIEW_PATH . "content-dropbox-callback.php", compact('var'));
	}

	
}

?>