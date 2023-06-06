@extends('layout')
@section('title')
Home
@endsection
@section('main_content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Review Hub</h1>
        <p>Welcome to Review Hub - your ultimate destination for honest and comprehensive reviews. We are your trusted source for unbiased evaluations and insightful analysis across a wide range of products and services.</p>
        <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <h1 class="text-center mb-5">Our facilities</h1>
    <div class="row">
        <div class="col-md-4">
            <h2>Objective and honest reviews</h2>
            <p>We offer completely unbiased and honest reviews to help you make an informed decision when choosing a product or service. We guarantee independence and no outside interests will affect our recommendations.</p>
        </div>
        <div class="col-md-4">
            <h2>Wide range of categories</h2>
            <p>The Review Hub covers many categories to suit the different needs and interests of our visitors. Here you will find reviews and comparisons on technology, household appliances, beauty and health, travel and much more. This way you can get all the information you need in one place.</p>
        </div>
        <div class="col-md-4">
            <h2>Proven Expertiseing</h2>
            <p>Our team consists of experienced and competent experts who carefully research and test each product or service before sharing their opinions and recommendations. We provide a high level of quality and reliability of information so that you can be confident in our expert opinion.</p>
        </div>
    </div>

    <hr>

</div> <!-- /container -->
@endsection