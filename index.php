<?php

namespace Application;

require_once __DIR__ . '/vendor/autoload.php';

use Application\AttractivenessModel;
use Application\AttractivenessView;

$attractivenessModel = new AttractivenessModel();
$attractivenessView = new AttractivenessView();

$data = array();

/*
 * Получает html код формы и передаёт его в щаблон.
 */
$data['form'] = $attractivenessView->getFormFromArray($attractivenessModel->getArrayFromJson('src/questions.json'));
$attractivenessView->generate('', "formTemplate.php", $data);