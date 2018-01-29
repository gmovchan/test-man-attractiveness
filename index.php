<?php

namespace Application;

require_once __DIR__ . '/vendor/autoload.php';

use Application\AttractivenessModel;
use Application\AttractivenessView;

$attractivenessModel = new AttractivenessModel();
$attractivenessView = new AttractivenessView();

$data = array();

/*
 * Примитивный роутер чтобы была одна точка входа.
 */
if (!is_null($action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING))) {

    switch ($action) {
        case 'handle':
            
            require_once 'src/handler.php';
            exit();
            
            break;

        default:
            break;
    }
}

/*
 * Получает html код формы и передаёт его в щаблон.
 */
$data['title'] = 'Привлекательность';
$data['form'] = $attractivenessView->getFormFromArray($attractivenessModel->getArrayFromJson('src/questions.json'));
$attractivenessView->generate('elements/testAttractiveness.php', 'views/layouts/indexTemplate.php', $data);