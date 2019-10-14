<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class AudioNote extends Model
{
  use Geographical;
  protected static $kilometers = true;
}
