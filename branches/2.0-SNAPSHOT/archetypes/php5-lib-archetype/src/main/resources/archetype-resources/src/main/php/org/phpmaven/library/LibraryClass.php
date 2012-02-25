<?php

namespace org\phpmaven\libary;


/**
 * Sample of a Singelton Pattern.
 *
 * @author banaalo, Marco Schulz
 */
class LibaryClass {

    static private $info;
    static private $instance = null;

    /** CONSTRUCTOR - private -
     *  Initalize the Class Attribute Info.
     */
    private function LibaryClass() {
        $this->info = "Info sets by the Constructor";
    }

    /**
     * Call always the same Class instance and if there no instance then
     * create one.
     *
     * @return <LibaryClass> instance
     */
    static public function getInstance() {
         if (null === self::$instance) {
             self::$instance = new self;
         }
         return self::$instance;
    }

    /**
     * A sample of a Class Method.
     *
     * @param boolean $option
     * @return string $message
     */
    public function doFoo($option) {

        $message = "";
        if($option == true)
             $message = $this->info;
        else $message = "the option is false";

        return $message;
    }

}//CLASS

?>
