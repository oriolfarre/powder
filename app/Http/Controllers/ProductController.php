<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taula;
use App\Fixacions;
use App\Botes;

/**
 * Controlador de la llògica dels productes
 *
 * @package Controlador productes
 * @author Oriol Farré
 * @license http://www.php.net/license/3_01.txt
 */
class ProductController extends Controller
{
  /**
   * Obté les taules d'snow
   * @param array $taules amb les taules d'snow
   * @return array
   */
  public function getTaules()
  {
      $taules = Taula::all();

      return view('products/taules', [
  			'taules' => $taules,
  		]);
  }

  /**
   * Obté les fixacions de la taula
   * @param array $fixacions amb les fixacions
   * @return array
   */
  public function getFixacions()
  {
    $fixacions = Fixacions::all();

    return view('products/fixacions', [
      'fixacions' => $fixacions,
    ]);

  }

  /**
   * Obté les botes
   * @param array $botes amb les botes
   * @return array
   */
  public function getBotes()
  {
    $botes = Botes::all();

    return view('products/botes', [
      'botes' => $botes,
    ]);
  }

  /**
   * Calcula el preu de l'element seleccionat i el suma a la session
   * @param session
   */
  public function calculador(Request $request, $preu){
    $sumaPreu = $value = $request->session()->get('preu') + $preu;
    $request->session()->put('preu', $sumaPreu);

  }

  /**
   * Reinicialitza la session a 0
   * @param session
   */
  public function resetPreu(Request $request){
    $request->session()->put('preu', 0);
    return back()->withInput();
  }
}
