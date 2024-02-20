<?php


namespace App\Enums;


enum TypeUser: string
{
    case S = "Aluno";
    case C = "Criador";
    case A = "Admin";
}
