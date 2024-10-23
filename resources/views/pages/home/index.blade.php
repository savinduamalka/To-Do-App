@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12">
               <h1 class="page-title">Home Page</h1> 
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        background-color: #f5f5f5;
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 100px;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        margin-top: 20px;
        font-size: 3rem;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .text-center {
        text-align: center;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .page-title {
            font-size: 2.5rem;
        }

        .container {
            padding: 20px;
        }
    }
</style>
