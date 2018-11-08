<?php
/*
Plugin Name: Debug Helper Plugin
Description: Debug functions to help with debugging when debugging
Version:     1.0
Author:      Spencer Mandzik
*/


/* ########
 * Functions to USE
 *
 * // sends to php error log
 * logger($var);
 *
 * // sends to html
 * displayer($var);
 *
 * // sends to browser console
 * log_js($var);
 *
 * // misc
 * print_headers();
 * print_them_globals();
*/


/**
 * Receives any type of element
 * @param string,array,object
 * @return variable
 */
function buffer_catch($object=null) {
  ob_start();                    // start buffer capture
  var_dump( $object );           // dump the values
  $content = ob_get_contents(); // put the buffer into a variable
  ob_end_clean();                // end capture
  return $content;
}

/**
 * Writes to php error log
 * @param string,array,object
 * @return type and value
 */
function ll($msg){
  $content = buffer_catch($msg);
  error_log('<---------------------------------------------------------------------------', 3, "/Users/spencermandzik/Documents/_Dev_Aliases/testing.log");
  error_log("{$content}\n", 3, "/Users/spencermandzik/Documents/_Dev_Aliases/testing.log");        // log contents of the result of var_dump( $object )
  error_log('--------------------------------------------------------------------------->', 3, "/Users/spencermandzik/Documents/_Dev_Aliases/testing.log");
}

/**
 * Displays element to page
 * @param string,array,object
 * @param string(name of var) optional
 * @return html (fixed modal display)
 */
function displayer($elem=null, $name='') {
  $content = buffer_catch($elem);
  if (!empty($name)) { $name = $name . " = ";}
  $styler = "<div style='color:white;position:fixed;top:50px;left:50px;z-index:9999;font-size:24px;background:rgba(41,45,62,.8);border'>";
  $header = '<h1>One Debugger to Rule Them ALL:</h1>';
  $message = "<p>". $name . $content."</p>";
  $ender = "</div>";
  $returner = $styler . $header . $message . $ender;
  print_r( $returner);
}

/**
 * Prints headers
 * @return headers
 */
function print_headers() {
  $headers =  getallheaders();
  $html;
  foreach($headers as $key=>$val){
    $html .= $key . ': ' . $val . '<br>';
  }
  print_r(displayer($html));
}

/**
 * Makes arrays pretty
 * @param string,array,object
 * @return html
 */
function pp($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

/**
 * Displays element to page
 * @return all globals to page
 */
function print_them_globals() {
    ksort( $GLOBALS );
    $send_to_html;
    $send_to_html .= "<ol style='margin-left:50px;'>";
    $send_to_html .= '<li>'. implode( '</li><li>', array_keys( $GLOBALS ) ) . '</li>';
    $send_to_html .= '</ol>';
    pretty_print($send_to_html);
}

/**
 * Logs element to chrome console
 * @param string,array,object
 * @return var to console
 */
function log_js( $data ) {
  $output = $data;
  if ( is_array( $output ) ) {
      $output = implode( ',', $output );
  }
  // print the result into the JavaScript console
  echo "<script>console.log( 'PHP LOG: " . $output . "' );</script>";
}


/**
 * @url https://www.justinsilver.com/technology/writing-to-the-php-error_log-with-var_dump-and-print_r/
 */

?>
