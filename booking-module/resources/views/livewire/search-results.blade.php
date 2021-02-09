
    @if(!empty($search_results))

     
        @foreach ($search_results['data'] as $search_result)


            @livewire(
                'search-result', 
                ['search_result' => $search_result], 
                key($search_result['id'])
            )

                     
        @endforeach

    @endif

