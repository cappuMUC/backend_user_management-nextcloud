<?php
namespace OCA\BackendUserManagement\AppInfo;

use OCP\AppFramework\App;
use OCP\Util;

class Application extends App {

  const APP_NAME = 'background_user_management';

  public function __construct(array $params = array()) {
    parent::__construct(self::APP_NAME, $params);


    $this->registerHooks();
  }


  public function registerHooks() {
    echo "[Hooks] Register!";

    Util::connectHook(
      'OC_User',
      'post_createUser',
      'OCA\BackendUserManagement\Hooks\User',
      'createUser'
    );
  }

}
