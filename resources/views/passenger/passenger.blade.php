@extends('layouts.app')
@section('content')
    @include('components.hero'){{-- Head Nav --}}
    <div class="trip-booking-container container my-5">
        <div class="row align-items-center">

            <!-- Left Side: Trip Schedule -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="mb-4 text-center">Trip Schedules</h3>
                <table class="table table-bordered table-striped shadow-sm">
                    <thead class="table-dark text-center">
                        <tr>
                            <th class="align-middle">Route</th>
                            <th class="align-middle">Departure Time</th>
                            <th class="align-middle">Interval</th>
                            <th class="align-middle">Travel Time</th>
                            <th class="align-middle">Port of Origin</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($routes as $route)
                            <tr>
                                <td class="align-middle">
                                    {{ $route->route_from }} - {{ $route->route_to }}
                                </td>
                                <td class="align-middle">
                                    {{ \Carbon\Carbon::parse($route->departure_time)->format('h:i A') }}
                                </td>
                                <td class="align-middle">
                                    {{ implode(', ', json_decode($route->operating_days, true)) }}
                                </td>
                                <td class="align-middle">{{ $route->travel_time_hours }} hrs</td>
                                <td class="align-middle">{{ $route->port_of_origin }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No routes available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Right Side: Booking Selection -->
            <div class="col-md-6 text-center">
                <h2 class="mb-5">Select Route & Schedule</h2>

                <div class="d-flex gap-3 mb-0 mt-2">
                    <!-- Route From -->
                    <select id="routeFrom" class="form-select">
                        <option value="">Select Origin</option>
                        @foreach ($routes->pluck('route_from')->unique() as $origin)
                            <option value="{{ $origin }}">{{ $origin }}</option>
                        @endforeach
                    </select>

                    <!-- Route To -->
                    <select id="routeTo" class="form-select" disabled>
                        <option value="">Select Destination</option>
                    </select>
                </div>

                <!-- Calendar -->
                <div class="trip-calendar-container">
                    <div class="calendar-input-wrapper">
                        <span class="calendar-icon">
                            <i class="bi bi-calendar-event"></i>
                        </span>
                        <input type="date" id="tripDate" class="calendar-input" disabled />
                    </div>
                </div>

                <div class="d-flex justify-content-center my-3">
                    <button class="proceed-btn" type="button">PROCEED</button>
                </div>
            </div>

        </div>
    </div>

    <script type="application/json" id="routes-data">{!! json_encode($routes) !!}</script>
    <script src="{{ asset('js/booking.js') }}"></script>
@endsection
