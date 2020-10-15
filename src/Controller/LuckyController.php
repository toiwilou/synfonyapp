<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
     /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $courses = [
            "course1" => [
                "titleCourse" => "Node.js",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 28,
                "intMonth" => 9,
                "intYear" => 2020,
                "description" => "Cours de Node"
            ],
            "course2" => [
                "titleCourse" => "Laravel",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 19,
                "intMonth" => 10,
                "intYear" => 2020,
                "description" => "Cours de Mathématiques"
            ],
            "course3" => [
                "titleCourse" => "CDP",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 26,
                "intMonth" => 10,
                "intYear" => 2020,
                "description" => "Cours de Mathématiques"
            ],
            "course4" => [
                "titleCourse" => "JAVA J2E",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 23,
                "intMonth" => 11,
                "intYear" => 2020,
                "description" => "Cours de Mathématiques"
            ],
            "course5" => [
                "titleCourse" => "C#",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 22,
                "intMonth" => 2,
                "intYear" => 2021,
                "description" => "Cours de Mathématiques"
            ],
            "course6" => [
                "titleCourse" => "Python",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 19,
                "intMonth" => 4,
                "intYear" => 2021,
                "description" => "Cours de Mathématiques"
            ],
            "course7" => [
                "titleCourse" => "ROR",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 21,
                "intMonth" => 6,
                "intYear" => 2021,
                "description" => "Cours de Mathématiques"
            ],
            "course8" => [
                "titleCourse" => "Android",
                "daysCourse" => "Du lundi 28 séptembre au vendredi 04 octobre 2020",
                "intDay" => 28,
                "intMonth" => 6,
                "intYear" => 2021,
                "description" => "Cours de Mathématiques"
            ]
        ];

        function getStrDayFr($day){
            switch($day){
                case 1:
                    return "Janvier";
                break;
                case 2:
                    return "Février";
                break;
                case 3:
                    return "Mars";
                break;
                case 4:
                    return "Avril";
                break;
                case 5:
                    return "Mai";
                break;
                case 6:
                    return "Juin";
                break;
                case 7:
                    return "Juillet";
                break;
                case 8:
                    return "Août";
                break;
                case 9:
                    return "Séptembre";
                break;
                case 10:
                    return "Octobre";
                break;
                case 11:
                    return "Novembre";
                break;
                case 12:
                    return "Décembre";
                break;
            }
        }

        $myDay = getStrDayFr(getdate()['mon']);

        $time = getdate();

        return $this->render('lucky/number.html.twig', [
            "courses" => $courses,
            "time" => $time,
            "myDay" => $myDay
        ]);
    }
}
