<?php
class block_replacestr extends block_base {
    public function init() {
        $this->title = get_string('replacestr', 'block_replacestr');
    }

  function has_config() {return true;}    // if you have a settings.php file

  public function hide_header() {
    return true;
  }

  // The PHP tag and the curly bracket for the class definition
  // will only be closed after there is another function added in the next section.
  public function get_content() {

      if( $this->has_config() && get_config('replacestr', 'enabled') ){
          //$html = "tester xxxxxxxxxx";

          $message = get_config('replacestr', 'notificationmessage');
          $color   = get_config('replacestr', 'notificationalertcolor');

          $this->content         =  new stdClass;
          $this->content->text   = '<div class="alert alert-' . $color . '">' .
                                          $message . '
                                    </div>';

          //$this->content->footer = 'Footer here...';
          return $this->content;
      } else{
          $this->content = NULL;
      }
  }

  public function instance_allow_multiple() {
    return true;
  }
    
}