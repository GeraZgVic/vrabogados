@extends('layout.app')

@section('titulo', 'Derecho Civil')

@section('contenido')

<div class="fixed top-0 left-0 w-full h-2 bg-gray-300">
    <div class="h-full bg-blue-500" id="readingProgress" style="width: 0;"></div>
</div>


<!-- sample article -->
<div>
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Scroll to view effect</h1>
        <div class="flex items-center mb-6">
            <div class="h-8 w-8 rounded-full bg-gray-400 mr-4"></div>
            <div>
                <div class="h-2 w-24 bg-gray-400 mb-1"></div>
                <div class="h-2 w-16 bg-gray-400"></div>
            </div>
        </div>
        <p class="text-lg leading-8 mb-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies dui ac suscipit vestibulum.
            Pellentesque euismod turpis vel sapien bibendum, non faucibus justo placerat. In hac habitasse platea
            dictumst. Morbi id tincidunt elit. Praesent consectetur eleifend mi, vitae gravida ante fringilla quis. Duis
            maximus, erat metus interdum eros, in rhoncus leo augue quis quam. Sed rhoncus consequat ipsum, vel egestas
            leo congue eu.
        </p>
        <p class="text-lg leading-8 mb-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies dui ac suscipit vestibulum.
            Pellentesque euismod turpis vel sapien bibendum, non faucibus justo placerat. In hac habitasse platea
            dictumst. Morbi id tincidunt elit. Praesent consectetur eleifend mi, vitae gravida ante fringilla quis. Duis
            maximus, erat metus interdum eros, in rhoncus leo augue quis quam. Sed rhoncus consequat ipsum, vel egestas
            leo congue eu.
        </p>
        <p class="text-lg leading-8 mb-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies dui ac suscipit vestibulum.
            Pellentesque euismod turpis vel sapien bibendum, non faucibus justo placerat. In hac habitasse platea
            dictumst. Morbi id tincidunt elit. Praesent consectetur eleifend mi, vitae gravida ante fringilla quis. Duis
            maximus, erat metus interdum eros, in rhoncus leo augue quis quam. Sed rhoncus consequat ipsum, vel egestas
            leo congue eu.
        </p>
        <p class="text-lg leading-8 mb-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies dui ac suscipit vestibulum.
            Pellentesque euismod turpis vel sapien bibendum, non faucibus justo placerat. In hac habitasse platea
            dictumst. Morbi id tincidunt elit. Praesent consectetur eleifend mi, vitae gravida ante fringilla quis. Duis
            maximus, erat metus interdum eros, in rhoncus leo augue quis quam. Sed rhoncus consequat ipsum, vel egestas
            leo congue eu.
        </p>
        <p class="text-lg leading-8 mb-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies dui ac suscipit vestibulum.
            Pellentesque euismod turpis vel sapien bibendum, non faucibus justo placerat. In hac habitasse platea
            dictumst. Morbi id tincidunt elit. Praesent consectetur eleifend mi, vitae gravida ante fringilla quis. Duis
            maximus, erat metus interdum eros, in rhoncus leo augue quis quam. Sed rhoncus consequat ipsum, vel egestas
            leo congue eu.
        </p>

    </div>
</div>


<script>
    window.addEventListener("scroll", function() {
        var scrollY = window.pageYOffset || document.documentElement.scrollTop;
        var winHeight = window.innerHeight || document.documentElement.clientHeight;
        var docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
        var scrollPercent = (scrollY / (docHeight - winHeight)) * 100;
        document.querySelector("#readingProgress").style.width = scrollPercent + "%";
    });
</script>
@endsection