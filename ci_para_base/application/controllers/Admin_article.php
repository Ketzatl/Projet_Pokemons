<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_article extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        // Si je ne suis pas connecté
        if(!$this->logged){
            redirect();
        }

        $this->load->model('auth_model', 'authManager');
        $this->load->model('article_model', 'articleManager');

        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/js/articles'
        ));

    }

    public function index()
    {
        // Traitement de la donnée :
        $this->data['articles'] = $this->articleManager->getArticles();
        //die(var_dump($this->data['articles']));

        //Chargement des données
        $this->data['title'] = "Liste des Articles";

        // Chargement de la vue
        $this->data['subview'] = 'front_office/administration/article/articles';

        $this->load->view('components_home/main', $this->data);


    }

    public function edit($id = false){
        if($id){
            // AFFICHAGE DE LA VUE UPDATE
            // Traitement de la donnée :
            $this->data['article'] = $this->articleManager->getArticle($id);
//
            //Chargement des données
            $this->data['title'] = "Modification d'article"."<br/><i>".$this->data['article']->article_name."</i>";
            //die(var_dump($this->data['pokemon']));

            // Chargement de la vue
            $this->data['subview'] = 'front_office/administration/article/modif_article';

            $this->load->view('components_home/main', $this->data);
        } else {

            // ON UPDATE
            $rulesArray = array(
                array(
                    'field' => 'id',
                    'label' => "ID d'article",
                    'rules' => 'trim|required|integer'
                ),
                array(
                    'field' => 'articleUpdateName',
                    'label' => "nom d'article",
                    'rules' => 'trim|required|min_length[6]'
                ),
                array(
                    'field' => 'articleUpdateContent',
                    'label' => "Contenu d'article",
                    'rules' => 'trim|required'
                ),
            );

            $this->form_validation->set_rules($rulesArray);

            if($this->form_validation->run() === FALSE) {
                //          echo'Erreur mon gars';
                $errorsArray = $this->form_validation->get_all_errors();

                header('Content-type:application/json');
                echo json_encode(array(
                    'error' => $errorsArray
                ));

            }else{

                // Verification du titre
                $article = $this->articleManager->getArticle( $this->input->post('id'));
                if($article){
                    // Je vérifie que le nom n'existe pas ailleurs
                    $articleAlreadyExist = $this->articleManager->getArticleNotMe($this->input->post('articleUpdateName'), $this->input->post('id'));
                    if($articleAlreadyExist){
                        header('Content-type:application/json');
                        echo json_encode(array(
                            'error' => "Article déjà existant, veuillez choisir un autre nom."
                        ));
                        die();
                    }
                } else {
                    header('Content-type:application/json');
                    echo json_encode(array(
                        'error' => "Article introuvable."
                    ));
                    die();

                }

                $data['article_name'] = $this->input->post('articleUpdateName');
                $data['article_content'] = $this->input->post('articleUpdateContent');
                $data['updated_at'] = date('Y-m-d h:i:s');

                $Where = array(
                    'id' => $this->input->post('id'));

                $this->db->update('articles', $data, $Where);
                header('Content-type:application/json');
                echo json_encode(array(
                    'success' => "Article modifié."
                ));
                die();

            }
        }
    }

    public function add($insert = false){
        // a voir avec l'équipe view
        if(!$insert){

            //On affiche le formulaire d'ajout
            $this->data['title'] = "Creation d'article";
            $this->data['subview'] = 'front_office/administration/article/create_article';
            $this->load->view('components_home/main', $this->data);
        } else {

            // On ajoute (insert)

            $dataArticle = $this->input->post();
            // echo 'bob ma';
            // die(var_dump($dataRecues));
            $rulesArray = array(
                array(
                    'field' => 'articleName',
                    'label' => "nom d'article",
                    'rules' => 'trim|required|min_length[6]|is_unique[articles.article_name]'
                ),
                array(
                    'field' => 'articleContent',
                    'label' => "Contenu d'article",
                    'rules' => 'trim|required'
                ),
            );

            $this->form_validation->set_rules($rulesArray);

            if($this->form_validation->run() === FALSE) {
                //          echo'Erreur mon gars';
                $errorsArray = $this->form_validation->get_all_errors();

                header('Content-type:application/json');
                echo json_encode(array(
                    'error' => $errorsArray

                ));
            }else{

                $data['article_name'] = $this->input->post('articleName');
                $data['article_content'] = $this->input->post('articleContent');
                $data['created_at'] = date('Y-m-d h:i:s');
                $data['updated_at'] = date('Y-m-d h:i:s');
                $data['user_id'] = $this->appli_user->id;

                //die(var_dump($data['user_id']));

                $this->db->insert('articles',$data);

//            die(var_dump(article_name));

                if ($this->db->affected_rows() > 0){

                    echo json_encode(array(
                        'success' => ' Votre article à été crée avec succès. '

                    ));
                }else{
                    echo json_encode(array(
                        'error' => " Erreur lors de la création de l'article."

                    ));


                }
            }
        }

    }


    public function delete($id){

        $where = $Where = array(
            'id' => $id);
        $this->db->delete('articles', $where);

        redirect('administration/article');
    }


}
?>