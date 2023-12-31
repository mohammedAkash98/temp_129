@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->

 <div class="container">
    <form action="{{ route('user.update',$user->id) }}" method="POST" class=" row g-3">
        @csrf
          <!-- Name -->
          <div class="form-group">
              <label for="name">Name:</label>
              <input value="{{ $user->name }}" type="text" class="form-control" id="name" name="name"  required>
          </div>

          <!-- Age -->
          <div class="form-group">
              <label for="age">Age:</label>
              <input value="{{ $user->age }}" type="number" class="form-control" id="age" name="age"  required>
          </div>

          <!-- School Name -->
          <div class="form-group">
              <label for="school">School Name:</label>
              <input value="{{ $user->school_name }}" type="text" class="form-control" id="school" name="school_name"  required>
          </div>

          <!-- Class -->
          <div class="form-group">
              <label for="class">Class:</label>
              <input value="{{ $user->class }}" type="text" class="form-control" id="class" name="class"  required>
          </div>

          <!-- Gender -->
          <div class="form-group">
              <label>Gender:</label>
              <select class="form-control" name="gender" id="" required>
                <option value="{{ $user->gender }}" selected disabled>{{ ($user->gender) }}</option>
                  <option value="পুরুষ">পুরুষ</option>
                  <option value="মহিলা">মহিলা</option>
              </select>
          </div>

          <!-- Mobile Number -->
          <div class="form-group">
              <label for="mobile">Mobile Number:</label>
              <input value="{{ $user->phone_no }}" type="tel" class="form-control" id="mobile" name="phone_no"  required>
          </div>

          <!-- Email -->
          <div class="form-group">
              <label for="email">Email:</label>
              <input value="{{ $user->email }}" type="email" class="form-control" id="email" name="email"  required>
          </div>

          <!-- Password -->
          <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password"  required>
          </div>

          <!-- Present Address -->
          <div class="form-group">
              <label for="presentAddress">Present Address:</label>
              <textarea class="form-control" id="presentAddress" name="present_address" rows="3"  required>{{ $user->present_address }}</textarea>
          </div>

          <!-- Division -->
          <div class="form-group">
              <label for="division">Division:</label>
              <select class="form-control border border-round" name="division" placeholder='বিভাগ' required>
                  <option value="{{ $user->division }}">{{ $user->division }}</option>
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
          <div class="form-group">
              <label>Nutrition Member:</label>
              <select class="form-control border border-round" name="is_club_member" placeholder='Nutrition Member' required>
                <option value="{{ $user->is_club_member }}">{{ ucfirst($user->is_club_member )}}</option>
                <option value="yes">Yes</option>
                <option value="no">No </option>
            </select>
          </div>

          <div class="form-group">
            <label>Type:</label>
            <select class="form-control border border-round" name="is_club_member" placeholder='Nutrition Member' required>
              <option value="{{ $user->tyep }}">{{ ucfirst($user->type )}}</option>
              <option value="student">Student</option>
              <option value="admin">Admin</option>
          </select>
        </div>

          <div class="form-group">
            <label>Enrolled:</label>
            <select class="form-control border border-round" name="is_club_member" placeholder='Nutrition Member' required>
                <option value="{{ $user->enrolled }}">{{ $user->enrolled}}</option>
                <option value="1">1</option>
                <option value="0">0 </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
      </form>
 </div>


@endsection
