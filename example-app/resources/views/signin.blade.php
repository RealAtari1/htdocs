@extends ('layouts.app')
<form action="/signin/submit" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Your name</label>
    <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Your email</label>
    <input type="email" name="email" placeholder="Enter your email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="text">Your password</label>
    <input type="password" name="password" placeholder="Enter your password" id="password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="OK">
  </div>
</form>
