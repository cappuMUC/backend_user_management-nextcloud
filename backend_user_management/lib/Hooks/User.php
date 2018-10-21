<?php

namespace OCA\BackendUserManagement\Hooks;

class User {
  public static function onCreateUser( $params ) {
    /* insert your code here
     * use the parameters as follows:
     * $params['uid']
     * $params['password']
     */
    }

  public static function onDeleteUser( $params ) {
    /* insert your code here
     * use the parameters as follows:
     * $params['uid']
     * $params['password']
     */
    }

  public static function onUserPasswordChanged( $params ) {
    /* insert your code here
     * use the parameters as follows:
     * $params['uid']
     * $params['password']
     */
    }
  }
}
