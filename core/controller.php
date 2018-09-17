<?php
class controller 
{
    public function loadView($viewName, $viewData = [])
    {
        require 'views/'.$viewName.'.php';
    }

	public function loadTemplate($viewName, $viewData = []) 
	{
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = [])
	{
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}