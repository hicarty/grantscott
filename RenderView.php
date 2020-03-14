<?php
/**
 * Controller.php
 * --------------
 * Simple controller class.
 * 
 */
abstract class Controller {
    protected $View;
    
    /**
     * Constructor. Set's up the environment.
     */
    public function RenderView() {
        extract($array);
        $View => "\$CURRENT_PAGE = $CURRENT_PAGE";
        include($this->View);
        if ($CURRENT_PAGE == "Index") {
            include("./Views/Home/Index.php");
        }
    }

    /**
     * Every controller will be required to have the get function.
     * It is the default function that will be run.
     */
    abstract public function get();
}