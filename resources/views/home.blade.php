@extends('layouts.main')
@section('content')
<br><br><br>
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">Id</th>
        <th scope="col" class="px-6 py-3">Name</th>
        <th scope="col" class="px-6 py-3">Email</th>
      </tr>
    </thead>
    @foreach ($clients as $item)
    <tbody>
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <td class="px-6 py-4">{{$item['id']}}</td>
          <td class="px-6 py-4">{{$item['name']}}</td>
          <td class="px-6 py-4">{{$item['email']}}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection