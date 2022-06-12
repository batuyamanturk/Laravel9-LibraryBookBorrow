@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions|'.$settings->title)
@section('description',  $settings->description)
@section('keywords',  $settings->keywords)
@section('icon',Storage::url($settings->icon))
@section('head')
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }
        .active, .accordion:hover {
            background-color: #ccc;
        }
        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
@endsection
@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Frequently Asked Questions</li>
                </div>
            </div>
        </div>
    </section>

    <button class="accordion">Question 1</button>
    <div class="panel">
        <p>How do i return the book ?</p>
        <p>When your rental period is over, you have to ship it back to us. Otherwise, you will be fined per day that you ship late.</p>
    </div>

    <button class="accordion">Question 2</button>
    <div class="panel">
        <p>How much is the late fee per day?</p>
        <p>The daily late fee is 5 TL.</p>
    </div>



    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection










