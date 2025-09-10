<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MoviesController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->model('MoviesModel');
    }

    public function index()
    {
        $data['movies'] = $this->MoviesModel->all();
        $this->call->view('MoviesView', $data);
    }

   public function create()
{
    if ($this->io->method() === 'post') {
        $data = [
            'Title'      => $this->io->post('Title'),
            'Year_Watch' => $this->io->post('Year_Watch'),
            'Month'      => $this->io->post('Month'),
            'Type'       => $this->io->post('Type'),
        ];

        $this->MoviesModel->insert($data);
        

        
        redirect('movies'); 
    }

    $this->call->view('CreateMovies');
}

public function update($id)
{
    $movie = $this->MoviesModel->find($id);

    if (!$movie) {
        exit("Movie not found");
    }

    if ($this->io->method() === 'post') {
        $data = [
            'Title'      => $this->io->post('Title'),
            'Year_Watch' => $this->io->post('Year_Watch'),
            'Month'      => $this->io->post('Month'),
            'Type'       => $this->io->post('Type'),
        ];

        if ($this->MoviesModel->update($id, $data)) {
            redirect('movies');
            exit;
        } else {
            echo "Error updating movie.";
        }
    }

    $this->call->view('UpdateMovieList', ['movie' => $movie]);
}


  
    public function delete($id)
    {
        if ($this->MoviesModel->delete($id)) {
            redirect('movies');
            echo "Movie deleted successfully.";
        } else {
            echo "Error deleting movie.";
        }
    }

    
    public function soft_delete($id)
    {
        if ($this->MoviesModel->soft_delete($id)) {
            redirect('movies');
            echo "Movie soft deleted successfully.";
        } else {
            echo "Error soft deleting movie.";
        }
    }

   
    public function restore($id)
    {
        if ($this->MoviesModel->restore($id)) {
            redirect('movies');
            echo "Movie restored successfully.";
        } else {
            echo "Error restoring movie.";
        }
    }
}

