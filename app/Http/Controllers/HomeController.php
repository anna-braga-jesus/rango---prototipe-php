<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;
use Dotenv\Dotenv;


class HomeController extends Controller
{
    public function index(): View {
        return view('home');
    }

    public function ingredientsController(Request $r): View
    {
        return view('ingredients');
    }
    public function perfil(Request $r): View
    {
        return view('perfil');
    }


    public function ingredientsAction(Request $r): View 
    {
        $client = new Client();
        //$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // Especifique o diretório onde está o arquivo .env
        //$dotenv->load(); // Carrega as variáveis de ambiente do arquivo .env

        $api_key = $_ENV['OPENAI_API_KEY']; // Acessa a variável de ambiente OPENAI_API_KEY


        $response = $client->post('https://api.openai.com/v1/completions', 
        [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $api_key

            ],
            'json' => [
                'model'=> 'text-davinci-003',
                'prompt' => 'Gere uma receita incrível SOMENTE com os seguintes ingredientes:' 
                . $r->ingredients,
                'temperature' => 0.5,
                'max_tokens' => 500,
            ],
        ]);
        
        if ($response->getStatusCode() == 200){
        $data = json_decode($response-> getBody(), true);
        $viewData['recipe']= $data['choices'][0]['text']; 
        $viewData['ingredients'] = $r -> ingredients;
        return view('ingredients', $viewData);
        } else {
            return ['error'=> 'Deu algum erro!'];
        }
    }
}
