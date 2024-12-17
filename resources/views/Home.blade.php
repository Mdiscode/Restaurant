@extends('layout')

@section('content')
    <div>
    
        <h1>{{__('Home.heading')}}</h1>
        <h2>Choose language</h2>
        <a href="setlang/en">English</a><br>
        <a href="setlang/hi">Hindi</a><br>
        <a href="setlang/gu">Gujrati</a><br>
       <h4>{{__('Home.content1')}}</h4>
       <h4>{{__('Home.content2')}}</h4> 
       <h4>{{__('Home.content3',['name'=>"Rahul"])}}</h4> 
       <h4>{{__('Home.content4')}}</h4> 
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos deserunt recusandae fuga minima quasi harum neque aliquam porro quae, maxime sapiente, magni temporibus, voluptate aspernatur dolor veniam sit! Sint!</p>
        <br><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos deserunt recusandae fuga minima quasi harum neque aliquam porro quae, maxime sapiente, magni temporibus, voluptate aspernatur dolor veniam sit! Sint!</p>
        <br><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos deserunt recusandae fuga minima quasi harum neque aliquam porro quae, maxime sapiente, magni temporibus, voluptate aspernatur dolor veniam sit! Sint!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos deserunt recusandae fuga minima quasi harum neque aliquam porro quae, maxime sapiente, magni temporibus, voluptate aspernatur dolor veniam sit! Sint!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos deserunt recusandae fuga minima quasi harum neque aliquam porro quae, maxime sapiente, magni temporibus, voluptate aspernatur dolor veniam sit! Sint!</p>
    </div>
@endsection
