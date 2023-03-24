<h1>ADD Members</h1>
{{-- @if ($errors->any())
@foreach ($errors->all() as $req)
<li>{{$req}}</li>
@endforeach
@endif --}}
<form enctype="multipart/form-data" action="{{ url('add') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name "><br>
    <span style="color: blue">
        @error('name')
            {{ $message }}
        @enderror
    </span><BR>
    <input type="text" name="address" placeholder="enter address "> <br>
    <span style="color: blue">
        @error('address')
            {{ $message }}
        @enderror
    </span><BR>
    {{-- <input type="text" name="country" placeholder="enter country "> <br> <br> --}}
    <input type="text" name="email" placeholder="enter email "> <br>
    <span style="color: blue">
        @error('email')
            {{ $message }}
        @enderror
    </span><BR><br>
    <input type="file" name="picture">
    <button type="submit">Add Members</button>
</form>
