<div id="register" class="animate form registration_form">
    <section class="login_content">
        <form method="POST" action="{{ route('admin.registration') }}" enctype="multipart/form-data">
            @csrf
            <h1>Create Account</h1>
            <div>
                <input type="text" name="nom" class="form-control" placeholder="Lastname" required="" />
            </div>
            <div>
                <input type="text" name="prenom" class="form-control" placeholder="Firstname" required="" />
            </div>
            <div>
                <input type="email" name="login" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            </div>
      
            <div>
                <input type="file" name="image" class="form-control" />
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
                <p class="change_link">Already a member ?
                    <a href="#signin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                    <h1><i class="fa fa-paw"></i> Admistrateur!</h1>
                    <p>©2016 All Rights Reserved. Administrateur! Privacy and Terms</p>
                </div>
            </div>
        </form>
    </section>
</div>
