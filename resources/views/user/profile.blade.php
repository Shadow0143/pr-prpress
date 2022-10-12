@extends('layouts.frontend.app')

@section('title')
<title>Edit your profile | PR and Press</title>
@endsection

@section('content')
<div class="container m-5">
    <form action="{{route('submitProfile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
        <label for="photo">Upload Avtar</label>
        <input type="file" name="photo" id="photo" class="form-control">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required value="{{Auth::user()->email}}"
            readonly>
        <label for="phone">Mobile Number</label>
        <input type="number" name="phone_no" id="phone_no" class="form-control">
        <label for="designation">Desination</label>
        <input type="text" name="designation" id="designation" class="form-control">
        <label for="city">Current City</label>
        <input type="text" name="city" id="city" class="form-control">
        <label for="work_email">Work Email</label>
        <input type="email" name="work_email" id="work_email" class="form-control">
        <label for="dob">Year of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control">
        <label for="website">Website Link</label>
        <input type="url" name="websiteLink" id="websiteLink" class="form-control">
        <label for="twitter">Twitter</label>
        <input type="url" name="twitter" id="twitter" class="form-control">
        <label for="instagram">Instagram</label>
        <input type="url" name="instagram" id="instagram" class="form-control">
        <label for="facebook">Facebook</label>
        <input type="url" name="facebook" id="facebook" class="form-control">
        <label for="linkdin">Linkdin</label>
        <input type="url" name="linkdin" id="linkdin" class="form-control">




        <button type="submit" class="btn bnt-sm btn-outline-primary mt-5">Save Profile</button>
    </form>
</div>
@endsection