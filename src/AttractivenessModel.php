<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application;

/**
 * Description of AttractivenessModel
 *
 * @author grigory
 */
class AttractivenessModel
{

    const TOTAL_POINTS = 42; // Максимальное количество баллов.
    const MIN_ALPHA_POINTS = 31; // Минимальное количество балло чтобы считаться привлекательным.

    public function __construct()
    {
        
    }
    
    /**
     * Складывает баллы после отправки формы.
     * @param array $formPOST
     */
    public function countPoints(array $formPOST)
    {
        $totalPoints = 0;
        
        foreach ($formPOST as $key => $value) {
            
            /*
             * Проверяет что элемент массива является значением из чек-бокса 
             * сравнивая с id по шаблону.
             */
            if (preg_match('/check\d/', $key)) {
                $totalPoints += (int)$value; 
            }
            
        }
        
        return $totalPoints;
    }
    
    public function getPercent(int $points)
    {
        $percent = round(((self::TOTAL_POINTS / 100)*$points), 0);
        return $percent . '%';
    }
    
    public function getRatio(int $points)
    {
        return $points . '/' . self::TOTAL_POINTS;
    }

    /**
     * Возвращает ответ по результатам тестирования.
     * @param int $points
     * @return string
     */
    public function getResultAttractiveness(int $points)
    {
        if ($points > self::TOTAL_POINTS) {
            return "Ошибка: превышено максимальное количество баллов.";
        }

        if ($points > self::MIN_ALPHA_POINTS) {
            return "Вы привлекательный.";
        }

        if ($points < self::MIN_ALPHA_POINTS) {
            return "Вы непривлекательный.";
        }
    }

    /**
     * Читает JSON файл и сохраняет его в массив.
     * @param string $filePath
     * @return type
     */
    public function getArrayFromJson(string $filePath)
    {
        $json = file_get_contents($filePath);
        return json_decode($json, true);
    }

}
