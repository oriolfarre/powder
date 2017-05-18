<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @package Model Taula
 * @author Oriol Farré
 * @license http://www.php.net/license/3_01.txt
 */
class Taula extends Model
{
  /**
   * Taula assignada.
   *
   * @var string
   */
  protected $table = 'taules_snow';

  /**
   * Obté les dades de la bdd.
   *
   * @var array
   */
  public function getTaula(){
  	return $this::all();
  }
}
