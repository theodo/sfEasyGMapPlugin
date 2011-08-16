<?php

/**
 * 
 * A googleMap Event (once)
 * @author Nicolas Martin
 * 
 */
class GMapEventOnce extends GMapEvent
{
  
  /**
   * returns the javascript code for attaching a Google event only once to a javascript_object
   *
   * @param string $js_object_name
   * @return string
   * @author Nicolas Martin
   */
  public function getEventJs($js_object_name)
  {
    
    return 'google.maps.event.addListenerOnce('.$js_object_name.', "'.$this->getTrigger().'", '.$this->getFunction().');';
  }
  
   /**
   * returns the javascript code for attaching a dom event once to a javascript_object
   *
   * @param string $js_object_name
   * @return string
   * @author Nicolas Martin
   */
  public function getDomEventJs($js_object_name)
  {
    
    return 'google.maps.event.addDomListenerOnce('.$js_object_name.', "'.$this->getTrigger().'", '.$this->getFunction().');';
  }
  
}

