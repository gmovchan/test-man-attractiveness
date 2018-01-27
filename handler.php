<?php

namespace Application;

require_once __DIR__ . '/vendor/autoload.php';
/*
var_dump($_POST);
var_dump($_GET);
 * 
 */

use Application\AttractivenessModel;
use Application\AttractivenessView;

$attractivenessModel = new AttractivenessModel();
$attractivenessView = new AttractivenessView();

$poinst = $attractivenessModel->countPoints($_POST);

/*
var_dump($poinst);
var_dump($attractivenessModel->getResultAttractiveness($poinst));
var_dump($attractivenessModel->getPercent($poinst));
var_dump($attractivenessModel->getRatio($poinst));
 * 
 */

/*
 * Можно сделать диаграмму привлекательности. Написать или показать сколько 
 * пунктов не хватает до привлекательности. Вывести список черт которые надо пофиксить.
 */
$data['minAlphaPercent'] = $attractivenessModel->getMinAlphaPercent();
$data['ratio'] = $attractivenessModel->getRatio($poinst);
$data['percent'] = $attractivenessModel->getPercent($poinst);
$data['result'] = $attractivenessModel->getResultAttractiveness($poinst);
$attractivenessView->generate('', "formResultTemplate.php", $data);
