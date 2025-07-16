@extends('Template')

@section('content')
<div style="padding: 1.5rem; max-width: 1280px; margin: 0 auto; display:flex; justify-content: center; align-items: center; flex-direction: column;">
    
    <div style="display: flex; flex-direction: column; align-items: center; gap: 2rem;">
        @php
        $listIndex = 0;
        $cars = [
            [
                'carImage' => 'https://auto2000bandung.id/storage/sub_categories/01JBRTVB03RBMFGJDGSGEP6QYG.png',
                'carName' => 'Avanza',
                'location' => 'Wahana VW Indonesia Tangerang Bekasi',
                'fuelType' => 'Bensin/full',
                'speed' => '125 mph',
                'wheels' => 'Roda 4'
            ],
            [
                'carImage' => 'https://auto2000bandung.id/storage/sub_categories/01JBRTVB03RBMFGJDGSGEP6QYG.png',
                'carName' => 'Innova',
                'location' => 'Toyota Astra Pondok Indah Jakarta',
                'fuelType' => 'Bensin/full',
                'speed' => '130 mph',
                'wheels' => 'Roda 4'
            ],
            [
                'carImage' => 'https://auto2000bandung.id/storage/sub_categories/01JBRTVB03RBMFGJDGSGEP6QYG.png',
                'carName' => 'Xpander',
                'location' => 'Mitsubishi Motors Bekasi Timur',
                'fuelType' => 'Bensin/full',
                'speed' => '120 mph',
                'wheels' => 'Roda 4'
            ]
        ];
        @endphp

        @foreach($cars as $car)
            <div style="background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1rem; display: flex; gap: 2rem; width: 72%;">
                {{-- Car Image Section --}}
                <div style="width: 50%;">
                    <img src="{{ $car['carImage'] }}" alt="{{ $car['carName'] }}" style="width: 100%; height: auto; object-fit: cover;">
                </div>

                {{-- Car Details Section --}}
                <div style="width: 50%; display: flex; flex-direction: column; gap: 1rem;">
                    {{-- Car Name --}}
                    <h3 style="font-size: 1.25rem; font-weight: 600; color: #1a1a1a;">{{ $car['carName'] }}</h3>

                    {{-- Location --}}
                    <div style="display: flex; align-items: center; color: #666;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 1.25rem; height: 1.25rem; margin-right: 0.25rem;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span style="font-size: 0.875rem;">{{ $car['location'] }}</span>
                    </div>

                    {{-- Specifications --}}
                    <div style="display: flex; gap: 1rem; font-size: 0.875rem; color: #666;">
                        <span>{{ $car['fuelType'] }}</span>
                        <span>{{ $car['speed'] }}</span>
                        <span>{{ $car['wheels'] }}</span>
                    </div>

                    {{-- Book Button --}}
                    <button style="background-color: #FF5722; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#F4511E'" onmouseout="this.style.backgroundColor='#FF5722'">
    Edit
</button>

<button style="background-color: #DC2626; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#B91C1C'" onmouseout="this.style.backgroundColor='#DC2626'">
    Delete
</button>
                </div>
            </div>
        @endforeach
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; width:50%;">
    <button onclick="location.href=''" type="button" style="background-color: #fff; border: 1px solid #e2e8f0; padding: 0.5rem 1rem; border-radius: 0.375rem; font-size: 0.875rem; color: #3b82f6; cursor: pointer; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
        Previous
    </button>

    <span style="color: #4b5563; font-size: 0.875rem;">
        Page 
    </span>

    <button onclick="location.href=''" type="button" style="background-color: #fff; border: 1px solid #e2e8f0; padding: 0.5rem 1rem; border-radius: 0.375rem; font-size: 0.875rem; color: #3b82f6; cursor: pointer; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
       Next
    </button>
</div>
</div>
@endsection