@extends('layouts.app')

@section('title', 'Laravel Aggregation Documentation')

@section('content')
    <div>
    <p>
        <span class="descriptionTxt">
            get 5 Books with average rating lowest to highest
        </span>
        <span class="commandTxt">
            App\Models\Book::limit(5)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->withAvg('reviews', 'rating')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->get();
        </span>
    </p>
    
    <p>
        <span class="descriptionTxt">
            get 5 Books with average rating order by highest to lowest
        </span>
        <span class="commandTxt">
            App\Models\Book::limit(5)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->withAvg('reviews', 'rating')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->orderBy('reviews_avg_rating','desc')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->get();
        </span>
    </p>
    
    <p>
        <span class="descriptionTxt">
            get Books 10 having 10 review counts ordered by average rating from highest to lowest
        </span>
        <span class="commandTxt">
            App\Models\Book::withCount('reviews')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->withAvg('reviews', 'rating')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->having('reviews_count', '>=', 10)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->orderBy('reviews_avg_rating','desc')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->limit(10)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->get();
        </span>
    </p>

    <p>
        <span class="descriptionTxt">
            get sql query ->toSql()
        </span>
        <span class="commandTxt">
            App\Models\Book::withCount('reviews')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->withAvg('reviews', 'rating')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->having('reviews_count', '>=', 10)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->orderBy('reviews_avg_rating','desc')
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->limit(10)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;->toSql();
        </span>
    </p>

    </div>
@endsection