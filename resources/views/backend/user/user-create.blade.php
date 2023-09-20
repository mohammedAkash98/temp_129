@extends('backend.layouts.master')

@section('content')
<div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
        <li class="breadcrumb-item active">Add User</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->
<div class="container">
    <h2>Registration Form</h2>
    <form action="{{ route('user.store') }}" method="POST">
      @csrf
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>

        <!-- Age -->
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
            <div>
                @if ($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
            </div>
        </div>

        <!-- School Name -->
        <div class="form-group">
            <label for="school">School Name:</label>
            <input type="text" class="form-control" id="school" name="school_name" required>
            <div>
                @if ($errors->has('school_name'))
                    <span class="text-danger">{{ $errors->first('school_name') }}</span>
                @endif
            </div>
        </div>

        <!-- Class -->
        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" class="form-control" id="class" name="class" required>
            <div>
                @if ($errors->has('class'))
                    <span class="text-danger">{{ $errors->first('class') }}</span>
                @endif
            </div>
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label>Gender:</label>
            <select class="form-control" name="gender" id=""required>
                <option value="পুরুষ">পুরুষ</option>
                <option value="মহিলা">মহিলা</option>
                <div>
                    @if ($errors->has('gender'))
                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
            </select>
        </div>

        <!-- Mobile Number -->
        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobile" name="phone_no" required>
            @if ($errors->has('phone_no'))
            <span class="text-danger">{{ $errors->first('phone_no') }}</span>
            @endif
        </div>


        <!-- Email -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <div>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>

        <!-- Present Address -->
        <div class="form-group">
            <label for="presentAddress">Present Address:</label>
            <textarea class="form-control" id="presentAddress" name="present_address" rows="3" required></textarea>
            <div>
                @if ($errors->has('present_address'))
                    <span class="text-danger">{{ $errors->first('present_address') }}</span>
                @endif
            </div>
        </div>

        <!-- Division -->
        <div class="form-group">
            <label for="division">Division:</label>
            <select class="form-control border border-round" name="division" placeholder='বিভাগ'required>
                <option value="" selected disabled>বিভাগ</option>
                <option value="ঢাকা">ঢাকা</option>
                <option value="চট্রগ্রাম">চট্রগ্রাম </option>
                <option value="রাজশাহী">রাজশাহী</option>
                <option value="খুলনা">খুলনা</option>
                <option value="সিলেট">সিলেট</option>
                <option value="বরিশাল">বরিশাল</option>
                <option value="রংপুর">রংপুর</option>
                <option value="ময়মনসিংহ">ময়মনসিংহ</option>
            </select>
            <div>
                @if ($errors->has('division'))
                    <span class="text-danger">{{ $errors->first('division') }}</span>
                @endif
            </div>
            <div>
        <div class="form-group">
            <label>Nutrition Member:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_club_member" id="nutritionMemberYes" value="yes" required>
                <label class="form-check-label" for="nutritionMemberYes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_club_member" id="nutritionMemberNo" value="no" required>
                <label class="form-check-label" for="nutritionMemberNo">No</label>
            </div>
            <div>
                @if ($errors->has('is_club_member'))
                    <span class="text-danger">{{ $errors->first('is_club_member') }}</span>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
    </form>
</div>

@endsection
