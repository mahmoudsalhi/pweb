<?php
class event
{
    public ?int $id_event = null;
    public string $nom_event;
    public string $date_event;
    public string $lieu_event;
    public int $duree_event;
    
    public function __construct($id_ev, $nom_ev, $Date_ev, $lieu_ev, $duree_ev){
        $this->id_event = $id_ev;
        $this->nom_event = $nom_ev;
        $this->date_event = $Date_ev;
        $this->lieu_event = $lieu_ev;
        $this->duree_event = $duree_ev;
    }


    public function getIdEvenement()
    {
        return $this->id_event;
    }


    public function return_nom()
    {
        return $this->nom_event;
    }


    public function setnomevent($new_name)
    {
        $this->nom_event = $new_name;

        return $this;
    }


    public function setDateEvenement($new_date_evenement)
    {
         $this->date_event = $this->$new_date_evenement;
         return $this;
    }


    public function return_date()
    {
        return $this->date_event;
    }


    public function set_lieu($new_lieu)
    {
        $this->lieu_event= $this->$new_lieu;

        return $this;
    }


    public function return_lieu()
    {
        return $this->lieu_event;
    }


    public function set_duree($duree_ev)
    {
        $this->duree_event= $this->$duree_ev;
    
        return $this;
    }


    public function return_duree()
    {
        return $this->duree_event;
    }
   

}
?>