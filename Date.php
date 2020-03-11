<?php

  /**
   * This class for common date task
   */
  class Date
  {

    function __construct(argument)
    {

    }

    public function getAge($bornDay) {
      return date_diff(date_create($bornDay), date_create('now'))->y;
    }

  }


?>
