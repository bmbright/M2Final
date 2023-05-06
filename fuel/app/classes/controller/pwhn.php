<?php
class Controller_PWHN extends Controller_Template
{

    public $direction = "";
    public $direction2 = "";

	public function action_index()
	{
        $data = array();
		$this->template->title= 'Home';
		$this->template->content = View::forge('pwhn/index',$data);
        $this->template->css = "pwhn.css";
        $this->template->direction = "one?direction=about";
        $this->template->direction2 = "two?direction=east";
	}


	public function action_about()
	{
        $data = array();
        $this->template->title= 'About';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/about/index.php',$data);
        $this->template->direction = "one?direction=about";
        $this->template->direction2 = "two?direction=about";
	}


	public function action_colortable()
	{
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/colortable/index.php',$data);
        $this->template->direction = "one?direction=colortable";
        $this->template->direction2 = "two?direction=colortable";
	}

        public function action_table()
	{
        $data = array();
        $this->template->title= 'Color Table';
        $this->template->css= 'pwhn.css';
        $this->template->content = View::forge('pwhn/table/colorTable.php',$data);
        $this->template->direction = "one?direction=table";
        $this->template->direction2 = "two?direction=table";
	}
    public function action_one()
	{
        $data = array();
        if(isset($_GET['direction'])){
            $dir = $_GET['direction'];
            if($dir == "about"){
                $this->template->title= 'East - One';
                $this->template->content = View::forge('pwhn/about/index.php',$data);
                $this->template->css = "pwhn.css";
                $this->template->direction = "one?direction=about";
                $this->template->direction2 = "two?direction=about";
            }
            elseif ($dir == "colortable") {
                $this->template->title= 'West - One';
                $this->template->content = View::forge('pwhn/colortable/index.php',$data);
                $this->template->css = "pwhn.css";
                $this->template->direction = "one?direction=colortable";
                $this->template->direction2 = "two?direction=colortable";
            }
        }
	}

    public function action_two()
	{
        $data = array();
        if(isset($_GET['direction'])){
            $dir = $_GET['direction'];
            if($dir == "about"){
                $this->template->title= 'East - Two';
                $this->template->content = View::forge('pwhn/about/index.php',$data);
                $this->template->css = "pwhn.css";
                $this->template->direction = "one?direction=about";
                $this->template->direction2 = "two?direction=about";
            }
            elseif ($dir == "colortable") {
                $this->template->title= 'West - Two';
                $this->template->content = View::forge('pwhn/colortable/index.php',$data);
                $this->template->css = "pwhn.css";
                $this->template->direction = "one?direction=colortable";
                $this->template->direction2 = "two?direction=colortable";
            }
        }
	}
}