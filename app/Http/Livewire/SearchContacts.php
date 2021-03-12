<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use App\Contact;

class SearchContacts extends Component
{
    use WithPagination;

    public $search;
    public $currentPage = 1;
    
    public function render()
    {   
        return view('livewire.search-contacts',[
            'contacts'      =>  Contact::where(function($sub_query){
                                $sub_query->where('name','like','%'.$this->search.'%')
                                          ->orWhere('phone_number','like','%'.$this->search.'%');
            })->paginate(10)
        ]);
    }
    public function setPage($url)
    {
        //this SetPage method will accept the request for load next page data
        $this->currentPage = explode('page=',$url)[1];//will make array from url and return page number, after getting page number
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });//this method will set the current page resolver
    }
}