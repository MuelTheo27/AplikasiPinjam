@extends('Template')

@section('content')
    {{-- SEARCH BAR DI KANAN ATAS --}}
    <form method="GET" action="" style="position: absolute; top: 6rem; right: 2rem; z-index: 10;">
        <input type="text" name="search" placeholder="Search by car name..." value="{{ request('search') }}"
            style="padding: 0.5rem 1rem; border: 1px solid #ccc; border-radius: 0.375rem; font-size: 0.875rem;">
        <button type="submit"
            style="background-color: #FF5722; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.375rem; cursor: pointer;">
            Search
        </button>
    </form>

    <div
        style="padding: 1.5rem; max-width: 1280px; margin: 0 auto; display:flex; justify-content: center; align-items: center; flex-direction: column; position: relative; margin-top: 60px;">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 2rem;">
            @php
                $cars = [
                    [
                        'carImage' => 'https://auto2000bandung.id/storage/sub_categories/01JBRTVB03RBMFGJDGSGEP6QYG.png',
                        'carName' => 'Avanza',
                        'location' => 'Wahana VW Indonesia Tangerang',
                        'fuelType' => 'Bensin full',
                        'speed' => '125 mph',
                        'wheels' => 'Roda 4',
                    ],
                    [
                        'carImage' => 'https://auto2000bandung.id/storage/sub_categories/01JBRTVB03RBMFGJDGSGEP6QYG.png',
                        'carName' => 'Innova',
                        'location' => 'Wahana VW Indonesia Tangerang',
                        'fuelType' => 'Bensin full',
                        'speed' => '130 mph',
                        'wheels' => 'Roda 4',
                    ],
                    [
                        'carImage' => 'https://auto2000bandung.id/storage/sub_categories/01JBRTVB03RBMFGJDGSGEP6QYG.png',
                        'carName' => 'Xpander',
                        'location' => 'Wahana VW Indonesia Tangerang',
                        'fuelType' => 'Bensin full',
                        'speed' => '120 mph',
                        'wheels' => 'Roda 4',
                    ],
                ];

                $search = request('search');
                $filteredCars = collect($cars)->filter(function ($car) use ($search) {
                    return !$search || stripos($car['carName'], $search) !== false;
                });
            @endphp

            @foreach ($filteredCars as $car)
                <div
                    style="background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1rem; display: flex; gap: 2rem; width: 72%;">
                    {{-- Car Image --}}
                    <div style="width: 50%;">
                        <img src="{{ $car['carImage'] }}" alt="{{ $car['carName'] }}"
                            style="width: 100%; height: auto; object-fit: cover;">
                    </div>

                    {{-- Car Details --}}
                    <div style="width: 50%; display: flex; flex-direction: column; gap: 1rem;">
                        <h3 style="font-size: 1.25rem; font-weight: 600; color: #1a1a1a;">{{ $car['carName'] }}</h3>

                        <div style="display: flex; align-items: center; color: #666;">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                style="width: 1.25rem; height: 1.25rem; margin-right: 0.25rem;" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span style="font-size: 0.875rem;">{{ $car['location'] }}</span>
                        </div>

                        <div style="display: flex; gap: 1rem; font-size: 0.875rem; color: #666;">
                            <span>{{ $car['fuelType'] }}</span>
                            <span>{{ $car['speed'] }}</span>
                            <span>{{ $car['wheels'] }}</span>
                        </div>

                        <div style="display: flex; justify-content: center; padding-top: 1rem;">
                            <button
                                style="background-color: #FF5722; color: white; width:50%; padding: 0.5rem 1.5rem; border-radius: 0.375rem; border: none; cursor: pointer; transition: background-color 0.2s;"
                                onmouseover="this.style.backgroundColor='#F4511E'"
                                onmouseout="this.style.backgroundColor='#FF5722'">
                                Book
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- PAGINATION --}}
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; width:50%;">
            <button type="button"
                style="background-color: #ff5515; border: 1px solid #ff5515; padding: 0.5rem 1rem; border-radius: 0.375rem; font-size: 0.875rem; color: white; cursor: pointer; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);"
                onmouseover="this.style.backgroundColor='#e64a13';" onmouseout="this.style.backgroundColor='#ff5515';">
                Previous
            </button>

            <span style="color: #4b5563; font-size: 0.875rem;">
                Page
            </span>

            <button type="button"
                style="background-color: #ff5515; border: 1px solid #ff5515; padding: 0.5rem 1rem; border-radius: 0.375rem; font-size: 0.875rem; color: white; cursor: pointer; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);"
                onmouseover="this.style.backgroundColor='#e64a13';" onmouseout="this.style.backgroundColor='#ff5515';">
                Next
            </button>
        </div>
    </div>
@endsection
