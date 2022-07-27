<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use RealRashid\SweetAlert\Facades\Alert;


class Calendar extends Component
{
    public $events = [];
    public function eventChange($event)
    {
        $e = Event::find($event['id']);
        $e->start = $event['start'];
        if(Arr::exists($event, 'end')) {
            $e->end = $event['end'];
        }
        $e->save();
    }
    public function render()
    {
        $this->events = json_encode(Event::all());

        return view('livewire.calendar');
    }
    public function eventRemove($id)
{
    Event::destroy($id);
}
public function eventAdd($event)
{
    Event::create($event);
}
 public function newmeet(){
    return view('admin.departement.index');
    //return Alert::html('Html Title', '<h1>hello</h1>', 'Info Message');
   } 

}