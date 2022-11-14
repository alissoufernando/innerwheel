<?php
namespace StephaneAss\Payplus\Pay;

class CustomData {
  private $data = array();

  public function push($data_array=array()) {
    $this->data = $data_array;
  }

  public function set($name,$value) {
    $this->data[$name] = $value;
  }

  public function get($name) {
    if (isset($this->data[$name])) {
      return $this->data[$name];
    }
    foreach ($this->data as $key => $data) {
      if($data['keyof_customdata'] == $name){
        return $data['valueof_customdata'];
      }
    }
  }

  public function show() {
    return $this->data;
  }
}