@extends('layouts.header')


@section('content')


      <div class="container">
      <h1>Help</h1>
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#account" aria-expanded="true" aria-controls="collapseOne">
                Creating an Account
              </button>
            </h2>
          </div>
      
          <div id="account" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <ol>
                  <h5>LOGIN</h5>
                    <li>Enter a valid user name.</li>
                    <li>Enter password</li>
                    <li>Click Login.</li>
                    </ol>
            </div>
          </div>

          <div id="account" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ol>
                        <h5>REGISTER</h5>
                        <li>Enter a valid user name.</li>
                        <li>Enter password</li>
                        <li>Enter Email</li>
                        <li>Enter Phone number</li>
                        <li>Click Register</li>
                        </ol>
                </div>
              </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#postProduct" aria-expanded="true" aria-controls="collapseOne">
                   Uploading a product
                </button>
              </h2>
            </div>
        
            <div id="postProduct" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol>
                    <li>After successful account creation, you are directed to the home page.</li>
                    <h5>Incase of a seller: </h5>
                    <li>Navigate to sell and upload product details</li>
                    <li>Fill in all the fields</li>
                    <li>Press the upload button</li>
                    </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#buyer" aria-expanded="true" aria-controls="collapseOne">
                  Buyer
                </button>
              </h2>
            </div>
        
            <div id="buyer" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol>
                    <li>Buyers dont have to login unless they need to chat with sellers or fellow buyers.</li>
                    <li>On access of the application, they are taken to the home page.</li>
                    <li>You click an item image so as to see details about the product.</li>
                    <li>A carousel exists if the product has more than one picture.</li>
                    <li>The seller's detail is displayed together with a brief description of the said product.</li>
                    </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#chats" aria-expanded="true" aria-controls="collapseOne">
                  Chats
                </button>
              </h2>
            </div>
        
            <div id="chats" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol>
                    <li>One can only chat if he/she is registered.</li>
                    <li>Chats are public.</li>
                    
                </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapseOne">
                  Profile
                </button>
              </h2>
            </div>
        
            <div id="profile" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol>
                    <li>In the event that one changes their email address or phone number, it can be updated here. </li>
                    <li>If one wishes to upload or choose a profile picture, they can do so here.</li>
                   
                    </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#viewProducts" aria-expanded="true" aria-controls="collapseOne">
                  View and Update Products
                </button>
              </h2>
            </div>
        
            <div id="viewProducts" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol>
                    <li>A user (seller) can view the products he/she posted</li>
                    <li>Here, the user can delete the products that he/she posted.</li>
                    
                    </ol>
              </div>
            </div>
          </div>
          
          </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    
@endsection