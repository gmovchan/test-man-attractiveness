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
    
    /**
     * Генерирует из массива форму со списком вопросов.
     * @param array $questionsArray
     * @return string
     */
    public function getFormFromArray(array $questionsArray)
    {
        $checkId = 0;
        $html = '<form action="/?action=handle" method="post">';

        foreach ($questionsArray as $key => $value) {

            $html .= '<div class="form-group">';
            $html .= '<label for="exampleInputCheck">' . $value['title'] . '</label>';

            foreach ($value['properties'] as $property) {

                $html .= '
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="check' . $checkId . '" id="check' . $checkId . '" value="1">
                        <label class="form-check-label" for="check' . $checkId . '">'
                        . $property .
                        '</label>                             
                    </div>
                    ';

                $checkId++;
            }

            $html .= '</div>';
        }

        $html .= '      <button type="submit" class="btn btn-primary">Подтвердить</button>
                    </form>
                ';

        return $html;
    }

    public function generate($contentView, $templateView, $data = null)
    {

        require_once __DIR__ . '/../' . $templateView;
    }

    /**
     * Защита от XSS уязвимостей. Вызывается в представлении с помощью $this->html('text');
     * @param type $text
     * @return type
     */
    public function html($text)
    {
        /*
         * nl2br требуется чтобы сохранить перенос строк
         */
        return nl2br(htmlspecialchars($text, ENT_QUOTES));
    }

}
