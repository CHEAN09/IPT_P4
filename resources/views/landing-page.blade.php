
@extends('base')

@section('content')

<style>
    body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}


/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>

<div class="bg-text">
    <h1>Welcome to IStock</h1>
    <h2>Trace your stocks here!</h2>
    <p>Click here to <a class="text-white" href="/register">register!</a></p>
  </div>