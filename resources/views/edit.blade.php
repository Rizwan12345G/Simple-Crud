<h1>update Member data</h1>

<form action="{{ url('edit') }}" method="POST">
    @csrf
    <input type="TEXT" name="id" value={{$data['id']}} ><br> <br>
    <input type="text" name="name" value={{$data['name']}}  > <br> <br>
    <input type="text" name="address"  value={{$data['address']}}  > <br> <br>
    <input type="text" name="email" value={{$data['email']}} ><br> <br>
    <button type="submit">Update Members</button>
</form>
