 <?php
/**
 * Standard controller layout.
 * 
 * @package DalekCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $da;
    $da->data['title'] = "The Index Controller";
    $da->data['main'] = "<h1>The Index Controller</h1>";
  }

}  
