<?php

$poinst = $attractivenessModel->countPoints($_POST);
$data['title'] = 'Результат';
$data['minAlphaPercent'] = $attractivenessModel->getMinAlphaPercent();
$data['ratio'] = $attractivenessModel->getRatio($poinst);
$data['percent'] = $attractivenessModel->getPercent($poinst);
$data['result'] = $attractivenessModel->getResultAttractiveness($poinst);
$attractivenessView->generate('elements/result.php', 'views/layouts/indexTemplate.php', $data);