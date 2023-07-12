@extends('layout.aplikasi')

@section('konten')
    <div class="create">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Attendance</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="#{{--{{ route('home') }}--}}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                   
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>

        <div class="w-full mt-8 bg-white rounded">
            <form action="{{--{{ route('attendance.index') }}--}}" method="GET" class="md:flex md:items-center md:justify-between px-6 py-6 pb-0">
                <div class="md:flex md:items-center mb-6 text-gray-700 uppercase font-bold">
                    <div>
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Report Type
                        </label>
                    </div>
                    <div class="flex flex-row items-center bg-gray-200 px-4 py-3 rounded">
                        <label class="block text-gray-600 font-bold">
                            <input name="type" class="mr-2 leading-tight" type="radio" value="class" checked>
                            <span class="text-sm">Class</span>
                        </label>
                        <label class="ml-4 block text-gray-600 font-bold">
                            <input name="type" class="mr-2 leading-tight" type="radio" value="teacher" disabled>
                            <span class="text-sm">Teacher</span>
                        </label>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 text-gray-700 uppercase font-bold">
                    <div>
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Month
                        </label>
                    </div>
                    <div class="block text-gray-600 font-bold">
                        <div class="relative">
                            <select name="month" class="block font-bold appearance-none w-full bg-gray-200 border border-gray-200 text-gray-600 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">--Select Month--</option>
                            {{--@foreach ($months as $month => $values)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach--}}    
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 text-gray-700 uppercase font-bold">
                    <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Generate</button>
                </div>
            </form>

            <div class="w-full px-6 py-6">
             {{--  @foreach ($attendances as $classid => $datevalues)--}} 
                    <h2 class="bg-gray-300 text-gray-500 font-semibold uppercase px-4 py-3">
                        class = IX {{--{{ $classid }}--}}
                    </h2>
                    <div class="flex flex-col bg-gray-200 mb-6">
                     {{--($datevalues as $key => $attendancevals)--}}   @foreach 
                            <div class="text-left text-gray-600 py-2 px-4 font-semibold">
                            {{--{{ $key }}--}}     <span >KEY</span>
                                <div class="flex flex-col justify-between bg-gray-100">
                               {{--@foreach ($attendancevals as $vals => $attendance)--}}      
                                        <div class="flex flex-row justify-between w-64">
                                      {{--{{ $attendance->student->user->name }}--}}       <div class="text-sm text-left text-gray-600 py-2 px-4 font-semibold">DIKOMEN</div>
                                            <div class="text-sm text-left text-gray-600 py-2 px-4 font-semibold">
                                           {{-- @if ($attendance->attendence_status)
                                                  --}}  <span class="text-xs text-white bg-green-500 px-2 py-1 rounded">P</span>
                                             {{--   @else--}} 
                                                    <span class="text-xs text-white bg-red-500 px-2 py-1 rounded">A</span>
                                              {{--  @endif--}}     
                                            </div>
                                        </div>
                               {{-- @endforeach--}}      
                                </div>
                            </div>
              {{--@endforeach--}}           
                    </div>
       {{--@endforeach--}}          
            </div>   
        </div>

    </div>
@endsection