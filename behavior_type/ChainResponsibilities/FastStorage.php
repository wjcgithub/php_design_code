<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 下午12:00
 */

namespace Evolution\pdp\behavior_type\ChainResponsibilities;


class FastStorage extends Handler
{
   protected $data = [];

   public function __construct($data=[])
   {
       $this->data = $data;
   }

   protected function processing(Request $req)
   {
       if ('get' === $req->verb) {
           if (array_key_exists($req->key, $this->data)) {
               $req->response = $this->data[$req->key];
               return true;
           }
       }

       return false;
   }
}