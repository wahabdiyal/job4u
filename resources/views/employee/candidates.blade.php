
@extends('employee.layout')

@section('title', 'Employee')

 
@section('content')


  <div class="container-fluid p-3 bg-light mb-5">
        <div class="row mt-2">
                      <div class="col-md-3">
                     <div class="p-2 bg-white has-search1">
                            <select class="custom-select text-muted selectcss" id="inputGroupSelect01"
                                style="border: none;">
                                <option selected>Posting Date</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                </div>
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-3">
                     <div class="p-2 bg-white has-search1">
                            <select class="custom-select text-muted selectcss" id="inputGroupSelect01"
                                style="border: none;">
                                <option selected>Posting Date</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div> 
                </div>
            </div>

            <table class="table mt-3">
                <thead class="thead-light">
                    <tr>
                        <th scope="col"><input type="checkbox" name=""></th>
                        <th scope="col" style="font-size: 0.8em;">Name</th>
                        <th scope="col" style="font-size: 0.8em;">Status</th>
                        <th scope="col" style="font-size: 0.8em;">Date</th>
                        <th colspan="2" scope="col" style="font-size: 0.8em;" class="text-center">Interested?</th>


                    </tr>
                </thead>
                <tbody class="bg-white shadow">
                   
                    @foreach($users as $user)
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td style="font-size: 0.8em;"><a href="{{url('employee/candidate',$user->id)}}/{{$user->jobId}}"> {{$user->name}}</a></td>
                        <td style="font-size: 0.8em;"><span class="p-2 bg-light" >{{$user->jobStatus}}</span></td>
                        <td style="font-size: 0.8em;">{{$user->requestTime}}</td>
                        <td class="text-right"><button class="btn btn-danger" style=" border-radius: 8px;">Approved</button></td>
                        <td><button class="btn" style="background-color: #2ec9fd; border-radius: 8px; color: white;">Approved</button></td>
                    </tr>
                    @endforeach
                     
                </tbody>
            </table>



</div>


@endsection