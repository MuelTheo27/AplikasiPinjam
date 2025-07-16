@extends('Template')

@section('content')
    <div
        style="padding: 1.5rem; max-width: 1280px; margin: 0 auto; display:flex; justify-content: center; align-items: center; flex-direction: column;">

        <div style="display: flex; flex-direction: column; align-items: center; gap: 2rem;">
            @php
                $listIndex = 0;
                $rooms = [
                    [
                        'roomImage' =>
                            'https://media-public.dekoruma.com/article/2025/03/arsitag-4073945314-1527939251756.jpeg',
                        'roomName' => 'Ruangan Papua',
                        'location' => 'Wahana VW Indonesia Tangerang',
                        'isFreeWiFi' => true,
                        'is24Hour' => true,
                        'totalSeat' => 13,
                    ],
                    [
                        'roomImage' =>
                            'https://media-public.dekoruma.com/article/2025/03/arsitag-4073945314-1527939251756.jpeg',
                        'roomName' => 'Ruangan Sulawesi',
                        'location' => 'Wahana VW Indonesia Tangerang',
                        'isFreeWiFi' => true,
                        'is24Hour' => true,
                        'totalSeat' => 15,
                    ],
                    [
                        'roomImage' =>
                            'https://media-public.dekoruma.com/article/2025/03/arsitag-4073945314-1527939251756.jpeg',
                        'roomName' => 'Ruangan Jawa',
                        'location' => 'Wahana VW Indonesia Tangerang',
                        'isFreeWiFi' => true,
                        'is24Hour' => true,
                        'totalSeat' => 10,
                    ],
                ];
            @endphp

            @foreach ($rooms as $room)
                <div
                    style="background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1rem; display: flex; gap: 2rem; width: 72%;">
                    {{-- Room Image Section --}}
                    <div style="width: 50%;">
                        <img src="{{ $room['roomImage'] }}" alt="{{ $room['roomName'] }}"
                            style="width: 100%; height: auto; object-fit: cover;">
                    </div>

                    {{-- Room Details Section --}}
                    <div style="width: 50%; display: flex; flex-direction: column; gap: 1rem;">
                        {{-- Room Name --}}
                        <h3 style="font-size: 1.25rem; font-weight: 600; color: #1a1a1a;">{{ $room['roomName'] }}</h3>

                        {{-- Location --}}
                        <div style="display: flex; align-items: center; color: #666;">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                style="width: 1.25rem; height: 1.25rem; margin-right: 0.25rem;" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span style="font-size: 0.875rem;">{{ $room['location'] }}</span>
                        </div>

                        {{-- Specifications --}}
                        <div style="display: flex; gap: 1rem; align-items: center;">
                            <div
                                style="display: flex; align-items: center; background-color: #F3F4F6; padding: 0.5rem 1rem; border-radius: 0.375rem;">
                                <span
                                    style="font-size: 0.875rem; color: #4B5563;">{{ $room['isFreeWiFi'] ? 'Free Wi-Fi' : 'No Wi-Fi' }}</span>
                            </div>

                            <div
                                style="display: flex; align-items: center; background-color: #F3F4F6; padding: 0.5rem 1rem; border-radius: 0.375rem;">
                                <span
                                    style="font-size: 0.875rem; color: #4B5563;">{{ $room['is24Hour'] ? '24 hour' : 'Limited Hours' }}</span>
                            </div>
                        </div>

                        <div
                            style="display: flex; justify-content: space-evenly; align-items: center; padding: 0.5rem 1rem; border-radius: 0.375rem; gap: 0.5rem; width: 196px;">
                            <svg width="24" height="24" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.16667 32.375V23.125H30.8333V32.375H27.75V26.2083H9.25V32.375H6.16667ZM4.625 21.5833V16.9583H9.25V21.5833H4.625ZM10.7917 21.5833V4.625H26.2083V21.5833H10.7917ZM27.75 21.5833V16.9583H32.375V21.5833H27.75Z"
                                    fill="black" />
                            </svg>

                            <span style="font-size: 12px; color: #4B5563;">Total seat : {{ $room['totalSeat'] }}</span>
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

        <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; width:50%;">
            <button onclick="location.href=''" type="button"
                style="background-color: #ff5515; border: 1px solid #ff5515; padding: 0.5rem 1rem; border-radius: 0.375rem; font-size: 0.875rem; color: white; cursor: pointer; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);"
                onmouseover="this.style.backgroundColor='#e64a13';" onmouseout="this.style.backgroundColor='#ff5515';">
                Previous
            </button>

            <span style="color: #4b5563; font-size: 0.875rem;">
                Page
            </span>

            <button onclick="location.href=''" type="button"
                style="background-color: #ff5515; border: 1px solid #ff5515; padding: 0.5rem 1rem; border-radius: 0.375rem; font-size: 0.875rem; color: white; cursor: pointer; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);"
                onmouseover="this.style.backgroundColor='#e64a13';" onmouseout="this.style.backgroundColor='#ff5515';">
                Next
            </button>
        </div>
    </div>
@endsection
