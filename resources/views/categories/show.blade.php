@extends('layouts.app')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-12">
       <h1>categoria : {{ $category->name}}</h1>
       <ul>
         <li>Id: {{$category->id}}</li>
         <li>name: {{$category->name}}</li>
         <li>name: {{$category->slug}}</li>
       </ul>
     </div>
   </div>
 </div>
@endsection
