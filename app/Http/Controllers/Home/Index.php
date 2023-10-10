<?php

namespace App\Http\Controllers\Home;

use Livewire\Component;

class Index extends Component
{
    public array $cities;

    public function mount()
    {
      $this->cities = $this->getKosovoCities();
    }

    public function render()
    {
        return view('home.index');
    }

    public function getKosovoCities()
    {
        return [
            'Dragash', 'Istog', 'Zubin Potok', 'Zvecan', 'Leposavic', 'Podujeve', 'Vushtrri', 'Prizren', 'Gjakove',
            'Peje', 'Junik', 'Decan', 'Rahovec', 'Kline', 'Malisheve', 'Prishtine', 'Fushe Kosove', 'Shterpce',
            'Kacanik', 'Hani Elezit', 'Viti', 'Gjilan', 'Ranilug', 'Kamenice', 'Novoberde', 'Mitrovice', 'Ferizaj',
            'Suhareke', 'Shtime', 'Skenderaj', 'Gllogovc', 'Obilic', 'Kllokot', 'Partesh', 'Lipjan', 'Gracanica'
        ];
    }
}
