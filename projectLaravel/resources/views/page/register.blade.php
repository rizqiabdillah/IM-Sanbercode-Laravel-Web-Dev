@extends('layouts.master')
@section('title')
Halaman Register
@endsection
@section('content')


<h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
        <form action="/welcome" method="post">
        @csrf
            <label>First name:</label> <br><br>
                <input type="text" name="fname" > <br><br>
            <label>Last name:</label> <br><br>
                <input type="text" name="lname"> <br><br>

            <label>Gender:</label> <br><br>
                <input type="radio" name="Gender" value="Male">Male<br>
                <input type="radio" name="Gender" value="Female">Female<br>
                <input type="radio" name="Gender" value="Other">Other <br><br>

            <label>Nationality:</label> <br><br>
            <select name="Nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="English">English</option>
            </select> <br><br>

            <label>Language Spoken:</label> <br><br>
                <input type="checkbox" name="Language ">Bahasa Indonesia <br>
                <input type="checkbox" name="Language ">English <br>
                <input type="checkbox" name="Language ">Other <br><br>

            <label>Bio:</label> <br><br>
                <textarea name="Bio" rows="10" cols="30"></textarea> <br>
  
            <button type="submit">Sign Up</button>        
        </form>

@endsection
