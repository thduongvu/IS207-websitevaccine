<?php

namespace App\Components;

use Illuminate\Support\Facades\URL;

class Recusive
{
    private $data;
    private $htmlSelect = '';
    private $htmlTrow = '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function categoryRecusive($parent_id, $id = 0)
    {
        foreach ($this->data as $value) {
<<<<<<< .merge_file_a01812
                if ($value['idparent'] == 0) {
                    if(!empty($parent_id) && $parent_id == $value['id']){
                        $this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $value['vaccine_name'] . "</option>";
                    } else
                    {
                        $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $value['vaccine_name'] . "</option>";
                    }
                }
            }
=======
            if ($value['idparent'] == 0) {
                if(!empty($parent_id) && $parent_id == $value['id']){
                    $this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $value['vaccine_name'] . "</option>";
                } else
                {
                    $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $value['vaccine_name'] . "</option>";
                }
            }
        }
>>>>>>> .merge_file_a16496
        return $this->htmlSelect;
    }

    public function countRowspan($id)
    {
        $count = 0;
        foreach ($this->data as $value) {
            if ($value['idparent'] == $id) {
                $count+=1;
            }
        }
        return $count;
    }

    public function rowHome($id)
    {
        $htmlTd = '';
        foreach ($this->data as $value){
            if($value['idparent'] == $id){
<<<<<<< .merge_file_a01812
                $htmlTd .= "<tr><td>" . $value['vaccine_name'] . "</td>
                                 <td> ".$value['status']."</td></tr>";
                if($value['amount'] == ''){
                    $htmlTd .= "<td style='color: red'> "."Hết"."</td>";
                }else
                {$htmlTd .= "<td style='color: green'> "."Còn"."</td>";}
//                                 <td><a href='http://localhost:8000/vaccines/edit/".$value['id']."' class='btn btn-default'>Edit</a>
//                                     <a href='http://localhost:8000/vaccines/delete/".$value['id']."' class='btn btn-danger'>Delete</a></td>
=======
                $htmlTd .= "<tr><td>" . $value['vaccine_name'] . "</td>";
                if($value['amount'] == ''){
                    $htmlTd .= "<td style='color: red'> "."Hết"."</td></tr>";
                }else
                {$htmlTd .= "<td style='color: green'> "."Còn"."</td></tr>";}
>>>>>>> .merge_file_a16496

            }
        }
        return substr($htmlTd, 4);
    }
<<<<<<< .merge_file_a01812
    public function row($id)
    {
        $htmlTd = '';
        foreach ($this->data as $value){
            if($value['idparent'] == $id){
                $htmlTd .= "<tr><td>" . $value['vaccine_name'] . "</td>
                                 <td> ".$value['status']."</td>
                                   <td>".$value['amount']."</td>
                                 <td><a href='http://localhost:8000/vaccines/edit/".$value['id']."' class='btn btn-default'>Edit</a>
                                     <a href='http://localhost:8000/vaccines/delete/".$value['id']."' class='btn btn-danger'>Delete</a></td>
                            </tr>";
            }
        }
        return substr($htmlTd, 4);
    }
=======
>>>>>>> .merge_file_a16496


    public function categoryTable()
    {
        $STT = 0;
        foreach ($this->data as $value) {
            if ($value['idparent'] == 0) {
                $STT++;
                $this->htmlTrow .= "<tr><td rowspan='" . $this->countRowspan($value['id']) ."' class='text-center' style='vertical-align: middle'>". $STT ."</td>
<<<<<<< .merge_file_a01812
                                        <td rowspan='" . $this->countRowspan($value['id']) ."' class='text-center' style='vertical-align: middle'>". $value['vaccine_name'] ."</td>". $this->row($value['id']) ;
            }
        }
        return $this->htmlTrow;
    }
    public function categoryTableHome()
    {
        $STT = 0;
        foreach ($this->data as $value) {
            if ($value['idparent'] == 0) {
                $STT++;
                $this->htmlTrow .= "<tr><td rowspan='" . $this->countRowspan($value['id']) ."' class='text-center' style='vertical-align: middle'>". $STT ."</td>
=======
>>>>>>> .merge_file_a16496
                                        <td rowspan='" . $this->countRowspan($value['id']) ."' class='text-center' style='vertical-align: middle'>". $value['vaccine_name'] ."</td>". $this->rowHome($value['id']) ;
            }
        }
        return $this->htmlTrow;
    }
}
