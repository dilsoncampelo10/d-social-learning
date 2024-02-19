<?php


namespace App\Enums;


enum CourseStatus: string
{
    case A = "Aprovado";
    case D = "Negado";
    case P = "Pendente";
}
