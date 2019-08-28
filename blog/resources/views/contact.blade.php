@extends('master')



@section('maincontent')

<div class="row">

    <div class="col-lg-6">
    <h1>Laba Pvt. Ltd</h1>
    <p>Anamanager, 32, Kathmandu</p>
    <p>Phone : +977 01 47275772</p>
    </div>
    <div class="col-lg-6">
    <form method="POST">
    <fieldset>
        <legend>
        Quick Contact
        </legend>
        <input type="text" name="name" placeholder="Your Name" required/>
        <br/>
        <input type="email" name="email" placeholder="you@domain.com"  required/>
        <br/>
        <textarea name="msg" rows=5 cols="35">
        </textarea>

        <br/>
        <input type="submit" name="submit" value="Send"/>

    </fieldset>
    </form>
    </div>
</div>
@endsection


@section('title')

Contact Us
@endsection