<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="py-3 pl-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Created
            </th>
            <th scope="col" class="py-3 pl-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Products
            </th>
            <th scope="col" class="py-3 pl-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Price
            </th>
            <th scope="col" class="py-3 pl-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Name
            </th>
            
            <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>

    <tbody class="bg-white divide-y divide-gray-200">

        @foreach ($orders as $order)

        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    
                    <div class="ml-0">
                        <div class="text-sm font-medium text-gray-900">
                        {{ \Carbon\Carbon::parse($order['created_at'])->format('d M Y, H:i')}}
                        </div>
                        <div class="text-sm text-gray-500">
                            <!-- jane.cooper@example.com -->
                        </div>
                    </div>
                </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">

                
                @foreach($order['prod_sum'] as $k => $v)
                <div class="inline-block text-sm text-gray-900">{{ucwords($k)}} <span class="text-xs "> x </span> <span>{{$v}}@if ($loop->iteration > $loop->last)<span class="text-xs overflow:hidden whitespace-nowrap">,</span>         
                @endif</span> 
                 
                
                
                @endforeach

            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-flex text-xs font-semibold leading-5 ">
                    {{$order['TotalCostSymbol']}}
                    {{$order['TotalCostAmount']}}
                </span>
            </td>

            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
             {{$order['travelers'][0]['travelerTitle']}}  {{$order['travelers'][0]['travelerFirstName']}} {{$order['travelers'][0]['travelerLastName']}}
            </td>
            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>
            </td>
        </tr>

        <!-- More rows... -->


        @endforeach




    </tbody>

</table>