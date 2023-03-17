<?php

class Reuzenrad extends BaseController
{
    private $reuzenradModel;


    public function __construct()
    {
        $this->reuzenradModel = $this->model('ReuzenradModel');
    }

    public function getReuzenraden()
    {
        $result = $this->reuzenradModel->getReuzenraden();

        $rows = "";
        foreach ($result as $reuzenrad) {
            $rows .= "<tr>
                        <td>$reuzenrad->Naam</td>        
                        <td>$reuzenrad->Hoogte</td>   
                        <td>$reuzenrad->Land</td>   
                        <td>$reuzenrad->Kosten</td>   
                        <td>$reuzenrad->AantalPassagiers</td>                
                      </tr>";
        }

        $data = [
            'title' => 'Top 5 hoogste reuzenraden ter wereld',
            'rows'  => $rows
        ];

        $this->view('reuzenrad/getReuzenraden', $data);
    }
}
