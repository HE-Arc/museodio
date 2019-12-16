<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class AudioNote extends Model
{
  use Geographical;

  /**
  *Define unit of radius is kilometers
  *
  * @var bool
  */
  protected static $kilometers = true;
}
