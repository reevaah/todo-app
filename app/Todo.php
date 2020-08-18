<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //model name should be always singular 
    //by default this model will consider table name as todos

  protected $table ='todos';
  
  // suppose if table name is different the we can define the table name as
   //protected $table ='my_todos';
}
