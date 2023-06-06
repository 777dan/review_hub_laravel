@extends('layout')



@section('title')

Reviews

@endsection



@section('main_content')
<div class="container mt-3">
    <h1 class="text-center">Add review form</h1>



    @if($errors->any())

    <div class="alert alert-danger">

        <UL>

            @foreach($errors->all() as $error)

            <Li>{{ $error }}</Li>

            @endforeach

        </UL>

    </div>

    @endif



    <form class="text-center" method="post" action="/review/check">

        @csrf

        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>

        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>

        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>

        <button type="submit" class="btn btn-success">Send</button>

    </form>

    <BR />

    <h1 class="text-center">All reviews</h1>

    @foreach($reviews as $El)

    <div class="alert alert-light border-secondary">

        <h3>{{ $El->subject }}</h3>

        <b>{{ $El->email }}</b>

        <p>{{ $El->message }}</p>

        <p>{{ date('d.m.Y H:i', strtotime($El->created_at)) }}</p>

    </div>

    @endforeach
</div>

@endsection