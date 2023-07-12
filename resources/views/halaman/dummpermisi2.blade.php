@extends('layout.aplikasi')
{{----}}
@section('konten')
    <div class="permissions">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Edit Permission</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="#{{--{{ route('permission.create') }}--}}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 mr-2 flex items-center rounded">
                  
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
                <a href="#{{--{{ route('role.create') }}--}}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    
                    <span class="ml-2 text-xs font-semibold">Role</span>
                </a>
            </div>
        </div>

        <div class="mt-8 bg-white rounded">
            <form action="#{{--{{ route('permission.update',$permission->id) }}--}}" method="POST" class="w-full max-w-lg px-6 py-12">
                @csrf
                @method('PUT')
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Permission Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" value="{{--{{ $permission->name }}--}}">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Roles
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                   {{--   @foreach ($roles as $role)--}}  
                            <div class="flex items-center">
                                <label>
                                    <input name="selectedroles[]" class="mr-2 leading-tight" type="checkbox" value="{{--{{ $role->name }}--}}"
                                        
                                          {{-- @foreach ($permission->roles as $item)
                                            {{ ($item->id === $role->id) ? 'checked' : '' }}
                                       @endforeach     --}} 
                                        
                                    >
                                    <span class="text-sm">
                                     {{--{{ $role->name }}--}}   
                                    </span>
                                </label>
                            </div>
                     {{--  @endforeach--}} 
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Update Permission
                        </button>
                    </div>
                </div>
            </form>        
        </div>

    </div>
@endsection