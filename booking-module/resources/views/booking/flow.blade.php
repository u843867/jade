@extends ('layouts/booking-flow-layout')


@section ('ibe-body')




  @livewire('booking-backend', ['search_parameters' => $search_parameters])



@stop