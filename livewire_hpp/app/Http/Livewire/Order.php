<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Order extends Component
{

    public $txt_booking_details;
    public $txt_review_booking;
    public $txt_flights;
    public $txt_passengers;
    public $txt_price_breakdown;
    public $txt_payment_options;
    public $txt_how_to_pay;
    public $txt_ts_cs;
    public $txt_sub_ts_cs;
    public $txt_ts_cs_para1;
    public $txt_ts_cs_link1;
    public $txt_ts_cs_para2;
    public $txt_ts_cs_para3;
    public $txt_ts_cs_para4;
    public $txt_ts_cs_link2;
    public $txt_pay_now;
    public $txt_add_card;
    public $txt_total;
    public $txt_credit_debit_card;
    public $txt_danish;
    public $txt_english;
    public $txt_language;
    public $txt_language_sub_txt;
    public $txt_locale;




    protected $listeners = ['changeLang' => 'changeLang'];

    public function render()
    {

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

        $this->txt_booking_details = __('lang.txt_booking_details');
        $this->txt_review_booking = __('lang.txt_review_booking');
        $this->txt_flights = __('lang.txt_flights');
        $this->txt_passengers = __('lang.txt_passengers');
        $this->txt_price_breakdown = __('lang.txt_price_breakdown');
        $this->txt_payment_options = __('lang.payment_options');
        $this->txt_how_to_pay = __('lang.how_to_pay');
        $this->txt_ts_cs = __('lang.txt_ts_cs');
        $this->txt_sub_ts_cs = __('lang.txt_sub_ts_cs');
        $this->txt_ts_cs_para1 = __('lang.txt_ts_cs_para1');
        $this->txt_ts_cs_link1 = __('lang.txt_ts_cs_link1');
        $this->txt_ts_cs_para2 = __('lang.txt_ts_cs_para2');
        $this->txt_ts_cs_para3 = __('lang.txt_ts_cs_para3');
        $this->txt_ts_cs_para4 = __('lang.txt_ts_cs_para4');
        $this->txt_ts_cs_link2 = __('lang.txt_ts_cs_link2');
        $this->txt_pay_now = __('lang.txt_pay_now');
        $this->txt_add_card = __('lang.txt_add_card');
        $this->txt_total = __('lang.txt_total');
        $this->txt_credit_debit_card = __('lang.credit_debit_card');
        
        


        return view('livewire.order');
        
    }

    public function changeLang($locale)
    {
        if (!empty($locale)) {
            App::setLocale($locale);
        }


        $this->txt_danish = __('lang.txt_danish');
        $this->txt_english = __('lang.txt_english');
        $this->txt_language = __('lang.txt_language');
        $this->txt_language_sub_txt = __('lang.txt_language_sub_txt');
        $this->txt_language_sub_txt = __('lang.txt_language_sub_txt');

        
        $this->txt_booking_details = __('lang.txt_booking_details');
        $this->txt_review_booking = __('txt_review_booking');
        $this->txt_flights = __('lang.txt_flights');
        $this->txt_passengers = __('lang.txt_passengers');
        $this->txt_price_breakdown = __('lang.txt_price_breakdown');
        $this->txt_payment_options = __('lang.payment_options');
        $this->txt_how_to_pay = __('lang.how_to_pay');
        $this->txt_ts_cs = __('lang.txt_ts_cs');
        $this->txt_sub_ts_cs = __('lang.txt_sub_ts_cs');
        $this->txt_ts_cs_para1 = __('lang.ts_cs_para1');
        $this->txt_ts_cs_link1 = __('lang.ts_cs_link1');
        $this->txt_ts_cs_para2 = __('lang.ts_cs_para2');
        $this->txt_ts_cs_para3 = __('lang.ts_cs_para3');
        $this->txt_ts_cs_para4 = __('lang.ts_cs_para4');
        $this->txt_ts_cs_link2 = __('lang.ts_cs_link2');
        $this->txt_pay_now = __('lang.pay_now');
        $this->txt_add_card = __('lang.add_card');
        $this->txt_total = __('lang.total');
        $this->txt_credit_debit_card = __('lang.credit_debit_card');


    }

}
