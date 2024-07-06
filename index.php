<?php

  trait home1 {
      public function work(){
          return 1 ;
      }
  }

  trait home2 {
      public function work(){
          return 2;
      }
  }

  trait home3 {
      public function work(){
          return 3;
      }
  }

  class Test
  {
  use home1, home2 ,home3 {
      home1::work insteadof home2 ,home3;
      home2::work as workhome2 ;
      home3::work as workhome3 ;

  }

    public function getSum(){
      return $this->work() + $this->workhome2() + $this->workhome3();
    }

  }
    ?>

