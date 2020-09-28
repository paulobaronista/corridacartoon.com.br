<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Festival Corrida 10 Anos Cartoon Network';
        $data['description'] = 'A corrida Cartoon esta de volta! Do jeito mais divertido de anunciar sua marca!';
        $data['keywords'] = 'Cartoon Network, anuncie desenho, anúncio publico infantil, publicidade infantil';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade(){
        $data['title'] = 'Festival Corrida 10 Anos Cartoon Network';
        $data['description'] = 'A corrida Cartoon esta de volta! Do jeito mais divertido de anunciar sua marca!';
        $data['keywords'] = 'Cartoon Network, anuncie desenho, anúncio publico infantil, publicidade infantil';
        $menu['politicadeprivacidade'] = 'active';
		$conteudo['pagina_view'] = 'politicadeprivacidade_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
    }
    public function politicadecookies(){
        $data['title'] = 'Festival Corrida 10 Anos Cartoon Network';
        $data['description'] = 'A corrida Cartoon esta de volta! Do jeito mais divertido de anunciar sua marca!';
        $data['keywords'] = 'Cartoon Network, anuncie desenho, anúncio publico infantil, publicidade infantil';
        $menu['politicadecookies'] = 'active';
		$conteudo['pagina_view'] = 'politicadecookies_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

}

/* Location: ./application/controllers/home.php */
