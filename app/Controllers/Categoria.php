<?php

namespace App\Controllers;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{

    //http://localhost/sistemamedico4/categoria      <a href="/categoria/new">Crear</a> url sin public 
    // http://localhost/sistemamedico4/public/categoria    <a href="categoria/new">Crear</a>  url con public 
    public function index()
    {
        $categoriaModel = new CategoriaModel();

        //devuelbe todos los campos  de la base de datos 
        var_dump($categoriaModel->findAll());


        echo view('categoria/index', ['categorias' => $categoriaModel->findAll(),]);
    }

    public function new()
    {
        echo view('categoria/new');
    }
    public function show($id)
    {
        $categoriaModel = new CategoriaModel();

        var_dump($categoriaModel->find($id));
        echo view('categoria/show', ['categoria' => $categoriaModel->find($id)]);
    }
    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            
        ]);

        echo  'creado';
        // var_dump($this->request->getPost('titulo'));


    }
    public function edit($id)
    {

        $categoriaModel = new CategoriaModel();

        echo view('categoria/edit', [
            'categoria' => $categoriaModel->find($id)
        ]);
        var_dump( $categoriaModel->find($id));
    }
    public function update($id)
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
          
        ]);
        echo 'update';
    }
    public function delete($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        echo "delete";

    }
}
