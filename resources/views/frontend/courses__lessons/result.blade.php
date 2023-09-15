@extends('frontend.courses__lessons.course_2')
@section('course_content')
<style>
    #myProgress {
      width: 100%;
      background-color: #ddd;
      border-radius: 25px;
    }
span  {
    color: orangered;
}
    #myBar {
      width: 1%;
      height: 30px;
      background-color: #04AA6D;
      border-radius: 25px;
    }

    .circular-progress {
    width: 100px;
    height: 100px;
    position: relative;
    display: inline-block;
}

.circular-bar {
    width: 100%;
    height: 100%;
    background-color: transparent;
    border: 5px solid #ddd;
    border-radius: 50%;
    position: absolute;
    clip: rect(0px, 50px, 100px, 0px);
}

.circular-label {
    text-align: center;
    line-height: 100px;
    font-weight: bold;
}

#myBar_1 {
    border-color: #04AA6D;
    transform: rotate(0deg);
}

#myBar_2 {
    border-color: #04AA6D;
    transform: rotate(0deg);
}

#myBar_3 {
    border-color: #04AA6D;
    transform: rotate(0deg);
}
.text-muted {
    font-size: 12px;
}
    </style>
<div class="container">
    <div class="row text-center bg-light py-5 px-4">
        <div class="col-md-12 mb-3">
            <h2>
                <span><i class="lni lni-star-fill"></i></span>
                <span><i class="lni lni-star-fill"></i></span>
                <span><i class="lni lni-star-fill"></i></span>
                <span><i class="lni lni-star-fill"></i></span>
                <span><i class="lni lni-star-fill"></i></span>
            </h2>
        </div>
        <div class="col-md-12 mb-5">
            <img class="mb-2" src="{{ asset('storage/lesson/'. auth()->user()->image) }}" alt="{{ auth()->user()->name }}">
            <h4> {{ auth()->user()->name }}</h4>
        </div>
        <div class="col-md-12 mb-4">
            <h4 class="text-success font-weight-bold">আপনার মূল্যায়নে অংশগ্রহন সম্পন্ন হয়েছে!</h4>
        </div>
        <div class="col-md-12 mb-5" id='myProgress'>
            <div id="myBar"></div>
        </div>
<div class="row">
    <div class="col-md-12 mb-5">
        <h6 class="font-weight-bold">ফলাফল</h6>
    </div>
    <div class="col-md-4" id='myProgress_1'>
        <div class="circular-progress">
            <div class="circular-bar" id="myBar_1"></div>
            <div class="circular-label mb-2">0%</div>
            <p class="font-weight-bold text-muted">সঠিক হয়েছে</p>
        </div>
    </div>
    <div class="col-md-4" id='myProgress_2'>
        <div class="circular-progress">
            <div class="circular-bar" id="myBar_2"></div>
            <div class="circular-label mb-2">0%</div>
           <p class="font-weight-bold text-muted">এড়িয়ে গিয়েছেন</p>
        </div>
    </div>
    <div class="col-md-4" id='myProgress_3'>
        <div class="circular-progress">
            <div class="circular-bar" id="myBar_3"></div>
            <div class="circular-label mb-2">0%</div>
          <p class="font-weight-bold text-muted">ভুল হয়েছে</p>
        </div>
    </div>
    <div class="col-md-12 mt-4">
        <a href="" class="btn btn-success">পরবর্তী পাঠে যান</a>
    </div>
</div>
    </div>
</div>
<script>
    var i = 0;

      function move(number,id){
        if (i == 0) {
        i = 1;
        var elem = document.getElementById(id);
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() {
          if (width >= number) {
            clearInterval(id);
            i = 0;
          } else {
            width++;
            elem.style.width = width + "%";
          }
        }
      }
      }

      move(80,"myBar")

      var i1 = 0;
var i2 = 0;
var i3 = 0;

function moveCircular(number, id, intervalVar) {
    var elem = document.getElementById(id);
    var bar = elem.querySelector(".circular-bar");
    var label = elem.querySelector(".circular-label");
    var currentWidth = parseInt(bar.style.clip.match(/\d+/)[0]);
    var frameInterval = number / 100;

    intervalVar = setInterval(frame, 10);

    function frame() {
        if (currentWidth >= number) {
            clearInterval(intervalVar);
        } else {
            currentWidth += frameInterval;
            bar.style.clip = `rect(0px, 50px, 100px, ${currentWidth}px)`;
            label.textContent = Math.round((currentWidth / 100) * 100) + "%";
        }
    }
}

moveCircular(80, "myBar_1", i1);
moveCircular(50, "myBar_2", i2);
moveCircular(25, "myBar_3", i3);

    </script>
@endsection
