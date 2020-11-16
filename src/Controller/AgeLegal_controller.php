<?php

namespace App\Controller;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AgeLegal_controller
{
    /**
     * @Route ("/age", name="page_age")
     */
    public function age (request $request)
    {
        $age = $request->query->get('age');
        if ($age > 18){
            $message = " welcome dans un monde de brut";
        } else {
            $message = "dégage le boutonneux";
        }
        echo $message;
        die;

    }
}