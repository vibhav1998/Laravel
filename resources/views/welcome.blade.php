@extends('template')
@section('title', 'Home')
    <!-- Styles -->
@section('style')
    html,
    body {
        margin: 0;
        box-sizing: border-box;
        padding: 0;
    }
    
  
.centered div{
    margin-top: 7rem;
    text-align:center;
}
.centered div h1{
    font-weight: bold;
}
.centered div p{
    font-size: 1.2rem;
    margin: 0px 3rem;
}
 a,a:hover{
    text-decoration: none;
    color: white;
}
@endsection


@section('content')

    @include('nav')

    <div>
    <div class="centered">
    <div>
    <h1>Welcome To This Project</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate doloremque non rerum! Autem modi error labore placeat id consectetur ipsum natus dolore quisquam! Cumque quisquam, deleniti sapiente recusandae non illo eveniet, esse fuga, distinctio nam facere placeat blanditiis! Tempora ipsum ut voluptatem veritatis praesentium ex, commodi sapiente voluptatum aliquam hic.</p>
    <a  href="/about"><button type="button" class="mt-2 btn btn-danger"> About</button></a>
    </div>
    </div>
    </div>

@endsection
