<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController
{

    //http://localhost/sistemamedico4/pelicula      <a href="/pelicula/new">Crear</a> url sin public 
    // http://localhost/sistemamedico4/public/pelicula    <a href="pelicula/new">Crear</a>  url con public 
    public function index()
    {

        session()->set('key', 'value');
        $peliculaModel = new PeliculaModel();

        //devuelbe todos los campos  de la base de datos 
        var_dump($peliculaModel->findAll());


        echo view('pelicula/index', ['peliculas' => $peliculaModel->findAll(),]);
    }

    public function new()
    {
        echo view('pelicula/new');
    }
    public function show($id)
    {


        $peliculaModel = new PeliculaModel();

        var_dump($peliculaModel->find($id));
        echo view('pelicula/show', ['pelicula' => $peliculaModel->find($id)]);
    }
    public function create()
    {

        $peliculaModel = new PeliculaModel();
        if ($this->validate('peliculas')) {
            $peliculaModel->insert([
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion')
            ]);
            session()->setFlashdata('mensaje', 'Se Registro correctamente');
            return redirect()->to('pelicula');
        } else {
            // var_dump($this->validator->listErrors());
            session()->setFlashdata([
                'validation' => $this->validator->listErrors()
            ]);
           // return redirect()->to('pelicula/new');
           return redirect()->back()->withInput();

        }
    }
    public function edit($id)
    {

        $peliculaModel = new PeliculaModel();

        echo view('pelicula/edit', [
            'pelicula' => $peliculaModel->find($id)
        ]);
        var_dump($peliculaModel->find($id));
    }
    public function update($id)
    {
        $peliculaModel = new PeliculaModel();
        if ($this->validate('peliculas')) {
            $peliculaModel->update($id, [
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion')
            ]);
            session()->setFlashdata('mensaje', 'Registro actualizado correctamente');
            return redirect()->to('pelicula');
        } else {
            // var_dump($this->validator->listErrors());
            session()->setFlashdata([
                'validation' => $this->validator->listErrors()
            ]);
            return redirect()->back()->withInput();
        }
    }
    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        session()->setFlashdata('mensaje', 'Registro eliminado correctamente');
        return redirect()->back();
    }
}
