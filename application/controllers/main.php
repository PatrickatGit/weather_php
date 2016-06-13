<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Main extends Site_controller {

  public function __construct () {
    parent::__construct ();
  }

  public function index () {
    if (ENVIRONMENT == 'production')
      return redirect ('http://works.ioa.tw/weather/index.html');
    else
      return redirect ('http://dev.works.ioa.tw/weather/index.html');
  }
}
