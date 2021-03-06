@extends('layouts.app')
@section('title',  $category->categoryname . ' Posts')

@section('content')

<div class="offset-1 mb-5">

    <h3 class="mt-5">{{ $category->categoryname }} category</h3>

</div>

@foreach ($category->PostCategory as $post)
    
    <h2 class="text-center"> 
        <a href={{ route('post.show', $post->post->slug) }}> {{ $post->post->title }} </a>
    </h2>

    <div class="row">
        
        <div class="col-8 offset-2">
            
            <article class="mt-2 mb-3">
                <span class="pl-5 font-weight-bold"> {{ substr($post->post->text, 0, 100) }} </span>          
            </article>
            
            <hr style="border-block-color: lightblue">
            
        </div>

    </div>
                
@endforeach

@endsection