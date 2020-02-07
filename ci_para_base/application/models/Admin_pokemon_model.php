<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pokemon_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

	}

    public function getAllTypes($select) {
        $this->db->select($select)
            ->from('poke_type');
        $result = $this->db->get();
        return $result->result();
    }

    public function getType($select, $join, $on, $where, $value) {

        $this->db->select($select)
            ->from('pokemons p')
            ->join($join, $on)
            ->where($where,$value)
            ->order_by('p.id');

        $result = $this->db->get();
        return $result->row();

    }

    public function editPokemon($data){

        $this->db->set('pok_name', $data['editName'])
            ->set('pok_type', $data['editType'])
            ->set('pok_hp', $data['editHP'])
            ->set('pok_weight', $data['editWeight'])
            ->set('pok_height', $data['editHeight'])
            ->set('pok_description', $data['editDesc'])
            ->set('pok_img_url', $data['editIMG'])
            ->where('id', $data['editID'])
            ->update('pokemons');

    }

}
