<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache; 

class HppHeader extends Component
{
    public $order_json;
    public $changeLang = false;
    public $payment_screen_title;
    public $txt_danish;
    public $txt_english;
    public $txt_language;
    public $txt_language_sub_txt;
    public $txt_locale;
    public $order_json_symbol;
    public $order_json_amount;
    
    protected $listeners = ['orderRendered'=> '[$order_json_symbol, $order_json_amount]', 'changeLang' => 'changeLang' ];

    public function render()
    {
        // dd($this->order_json_amount);
        if (!empty($locale)) {
            App::setLocale($locale);
        }
        else { $locale = app()->getLocale();
        }
        

        if ($locale == 'dk') {
            $this->txt_locale = __('lang.dk');
        }
        else { $this->txt_locale = __('lang.en');
        }
      
        
        $this->payment_screen_title = __('lang.payment_screen_title');      
        $this->txt_danish = __('lang.txt_danish');
        $this->txt_english = __('lang.txt_english');
        $this->txt_language = __('lang.txt_language');
        $this->txt_language_sub_txt = __('lang.txt_language_sub_txt');
        $this->txt_language_sub_txt = __('lang.txt_language_sub_txt');
        
        
        return view('livewire.hpp-header');

    }

    public function changeLang($locale)
    {
        if (!empty($locale)) {
            App::setLocale($locale);
            
            if ($locale == 'dk') {
                $this->txt_locale = __('lang.dk');
            }
            else { $this->txt_locale = __('lang.en');
            }
        }

        $this->payment_screen_title = __('lang.payment_screen_title');
        $this->txt_danish = __('lang.txt_danish');
        $this->txt_english = __('lang.txt_english');
        $this->txt_language = __('lang.txt_language');
        $this->txt_language_sub_txt = __('lang.txt_language_sub_txt');     
         
        
        $this->changeLang = false;

    }

    

}
