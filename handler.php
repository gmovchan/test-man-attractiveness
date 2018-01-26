<?php

namespace Application;

require_once __DIR__ . '/vendor/autoload.php';

var_dump($_POST);
var_dump($_GET);

$a = "123b";
var_dump((int)$a);

use Application\AttractivenessModel;

$attractivenessModel = new AttractivenessModel();

$poinst = $attractivenessModel->countPoints($_POST);
var_dump($poinst);
var_dump($attractivenessModel->getResultAttractiveness($poinst));
var_dump($attractivenessModel->getPercent($poinst));
var_dump($attractivenessModel->getRatio($poinst));