<?php

namespace App\Utilities;
/**==============================================
 * ?                    ABOUT
 * @author      : Newton Mitro
 * @email       : newtonmitro@gmail.com
 * @repo        : 
 * @createdOn   : 15-10-2022
 * @description : Link Object for Hypermedia REST API
 *=============================================**/

class LinkObject {
    public $rel;
    public $label;
    public $url;
    public $method;
    public $active;
    public $icon;

    function __construct($rel = null, $label, $url, $method, $active = false, $icon = null) {
        $this->rel = $rel;
        $this->label = $label;
        $this->url = $url;
        $this->method = $method;
        $this->active = $active;
        $this->icon = $icon;
    }
}
