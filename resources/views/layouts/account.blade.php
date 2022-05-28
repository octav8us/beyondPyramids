
@extends('layouts.app')

@section('content')

<div class="container bootstrap snippets bootdey" >
<div class="row">
<div class="profile-nav col-md-3" >
   <div class="panel" id="list-example" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 5px 5px 0px 0px; margin-top: 19px;  ">
       <div class="user-heading round">
           <a href="#">
               <img src="img/51e6kpkyuIL._AC_SL1200_.jpg" alt="">
           </a>
           <h1>Camila Smith</h1>
           <p>deydey@theEmail.com</p>
       </div>
       <ul class="nav nav-pills nav-stacked" >
         <li class="active"  ><a href="/MyAccount.html" style="width: 257px;"> <i class="fa fa-user"></i> Edit Profile</a></li>
         <li > <a href="/wishlisht.html"  style="width: 257px;"> <i class="fa fa-calendar"></i> My Wishlist </a></li>
         <li > <a href="/myplaces.html" style="width: 257px;"> <i class="fa fa-calendar"></i> My Places </a></li>
         <li><a href="#" style="width: 257px;"> <i class="fa fa-edit"></i> Packages</a></li>
     </ul>
     </div>
 </div>






    <div
      class="col-md-7 border-right"
      id="wishlist"
      style="
        font-family: optima;
        color: #14213d;
        background-color: rgb(112, 112, 112, 0.2);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px 5px 0px 0px;
        position: relative;
        left: 100px;
        padding-top: 50px;
      "
          >
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-8">
              <h2>My <b>wishlisht</b></h2>
            </div>
            <div class="col-sm-4">
              <button type="button" class="btn btn-info add-new">
                <i class="fa fa-plus"></i> Add New
              </button>
            </div>
          </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>place</th>
              <th>link</th>
              <th>delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>place1</td>
              <td>link1</td>

              <td>
                <a class="delete" title="Delete" data-toggle="tooltip"
    ><i class="material-icons"></i></a
>
              </td>
            </tr>
            <tr>
              <td>place2</td>
              <td>link2</td>

              <td>
                <a class="delete" title="Delete" data-toggle="tooltip"
    ><i class="material-icons"></i></a
>
              </td>
            </tr>
            <tr>
              <td>place3</td>
              <td>link3</td>

              <td>
                <a class="delete" title="Delete" data-toggle="tooltip"
    ><i class="material-icons"></i></a
>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
</div>


@endsection
