<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getArticles()
    {

      $result=  $this->db->select("a.id, a.article_name, a.article_content, a.created_at, a.updated_at , u.use_pseudo")
            ->from('articles a')
            ->join('users u','a.user_id = u.id')
            ->get()->result();

      //die(var_dump($result));
      return $result;
    }

    public function getArticle($id)
    {

        $result=  $this->db->select("a.id, a.article_name, a.article_content, a.created_at, a.updated_at , u.use_pseudo")
            ->from('articles a')
            ->join('users u','a.user_id = u.id')
            ->where('a.id', $id)
            ->get()->row();
        return $result;

    }


    public function getArticleNotMe($name, $idToExlude)
    {

        $result=  $this->db->select("a.id, a.article_name, a.article_content, a.created_at, a.updated_at")
            ->from('articles a')
            ->where('a.article_name = "'.$name. '" AND a.id != "'.$idToExlude.'"', null, false)
            ->get()->row();
        return $result;

    }



}
