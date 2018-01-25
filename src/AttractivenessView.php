<?php

namespace Application;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AttractivenessView
 *
 * @author grigory
 */
class AttractivenessView
{

    public function __construct()
    {
        
    }

    public function getFormFromArray(array $questionsArray)
    {
        $html = '<form>';

        foreach ($questionsArray as $key => $value) {

            $html .= '<div class="form-group">';
            $html .= '<label for="exampleInputCheck">' . $value['title'] . '</label>';
            //var_dump($value['title']);

            foreach ($value['properties'] as $property) {

                //var_dump($property);

                $html .= '
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">'
                        . $property .
                        '</label>                             
                    </div>
                    ';
            }

            $html .= '</div>';
        }

        $html .= '</form>';

        //print_r($html);

        return $html;
    }
    
    public function generate($contentView, $templateView, $data = null)
    {
        //var_dump(__DIR__ . '/../' . $templateView);
        require_once __DIR__ . '/../' . $templateView;
    }
    
    // Защита от XSS уязвимостей. Вызывается в представлении с помощью $this->html('text');
    public function html($text) {
        // nl2br требуется чтобы сохранить перенос строк
        return nl2br(htmlspecialchars($text, ENT_QUOTES));
    }

}
