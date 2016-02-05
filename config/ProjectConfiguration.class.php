<?php

//require_once 'C://wamp//www//symfony-1.4.17//lib/autoload/sfCoreAutoload.class.php';
require_once dirname(__FILE__).'/../../symfony-1.4.17/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
  }
}
