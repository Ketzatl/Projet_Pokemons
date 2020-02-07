<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pokemon_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getPokemons($select, $where = null, $value = null, $returnType = 'array') { //fonctions qui permet de selectionner des pokemons de la BDD
	    $this->db->select($select)
            ->from('pokemons');

        if($where != null && $value != null){
            $this->db->where($where,$value);
        }

        $result = $this->db->get(); //On definis la variable result

        if($returnType === 'row') { //Si le résultat n'est qu'une seule ligne
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return false;
            }
        } else { //Sinon, si il retourne un tableau
            if($result->num_rows() > 0){
                return $result->result(); //On prevois leventuel bug, si il y a au minimum un resultat la code se apsse comme prevue
            } else {
                return false; //Sinon il y a une erreur
            }
        }
    }

    public function comparePokemon($pokemon1, $pokemon2) {

	    //die(var_dump($pokemon1 , $pokemon2));

        $pokemon1HP = $pokemon1->pok_hp;
        $pokemon1Weight = $pokemon1->pok_weight;
        $pokemon1Height = $pokemon1->pok_height;

        $pokemon2HP = $pokemon2->pok_hp;
        $pokemon2Weight = $pokemon2->pok_weight;
        $pokemon2Height = $pokemon2->pok_height;

        $compare = new StdClass();

        if($pokemon1HP > $pokemon2HP) {
            $compare->hp = $pokemon1HP . ' HP > ' . $pokemon2HP . ' HP';
        } else if ($pokemon1HP < $pokemon2HP){
            $compare->hp = $pokemon1HP . ' HP < ' . $pokemon2HP . ' HP';
        } else {
            $compare->hp = $pokemon1HP . ' HP = ' . $pokemon2HP . ' HP';
        }
        if($pokemon1Weight > $pokemon2Weight) {
            $compare->weight = $pokemon1Weight . ' Kg > ' . $pokemon2Weight . " Kg";
        } else if ($pokemon1Weight < $pokemon2Weight){
            $compare->weight = $pokemon1Weight . ' Kg < ' . $pokemon2Weight . " Kg";
        } else {
            $compare->weight = $pokemon1Weight . ' Kg = ' . $pokemon2Weight . " Kg";
        }
        if($pokemon1Height > $pokemon2Height) {
            $compare->height = $pokemon1Height . ' m > ' . $pokemon2Height . " m";
        } else if ($pokemon1Height < $pokemon2Height){
            $compare->height = $pokemon1Height . ' m  < ' . $pokemon2Height . " m";
        } else {
            $compare->height = $pokemon1Height . ' m = ' . $pokemon2Height . " m";
        }
        return $compare;
    }
}
