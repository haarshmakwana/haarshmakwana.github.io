@extends('adminTheme.default')

@section('title')
Contact Me
@endsection

<style>
  tbody{
    background-color: gray;
  }
</style>

@section('content')
<div class="card" style="margin-top: 80px;">
  <div class="card-body p-2 m-5">
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center mb-0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contactMe as $key=>$value)
          <tr class="bg-secondary">
            <td>{{ ++$key }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->subject }}</td>
            <td>{{ $value->message }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection