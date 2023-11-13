<?php
require "C:/xampp/htdocs/pweb/config.php";
class eventC{
    public function tab_event(){
        $req = "SELECT * FROM evenement";
        $db = config::getConnexion();
        try{
            $tab = $db->query($req);
            return $tab;
        } catch (Exception $e){
            die('Error:' . $e->getMessage());
        }
    }
    

    function ajouterevenement($nouv_evenement){
        $sql = "INSERT INTO evenement
        VALUES (null, :nom, :datee, :lieu, :duree)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom'  => $nouv_evenement->return_nom(),
                'datee' => $nouv_evenement->return_date(),
                'lieu' => $nouv_evenement->return_lieu(),
                'duree' => $nouv_evenement->return_duree(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    
    function majevenement($evenement, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE evenement SET 
                    nom  = :nom_ev,
                    datee = :datee_ev,
                    lieu = :lieu_ev,
                    duree=:duree_ev
                WHERE id = :id_ev'
            );
            $query->execute([
                'id_ev' => $id,
                'nom_ev' => $evenement->return_nom(),
                'date_ev' => $evenement->return_date(),
                'lieu_ev' => $evenement->return_lieu(),
                'duree' => $evenement->return_duree(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function afficher_evenement($id_ev){
        $sql = "SELECT * from evenement where id = :id_ev";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id_ev', $id_ev);
            $query->execute();
            $Event = $query->fetch();
            return $Event;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function supp_evenement($id_ev){
        $sql = "DELETE FROM evenement WHERE id = :id_ev";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_ev', $id_ev);
        try{
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
}
?>